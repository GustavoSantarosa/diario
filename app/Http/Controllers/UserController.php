<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
       // $user = new User();
       // $user->name = 'Gustavo';
       // $user->email = 'bolota_xd@hotmail.com';
       // $user->password = Hash::make('123');
        //$user->save();

       // echo "<h1>Listagem de Usuario";

       $user = User::where('id', 1)->first();
       //dd($user);
       return view('listUser', [
           'user' => $user
       ]);
    }
}
