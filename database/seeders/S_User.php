<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_User;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createUser("admin", "1", "admin");
    }

    function createUser($username, $role="1", $password)
    {
        $nu = new M_User();
        $nu -> username = $username;
        $nu -> role = $role;
        $nu -> password = password_hash($password, PASSWORD_DEFAULT);
        $nu -> save();
    }
}
