<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Penerbit::create([
        //    'nama_penerbit' =>'tere liye',
        //    'alamat' => 'indonesia',
        //    'no_telepon' =>'0812'   
        // ]);
        // Penerbit::create([
        //     'nama_penerbit' =>'dee lestari',
        //     'alamat' => 'indonesia',
        //     'no_telepon' =>'0812'   
        // ]);

        Penerbit::factory(50)->create();
    }
}
