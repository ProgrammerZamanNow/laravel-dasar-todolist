<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function login(): Response
    {
        return response()
            ->view("user.login", [
                "title" => "Login"
            ]);
    }

    public function doLogin()
    {

    }

    public function doLogout()
    {

    }
}
