<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodata extends Controller
{
    public function bio () {
        $a = ' ayuubs';
        $b = ' islam';
        $c = ' perempuan';
        $d = ' Rancamanyar';
        $e = ' SMK Assalaam Bandung';
        $f = ' 11';
        $g = ' RPL';
        $h = ' Nyanyi';
        $i = ' 17';
        return view ('bioo', compact('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'));
    }
    //
    public function pesann($a = null, $b = null, $c = null) {
        if(isset($a)){
        $a = ' Anda mesan '.$a;
        }
            if(isset($b)){
            $b = ' & '.$b;
            }
            if(isset($c)){
                if($c >= 25000 ){
                    $c = 'ukuran Big';
                }
                else if($c < 25000 && $c >15000 ){
                    $c = 'ukuran Medium';
                }
                else if($c <= 15000 && $c >0 ){
                    $c = 'ukuran Small';
                }
                else {
                    $c = 'kalo ga pnya uang gausah pesen';
                }
            }
        if(!isset($a)){
            $a = 'Anda belum pesan apa apa';
        }
        return view ('makan', compact('a','b','c'));
    }
}
