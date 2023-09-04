<?php

use Gepe\Contact\Http\Controllers\ContactController;

Route::group(['middleware' => ['web']], function () {
    Route::get('contact', [ContactController::class,'index'])->name('contact');

    Route::post('contact', [ContactController::class, 'send']);
});
