<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('front.home');
    }
    public function redirect() {
        $usertype = Auth::user()->usertype;
        if($usertype == '1') {
            return view('admin.dashboard');
        }else{
            return view('front.home');
        }
    }
}
