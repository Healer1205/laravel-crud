<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Message;

class NewmailController extends Controller
{
    public function index()
    {
    	$order = Message::find(\DB::table('messages')->max('id'));
    	// $temp = $order[0];
    	// $mails = DB::table('parts')->where('id', \DB::raw("(select max(`id`) from messages)"))->get();
        return view('newmail', compact("order"));
    }
}
