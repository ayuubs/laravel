<?php

use App\penjualanbuku;
use Illuminate\Database\Seeder;

class jualbuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New penjualanbuku;
        $buku->jenis_buku = 'buku bucin';
        $buku->judul_buku = 'jangan ada dia diantara kita';
        $buku->harga_jualsatuan = 20000;
        $buku->harga_jualeceran = 100000;
        $buku->save();
        //
    }
}
