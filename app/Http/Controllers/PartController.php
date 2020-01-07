<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use App\Part;
use DataTables;
use Validator;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = DB::table('parts')->get();
        $brands = DB::select("SELECT DISTINCT brand FROM parts");
        $models = DB::select("SELECT DISTINCT model FROM parts");
        $categorys = DB::select("SELECT DISTINCT part_category FROM parts");
        
        return view('part', compact("parts", "brands", "models", "categorys"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $rules = array(
            'part_name' => 'required',
            'part_no' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $imagePath = $_FILES['photo']['name'];
        $folder="/xampp/htdocs/history/public/img";
        
        $form_data = array(
            'part_name' => $request->part_name,
            'part_no' => $request->part_no,
            'Qty_in_stock' => $request->qty_in_stock,
            'tested' => $request->tested,
            'item_info' => $request->item_info,
            'condition' => $request->condition,
            'price' => $request->price,
            'photo' => $imagePath,
            'saler_id' => $request->saler_id,
            // 'add_save' => $request->add_save,
            'brand' => $request->brand,
            'model' => $request->model,
            'part_category' => $request->category,
        );

        Part::create($form_data);

        return redirect('/part');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function selectbrand(Request $request)
    {
        $results = DB::table('parts')->where('brand', $request->brand)->get(['model']);
        // return json_decode($results);
        return $results;
    }
}
