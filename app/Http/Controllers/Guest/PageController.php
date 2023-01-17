<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function index(){
        $today = 
        $trains = Train::whereDate('departure_time', date('Y-m-d'))->get();
        return view('welcome', compact('trains'));
    }
}
