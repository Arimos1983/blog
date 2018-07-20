<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::with('posts')->find($id);
        return view('users.show', compact('user'));
    }
}
