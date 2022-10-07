<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Setting;

class S_Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> addSetting("nama", "Tahfiz Qur'an Al-Haziq");
        $this -> addSetting("pembina", "Muhammad Agung Aditya");
        $this -> addSetting("email", "alhaziq@gmail.com");
        $this -> addSetting("hp", "087822118022");
        $this -> addSetting("alamat", "087811224411");
        $this -> addSetting("bank", "BSI (10122211221) an Agung Aditya");
    }

    function addSetting($nama, $value)
    {
        $ns = new M_Setting();
        $ns -> kd_setting = Str::uuid();
        $ns -> nama_setting = $nama;
        $ns -> value = $value;
        $ns -> save();
    }

}
