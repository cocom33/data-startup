<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard', function () {
    return view('admin.includes.app');
});

Route::get('admin/indikator', function () {
    return view('admin.indicator.index');
});

Route::get('admin/indikator/create', function () {
    return view('admin.indicator.form');
});
