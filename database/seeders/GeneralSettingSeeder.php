<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_settings')->insert([
            [
                'site_name' => 'TrxMod21X',
                'base_color' => '673ee5',
                'secondary_color' => '673ee5',                                
                'force_ssl' => 0,
                'maintenance_mode' => 0,
                'secure_password' => 0,
                'system_info' => '[]',
            ],
        ]);
    }
}
