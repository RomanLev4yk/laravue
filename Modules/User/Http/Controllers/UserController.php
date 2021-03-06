<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user::auth.login');
    }

    public function getUserList()
    {
        return view('user::list');
    }

    public function login()
    {
        return view('user::auth.login');
    }
}
