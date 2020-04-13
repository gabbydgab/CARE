<?php

Route::group(['middleware' => "auth"], function () {
    Route::get('/household', "HouseholdControllerd@index")->name('household.listing');
    Route::get('/household/create', 'HouseholdController@create')->name('household.form');
    Route::post('/household/', "HouseholdController@store")->name('household.store');
});
