<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $user =  new User();
        $user->all();
        echo "Ini adalah output dari class UserController method index \n";
    }
}
