<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index', [
            'users' => User::all(),
        ]);
    }
    public function about()
    {
        return view('about');
    }
}
