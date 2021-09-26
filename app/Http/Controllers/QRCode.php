<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCode extends Controller
{
    public function Index(){
        return view ("QR");
    }
}
