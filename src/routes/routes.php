<?php

use Illuminate\Support\Facades\Route;

/**
 * Created by PhpStorm.
 * User: Testuser
 * Date: 2020-11-09
 * Time: 오후 11:00
 */

Route::get('/files', function () {
//    return view('welcome');
    return "files";
});

Route::get('/load-test', [Sky9s\FileDb\FileDb::class,'loadTest'])->name('load-test');
Route::post('/upload-files', [Sky9s\FileDb\FileDb::class,'uploadFiles'])->name('upload-files');