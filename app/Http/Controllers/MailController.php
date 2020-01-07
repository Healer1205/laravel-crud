<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Message;

class MailController extends Controller
{
    public function index()
    {
    	$mails = DB::table('messages')->get();
        return view('mail', compact("mails"));
    }
}
