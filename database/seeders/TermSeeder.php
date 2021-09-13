<?php

namespace Database\Seeders;

use App\Models\Frontend\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
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
        Term::insert($data);
    }
}
