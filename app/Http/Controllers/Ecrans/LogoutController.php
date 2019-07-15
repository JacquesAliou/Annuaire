<?php

namespace App\Http\Controllers\Ecrans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request)  {
        $request->session()->flush();
        return redirect('/');
    }
}
