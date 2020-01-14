<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class Bukuu extends Controller
{
    public function index() {
        $buku = Buku::select('judul', 'jumlah_halaman', 'penerbit', 'synopsis')->find(2);
        return $buku; 
    }
    public function hitungbuku() {
    $buku = Buku::count();
    return $buku;
    }
    public function buat(){
        $buku = New Buku;
        $buku->judul = 'this is cinta yaudahiya';
        $buku->jumlah_halaman = 200;
        $buku->penerbit = 'cgv blitz';
        $buku->synopsis = 'hyahiya';
        $buku->status = 1;
        $buku->save();
        return $buku;
    }
    public function update($id){
        $buku = Buku::find($id);
        $buku->judul = 'yaudah we atsehhh';
        $buku->jumlah_halaman = 200;
        $buku->penerbit = ' blitz';
        $buku->synopsis = 'hohohoho';
        $buku->status = 1;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
    
}
