<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // database/seeders/RumahSakitSeeder.php

    public function run()
    {
        DB::table('rumah_sakit')->insert([
            'nama' => 'Rumah Sakit Kariadi',
            'alamat' => 'Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244',
            'latitude' => -6.984444,
            'longitude' => 110.424722,
            'gambar' => 'NULL',
            'link' => 'https://www.rs-kariadi.co.id', 
        ]);
    
    }
}
