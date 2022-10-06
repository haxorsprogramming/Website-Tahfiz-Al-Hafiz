<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_Role;

class S_Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createRole("1", "ADMINISTRASI", "User untuk mamanajemen seluruh kegiatan tahfiz");
    }

    function createRole($kdRole, $roleName, $deks)
    {
        $role = new M_Role();
        $role -> kd_role = $kdRole;
        $role -> role_name = $roleName;
        $role -> deks = $deks;
        $role -> save();
    }
}
