<?php


use App\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {
        Setting::truncate();

        Setting::create([
            'app_name'     => 'IndigO',
            'app_baseline' => 'Simple, Fast, Responsive',
            'theme'        => 'bootstrap3',
        ]);
    }
}
