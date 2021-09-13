<?php

namespace Database\Seeders;

use App\Models\Admin\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
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
                'name'      => "My Website",
                "logo"      => "uploads/logo.png",
                "about"     => null,
                "instagram_link" => "#",
                "twitter_link"  => "#",
                "facebook_link" => "#",
                "youtube_link"  => "#",
                "copyright"     => "© 2021 MDH Diigtal. All Rights Reserved",
                "notice"        => "Covid 19 Update: We are open for business",
                "email"         => "mdede.hidayatullah@gmail.com",
                "phone"         => "6285794298878",
                "address"       => "Kp Panagogan, Rt 30 Rw 10, Desa GunungEndut Kec Kalapanunggal",
                "fax"           => "02194298878"
            ]
        ];
        Setting::insert($data);
    }
}
