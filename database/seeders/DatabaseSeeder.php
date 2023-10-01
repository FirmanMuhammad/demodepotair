<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\penjualan;
use \App\Models\Galon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::insert(
            [
                [
                    'name' => 'admin',
                    'last_name' => '-',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('1'),
                    'is_admin' => '1',
                ],
                [
                    'name' => 'user',
                    'last_name' => '-',
                    'email' => 'user@user.com',
                    'password' => Hash::make('1'),
                    'is_admin' => '0',
                ],
                [
                    'name' => 'Veni',
                    'last_name' => 'Wigiyanti',
                    'email' => 'veni.wg@gmail.com',
                    'password' => Hash::make('1'),
                    'is_admin' => '0',
                ],
            ]
        );

      

        Galon::create([

            'jenis' => 'Galon Kemasan',
            'merk' => 'AQUA',
            'liter_air' => '19',
            'stok' => '30',
            'tarif' => '20000'
        ]);
    }
}
