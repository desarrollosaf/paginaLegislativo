<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Test User",
            "email" => "test@legislativoedomex.gob.mx",
            "password" => Hash::make("cmspassword$")
        ]);
    }
}
