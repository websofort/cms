<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class TranslateSeeder extends Seeder
{

    public function run()
    {
        $germanLanguage = Language::where('code', 'de')->first();
        if (!$germanLanguage){
            Language::create(['code' => 'de', 'name' => 'German','is_default' => '1']);
        }


    }
}
