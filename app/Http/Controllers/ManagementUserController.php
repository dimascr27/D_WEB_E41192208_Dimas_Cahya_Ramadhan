<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
      $nama = "Dimas Cahya Ramadhan";
      $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
      return view('home', compact('nama','pelajaran'));
    }

}
