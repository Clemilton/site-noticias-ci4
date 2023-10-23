<?php

namespace App\Controllers;

use App\Models\Category;

class Home extends BaseController
{
    public function index()
    {

        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        return view('home', ['title' => 'Home']);
    }
}
