<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Part;
use App\Sale;

class MysaleController extends Controller
{
    public function index()
    {
    	$user_name = Auth::user()->name;

    	$parts = DB::table('sales')->where( 'username', $user_name)->get();

    	$admins = DB::table('sales')->get();


    	// $parts = DB::table('parts')->where('part_name', $data->partname)->get();

        return view('mysales', compact("parts", "admins"));
    }

    public function sales(Request $request)
    {
    	$user_name = Auth::user()->name;
    	$partlists = DB::table('parts')->where('part_name', $request->part_name)->get();
    	DB::table('sales')->insert([
    		'username' => $user_name,
    		'partname' => $request->part_name,
    		'item_info' => $partlists[0]->item_info,
    		'brand' => $partlists[0]->brand,
    		'model' => $partlists[0]->model,
    	]);
    	return redirect('/mypartlist');
    }
    
}
