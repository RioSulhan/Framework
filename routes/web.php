<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dosen', function(){
    $dosens = ["Arip","Retna","Purnomo","Roni","Ade","Arin","Ilham","Roy","Maman","Dudung"];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Rio","Sulhan","Abdillah","Muhammad","Mifat","Luthfi","Gibran","Haris","Heri","Nur"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Framework Pemrograman Web","Data Mining","Pemrograman Berbasis Web","Technopreneur","Blockchain","Cloud Computing","Statistika dan Probabilitas","Budaya Bangsa","Rekayasa Perangkat Lunak","Pemrograman Berbasis Web"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');
