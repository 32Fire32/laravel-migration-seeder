<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
