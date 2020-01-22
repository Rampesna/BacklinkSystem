<?php

use Illuminate\Database\Seeder;
use App\Models\LinksTableModel;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LinksTableModel::create([
            'url' => 'rampesna.codes',
            'remained' => 20,
            'alexa_global' => '100000',
            'alexa_country' => '5000',
            'google_index_count' => '20',
            'sites_linking_in' => '60',
            'type' => 'backlink',
            'is_adult' => 0,
            'da_value' => '25',
            'pa_value' => '15'
        ]);

        LinksTableModel::create([
            'url' => 'mediawbh.com.tr',
            'remained' => 10,
            'alexa_global' => '20000',
            'alexa_country' => '1000',
            'google_index_count' => '80',
            'sites_linking_in' => '230',
            'type' => 'backlink',
            'is_adult' => 1,
            'da_value' => '10',
            'pa_value' => '6'
        ]);
    }
}
