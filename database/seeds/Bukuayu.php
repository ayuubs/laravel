<?php

use App\Buku;
use Illuminate\Database\Seeder;

class Bukuayu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Buku;
        $buku->judul = 'belajar php';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia';
        $buku->synopsis = 'blablabla';
        $buku->status = 1;
        $buku->save();
        //
    }
}
