<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Part;

class MypartlistController extends Controller
{
    public function index()
    {
    	$parts = DB::table('parts')->get();
        return view('mypartlist', compact("parts"));
    }

}
