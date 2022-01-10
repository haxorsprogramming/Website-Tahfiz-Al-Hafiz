<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> createRole("1", "ADMINISTRASI", "User untuk mamanajemen seluruh kegiatan tahfiz");
        $this -> createUser("admin", "1", "admin");
        $this -> createKafilah("AL HALIM", "-", "HANIFAH");
        $this -> createKafilah("AL FATTAH", "-", "MAULANA");
        $this -> createKafilah("AR RAHMAN", "-", "DITA");
    }

    function createKafilah($nama, $deks, $userWali)
    {
        DB::table('tbl_kafilah') -> insert([
            'id_kafilah' => Str::uuid(),
            'nama' => $nama,
            'deksripsi' => $deks,
            'username_wali' => $userWali,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => '1'
        ]);
    }

    function createUser($username, $role="1", $password)
    {
        DB::table('tbl_user') -> insert([
            'username' => $username,
            'role' => $role,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    function createRole($kdRole, $roleName, $deks)
    {
        DB::table('tbl_role') -> insert([
            'kd_role' => $kdRole,
            'role_name' => $roleName,
            'deks' => $deks
        ]);
    }
}
