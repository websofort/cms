<?php

namespace App\Console\Commands;

use App\Models\Street;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\ZipCode;
use Illuminate\Support\Facades\Log;

class FetchPostalCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:postal-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from the OpenPLZ API for postal codes 0-9 and save to the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseUrlLocalities = 'https://openplzapi.org/de/Localities';
        $baseUrlStreets = 'https://openplzapi.org/de/Streets';
        $headers = ['accept' => 'text/json'];

        for ($postalCode = 0; $postalCode <= 9; $postalCode++) {
            $this->info("Fetching data for postalCode starting with {$postalCode}...");

            $page = 1;
            while (true) {
                $response = Http::withHeaders($headers)->get($baseUrlLocalities, [
                    'postalCode' => "^{$postalCode}",
                    'page' => $page,
                    'pageSize' => 50,
                ]);

                if ($response->failed()) {
                    $this->error("Failed to fetch data for postalCode {$postalCode}, page {$page}. Status: " . $response->status());
                    break;
                }

                $data = $response->json();
                if (empty($data)) {
                    $this->info("No more data for postalCode {$postalCode}. Stopping pagination.");
                    break;
                }

                foreach ($data as $entry) {
                    $zipCode = $entry['postalCode'] ?? null;
                    if (!$zipCode) continue;

                    $this->info("Fetching streets for postalCode {$zipCode}...");
                    $streetPage = 1;

                    while (true) {
                        $streetResponse = Http::withHeaders($headers)->get($baseUrlStreets, [
                            'postalcode' => $zipCode,
                            'page' => $streetPage,
                            'pageSize' => 50,
                        ]);

                        if ($streetResponse->failed()) {
                            $this->error("Failed to fetch streets for postalCode {$zipCode}, page {$streetPage}");
                            break;
                        }

                        $data = $streetResponse->json();
                        if (empty($data)) {
                            $this->info("No more streets for postalCode {$zipCode}. Stopping pagination.");
                            break;
                        }

                        foreach ($data as $street) {
                            $streetName = $street['name'] ?? null;
                            $locality = $street['locality'] ?? null;
                            $federalState = $street['federalState']['name'] ?? null;
                            $this->info("streetName: {$streetName}, locality: {$locality}, federalState: {$federalState}");
                            $cityWithState = $federalState ? "{$locality}, {$federalState}" : $locality;

                            if ($streetName && $cityWithState) {
                                $zip = ZipCode::firstOrCreate(
                                    ['zip_code' => $zipCode, 'city' => $cityWithState]
                                );
                                Street::firstOrCreate(
                                    ['street_name' => $streetName, 'zip_code_id' => $zip->id]
                                );
                            }
                        }

                        $streetPage++;
                    }
                }

                $page++;
            }
        }

        $this->info('Data fetching and saving completed.');
    }
}
