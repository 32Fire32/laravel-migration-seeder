<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time', '>=', Carbon::now())->get();
        return view('welcome', compact('trains'));
    }
}
