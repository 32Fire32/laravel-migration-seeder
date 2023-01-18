<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time', '>=', date('2023-01-17'))->get();
        return view('welcome', compact('trains'));
    }
}
