<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    //
    public function index() {
        Role::create(['name'=>'writer']);
        return view('home');
    }
}
