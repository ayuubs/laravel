<?php

use App\Perpustakaan;
use Illuminate\Database\Seeder;

class perpus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Perpustakaan;
        $buku->jenis_buku = 'Perjuangan seseorang';
        $buku->tanggal_pinjam = '02-12-19';
        $buku->tanggal_kembali = '01-01-20';
        $buku->save();
        //
    }
}
