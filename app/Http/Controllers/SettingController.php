<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Message;

class SettingController extends Controller
{
    public function index()
    {
    	$data = DB::table('users')->get();
    	$mails = DB::table('messages')->get();
    	return view('mail', compact('data', 'mails'));
    }
}
