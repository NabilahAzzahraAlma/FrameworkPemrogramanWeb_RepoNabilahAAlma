<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 3. Membuat controller "UtsController"
class UtsController extends Controller
{
    public function index()
    {
        return view('uts.index'); // Hal index nya uts sama menu
    }

    public function pemrogramanWeb()
    {
        return view('uts.pemrograman-web'); // View nya menu pemro web
    }

    public function database()
    {
        return view('uts.database'); // View nya menu database
    }
}
