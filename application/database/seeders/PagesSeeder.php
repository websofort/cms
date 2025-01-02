<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class PagesSeeder extends Seeder{
    public function run(){


        $page = Page::where('slug','!=','/')->where('tempname','presets.default.')->get();
        foreach ($page as $item) {
            $item->delete();
        }
        Page::create(['name' => 'About us', 'slug' => 'about','secs' => json_encode(['about']),
            'tempname' => 'presets.default.','is_default' => '0',
            'created_at' => now(), 'updated_at' => now()]);
        Page::create(['name' => 'Downloads', 'slug' => 'downloads','secs' => json_encode(['']),
            'tempname' => 'presets.default.','is_default' => '0',
            'created_at' => now(), 'updated_at' => now()]);

    }
}
