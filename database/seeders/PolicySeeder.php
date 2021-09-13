<?php

namespace Database\Seeders;

use App\Models\Frontend\Policy;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
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
        Policy::insert($data);
    }
}
