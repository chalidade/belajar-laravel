<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    function show($name, $class) {
        $mapel = ["Matematika", "IPA", "IPS", "Bahasa Indonesia"];

        return view('about', ["name" => $name, "class" => $class,  "mapel" => $mapel]);
    }

    function form() {
        return view('form');
    }

    function form_proses(Request $request) {
        $mapel = ["Matematika", "IPA", "IPS", "Bahasa Indonesia"];

        $nama = $request->input('nama');
        $kelas = $request->input('kelas');
        $alamat = $request->input('alamat');

        return view('about', ["name" => $nama, "class" => $kelas, "mapel" => $mapel, "alamat" => $alamat ]);
    }
}
