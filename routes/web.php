<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\jualbuku;

Route::get('/', function () {
    return Buku::all();
});



Route::get('/s', function () {
    return view('welcome');
});

Route::get('/variabel', function () {
    $data1 = 'ini variabel data1';
    $data2 = 'ini variabel data2';
    $data3 = 'ini variabel data3';
    $data4 = 'ini variabel data4';
    $data5 = 'ini variabel data5';
    return $data1 .'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{jurusan2}', function () {
    $jurusan = ' Cangkuang - Cibaduyut';
    $data = 'Angkot Jurusan : ';
    $jurusan2 = 'Rancamanyar - Baleendah';
    return $data .' '.$jurusan.'<br>'.$data.' '.$jurusan2;
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama, $alamat, $nomor){
    return 'halo '.$nama.' yang beralamat di '.$alamat.' Nomor '.$nomor;
});

Route::get('user/{nama}/{nilaii?}', function ($nama, $nilaii = 'nilai eror'){
    if($nilaii >= 50 ){
        $nilai = 'Grade A';
    }
    else if($nilaii < 50 && $nilaii >=40 ){
        $nilai = 'Grade B';
    }
    else if($nilaii < 40 && $nilaii >= 30 ){
        $nilai = 'Grade C';
    }
    else if($nilaii < 30 && $nilaii >= 20 ){
        $nilai = 'Grade D';
    }
    else if($nilaii < 20 && $nilaii >= 10 ){
        $nilai = 'Grade E';
    }
   // else{
   //     echo 'error';
   // }
    return 'Nama : '.$nama.'<br> nilai : '.$nilaii.'<br> mendapatkan '.$nilai;
});



Route::get('ContohController2', 'ContohController@latihan2');

Route::get('profil', 'ContohController@latihan3');
Route::get('profil2', 'ContohController@latihan4');

Route::get('profill', 'biodata@bio');

Route::get('pesanah/{menu?}/{menu2?}/{uk?}', 'biodata@pesann');

Route::get('get-buku', 'Bukuu@index');
Route::get('hitung', 'Bukuu@hitungbuku');
Route::get('delete-buku/{id}', 'Bukuu@delete');
Route::get('update-buku/{id}', 'Bukuu@update');

Route::get('hm', 'Bukuu@buat');