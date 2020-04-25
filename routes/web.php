<?php

Route::view('/', 'sample');
Route::post("check-form", function(\Illuminate\Http\Request $request) {
    dd($request->post());
})->name('post-form');
