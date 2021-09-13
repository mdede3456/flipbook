<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => "Dede Hidayatullah",
                'email'     => "mdede.hidayatullah@gmail.com",
                'password'  => Hash::make("11223344"),
                'photo'     => "uploads/image.jpg",
                "banner"    => "uploads/banner.jpg",
                "role"      => "super_admin",
            ],
            [
                'name'      => "Harum Sidik",
                'email'     => "harum@gmail.com",
                'password'  => Hash::make("11223344"),
                'photo'     => "uploads/image.jpg",
                "banner"    => "uploads/banner.jpg",
                "role"      => "admin",
            ]
        ];
        User::insert($data);
    }
}
