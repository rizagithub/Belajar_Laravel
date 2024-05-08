<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'username'=>'riza',
        //     'jenis_kelamin'=>'P',
        //     'nama'=>'Riza',
        //     'no_telepon'=>'085',
        //     'level'=>'admin',
        //     'email'=>'rizatullamongan2002@gmail.com',
        //     'password'=> Hash::make('password')
        // ]);
        // User::create([
        //     'username'=>'Jeno',
        //     'jenis_kelamin'=>'L',
        //     'nama'=>'Jeno Lee',
        //     'no_telepon'=>'085',
        //     'level'=>'admin',
        //     'email'=>'jeno@gmail.com',
        //     'password'=> Hash::make('password')
        // ]);

        // User::factory(50)->create();
    }
}

