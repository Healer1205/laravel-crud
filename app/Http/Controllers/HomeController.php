<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Part;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('parts')->get();
        $brands = DB::select("SELECT DISTINCT brand FROM parts");
        $models = DB::select("SELECT DISTINCT model FROM parts");
        $categorys = DB::select("SELECT DISTINCT part_category FROM parts");
        return view('home', compact("data", "brands", "models", "categorys"));
    }

    public function result(Request $request)
    {
        $data = DB::table('parts')->where([
            ['brand', $request->brand],
            ['model', $request->model],
            ['part_category', $request->category],
        ])->get();
        return json_decode($data);
    }

    public function select(Request $request)
    {
        // $results = DB::select("SELECT DISTINCT model FROM parts WHERE brand = '$request->brand'");
        $results = DB::table('parts')->where('brand', $request->brand)->get(['model']);
        // return json_decode($results);
        return $results;
    }

}
