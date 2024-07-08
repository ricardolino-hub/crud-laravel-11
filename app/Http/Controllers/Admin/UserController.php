<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   
        $users = User::paginate(5);
        return view('admin.users.index', compact('users'));
    }
}
