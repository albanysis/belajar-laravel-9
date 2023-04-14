<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kasir extends Controller
{
    public function index()
    {
        echo "INI ADALAH HALAMAN BERANDA <strong>KASIR</strong> <br> <a href='logout'>Logout</a>";
    }
}
