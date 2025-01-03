<?php

namespace App\Console\Commands;

use App\Models\Street;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\ZipCode;

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
        $headers = [
            'accept' => 'text/json',
        ];

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
                    $this->error("Failed to fetch data for postalCode {$postalCode} on page {$page}");
                    break;
                }

                $data = $response->json();

                if (empty($data)) {
                    $this->info("No more data for postalCode {$postalCode}. Stopping pagination.");
                    break;
                }

                $postalCodes = array_column($data, 'postalCode');
                foreach ($postalCodes as $zipCode) {
                    $this->info("Fetching streets for postalCode {$zipCode}...");
                    $streetResponse = Http::withHeaders($headers)->get($baseUrlStreets, [
                        'postalcode' => $zipCode,
                    ]);

                    if ($streetResponse->failed()) {
                        $this->error("Failed to fetch streets for postalCode {$zipCode}");
                        continue;
                    }

                    $streetsData = $streetResponse->json();
                    foreach ($streetsData as $street) {
                        $streetName = $street['name'] ?? null;
                        $locality = $street['locality'] ?? null;
                        $federalState = $street['federalState']['name'] ?? null;

                        $cityWithState = $federalState ? "{$locality}, {$federalState}" : $locality;

                        if ($streetName && $cityWithState) {
                            $zip = ZipCode::firstOrCreate(
                                ['zip_code' => $zipCode, 'city' => $cityWithState],
                            );
                            Street::firstOrCreate(
                                ['street' => $streetName, 'zip_code_id' => $zip->id],
                            );
                        }
                    }
                }

                $page++;
            }
        }

        $this->info('Data fetching and saving completed.');
    }
}
