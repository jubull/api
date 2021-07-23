<?php
Route::group(['prefix' => 'admin'], function () {
    Route::get('/abc', function () {
        return 'hdPHP';
    });
});
