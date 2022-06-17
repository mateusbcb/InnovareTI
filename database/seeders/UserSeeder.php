<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = [
            'Endereço' => [
                'Principal' => 'Sim',
                'CEP' => '16165165165',
                'Logradouro' => "Rua x",
                'Numero' => 00,
                'Cidade' => 'cidade A',
                'Bairo' => 'Bairo B',
                "Estado" => 'AB',
                "Pais" => 'Pais C'
            ]
        ];

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'admin' => 1,
            'address' => json_encode($address),
            'phone' => '81165116161',
            'password' => Hash::make('admin')
        ]);
    }
}
