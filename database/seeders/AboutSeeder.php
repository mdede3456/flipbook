<?php

namespace Database\Seeders;

use App\Models\Frontend\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
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
                'title'     => "About Page",
                "description"   => null,
                "banner"    => null,
                "status"    => "active"
            ]
        ];
        About::insert($data);
    }
}
