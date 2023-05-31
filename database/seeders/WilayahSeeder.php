<?php

namespace Database\Seeders;

use App\Models\Wilayah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Wilayah::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Jember', 'Pamekasan'
        ];

        foreach ($data as $value) {
            Wilayah::insert([
                'nama_wilayah' => $value
            ]);
        }
    }
}
