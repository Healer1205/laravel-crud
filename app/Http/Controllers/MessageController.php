<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
    	// $parts = DB::table('parts')->get();
     //    return view('mypartlist', compact("parts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save_msg(Request $request)
    {
        DB::table('messages')->insert(
    		['message' => $request->message]
		);

        return redirect('/mail');
    }
}
