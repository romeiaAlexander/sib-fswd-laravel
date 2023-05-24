<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return 'ini Halaman Create';
    }
}
