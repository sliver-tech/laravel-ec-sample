<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        return view('admin.user.index')->with(['users' => $users]);
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function update()
    {
        return view('admin.user.update');
    }

    public function delete()
    {
        return view('admin.user.delete');
    }
}
