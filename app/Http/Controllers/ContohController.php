<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan () {
        return "ini contoh latihan controller";
    }

    public function latihan2 () {
        $a = 'Ayuu';
        $b = 'Shaffira';
        return 'Nama saya adalah '.$a.' '.$b;
    }

    
    public function latihan3 () {
        $a = ' ayuubs';
        return view ('test', compact('a'));
    }

     
    public function latihan4 () {
        $a = 'ayuuuuuu';
        return view ('test2', ['nama' => $a ]);
    }
    //
}
