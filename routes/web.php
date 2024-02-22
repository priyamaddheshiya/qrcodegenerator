<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
    // $name = 'Priya';
    // $phoneNumber = '9876543212';

    // // Concatenate name and phone number into a single string
    // $string = $name . ' ' . $phoneNumber;

    // // Generate QR code with the concatenated string
    // $qrcode = QrCode::size(100)->generate($string);

    // return view('welcome')->with('qrcode', $qrcode);
});
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/generate-qrcode/{id}', [UserController::class, 'generateQRCode'])->name('user.generate.qrcode');