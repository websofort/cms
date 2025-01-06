<?php

namespace Database\Seeders;

use App\Models\Locations;
use App\Models\zip_code;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(){
        Locations::create(['zip_code' => '10115', 'street' => 'Invalidenstraße', 'city' => 'Berlin', 'state' => 'Berlin', 'country' => 'Germany']);
        Locations::create(['zip_code' => '20095', 'street' => 'Mönckebergstraße', 'city' => 'Hamburg', 'state' => 'Hamburg', 'country' => 'Germany']);
        Locations::create(['zip_code' => '80331', 'street' => 'Marienplatz', 'city' => 'Munich', 'state' => 'Bavaria', 'country' => 'Germany']);
        Locations::create(['zip_code' => '04109', 'street' => 'Petersstraße', 'city' => 'Leipzig', 'state' => 'Saxony', 'country' => 'Germany']);
        Locations::create(['zip_code' => '50667', 'street' => 'Hohe Straße', 'city' => 'Cologne', 'state' => 'North Rhine-Westphalia', 'country' => 'Germany']);
        Locations::create(['zip_code' => '30159', 'street' => 'Georgstraße', 'city' => 'Hanover', 'state' => 'Lower Saxony', 'country' => 'Germany']);
        Locations::create(['zip_code' => '60549', 'street' => 'Frankfurter Straße', 'city' => 'Frankfurt', 'state' => 'Hesse', 'country' => 'Germany']);
        Locations::create(['zip_code' => '01067', 'street' => 'Prager Straße', 'city' => 'Dresden', 'state' => 'Saxony', 'country' => 'Germany']);
        Locations::create(['zip_code' => '90402', 'street' => 'Königstraße', 'city' => 'Nuremberg', 'state' => 'Bavaria', 'country' => 'Germany']);
        Locations::create(['zip_code' => '28195', 'street' => 'Am Wall', 'city' => 'Bremen', 'state' => 'Bremen', 'country' => 'Germany']);
        Locations::create(['zip_code' => '40213', 'street' => 'Königsallee', 'city' => 'Düsseldorf', 'state' => 'North Rhine-Westphalia', 'country' => 'Germany']);
        Locations::create(['zip_code' => '68161', 'street' => 'Planken', 'city' => 'Mannheim', 'state' => 'Baden-Württemberg', 'country' => 'Germany']);
        Locations::create(['zip_code' => '70173', 'street' => 'Königstraße', 'city' => 'Stuttgart', 'state' => 'Baden-Württemberg', 'country' => 'Germany']);
        Locations::create(['zip_code' => '90491', 'street' => 'Pirckheimerstraße', 'city' => 'Nuremberg', 'state' => 'Bavaria', 'country' => 'Germany']);
        Locations::create(['zip_code' => '50672', 'street' => 'Venloer Straße', 'city' => 'Cologne', 'state' => 'North Rhine-Westphalia', 'country' => 'Germany']);
        Locations::create(['zip_code' => '14467', 'street' => 'Brandenburger Straße', 'city' => 'Potsdam', 'state' => 'Brandenburg', 'country' => 'Germany']);
        Locations::create(['zip_code' => '89073', 'street' => 'Hirschstraße', 'city' => 'Ulm', 'state' => 'Baden-Württemberg', 'country' => 'Germany']);
        Locations::create(['zip_code' => '19053', 'street' => 'Schweriner Straße', 'city' => 'Schwerin', 'state' => 'Mecklenburg-Vorpommern', 'country' => 'Germany']);
        Locations::create(['zip_code' => '99084', 'street' => 'Anger', 'city' => 'Erfurt', 'state' => 'Thuringia', 'country' => 'Germany']);
        Locations::create(['zip_code' => '27568', 'street' => 'Hafenstraße', 'city' => 'Bremerhaven', 'state' => 'Bremen', 'country' => 'Germany']);

    }
}
