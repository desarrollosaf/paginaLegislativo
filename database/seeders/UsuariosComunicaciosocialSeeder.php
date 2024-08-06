<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UsuariosComunicaciosocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Vianey Hernández ",
            "email" => "vianey.nunez@legislativoedomex.gob.mx",
            "password" => Hash::make("11dgc041122")
        ]);
        User::create([
            "name" => "Linda Ramírez",
            "email" => "linda.ramirez@legislativoedomex.gob.mx",
            "password" => Hash::make("12dgc041122")
        ]);
        User::create([
            "name" => "Francisco Gonzalez",
            "email" => "francisco.gonzalez@legislativoedomex.gob.mx",
            "password" => Hash::make("13dgc041122")
        ]);
        User::create([
            "name" => "Diego Aldair",
            "email" => "diego.velazquez@legislativoedomex.gob.mx",
            "password" => Hash::make("14dgc041122")
        ]);
        User::create([
            "name" => "Ruth Sánchez",
            "email" => "ruth.sanchez@legislativoedomex.gob.mx",
            "password" => Hash::make("15dgc041122")
        ]);
        User::create([
            "name" => "María Guadalupe Mercado",
            "email" => "guadalupe.mercado@legislativoedomex.gob.mx",
            "password" => Hash::make("16dgc041122")
        ]);
    }
}
