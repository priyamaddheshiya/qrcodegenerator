<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;

class userController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('welcome')->with('users', $users);
    }

    public function generateQRCode($id)
    {
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        $string = $user->name . ' ' . $user->phone;
        $qrcode = QrCode::size(100)->generate($string);

        return view('welcome')->with('qrcode', $qrcode)->with('user', $user);
    }
}
