<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_User;

class C_Auth extends Controller
{
    public function loginPage()
    {
        return view('auth.loginPage');
    }
    public function loginProcess(Request $request)
    {
        $username = $request -> username;
        $password = $request -> password;
        // cari total user 
        $tUser = M_User::where('username', $username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
        }else{
            // cari data user 
            $dataUser = M_User::where('username', $username) -> first();
            $passwordDb = $dataUser -> password;
            $cek_password = password_verify($password, $passwordDb);
            if($cek_password == true){
                $status = "ACCESS_GRANTED";
            }else{
                $status = "WRONG_PASSWORD";
            }
        }
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
