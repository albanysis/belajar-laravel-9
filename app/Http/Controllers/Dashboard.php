<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        echo "INI ADALAH HALAMAN BERANDA <strong>ADMIN</strong> <br> <a href='logout'>Logout</a>";
    }
}
