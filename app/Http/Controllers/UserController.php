<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function profile()
    {
        return view('auth/profile');
    }

    public function updateprofile(User $user, Request $request)
    {
        $user_id = Auth::user()->id;
        DB::table('users')->where('id', $user_id)->update([
        	'name' => $request->fname,
        	'last_name' => $request->last_name,
        	'email' => $request->email,
        	'password' => bcrypt($request->password),
        	'address' => $request->address,
        	'postal_code' => $request->postal_code,
        	'city' => $request->city,
        	'country' => $request->country,
        	'tel' => $request->tel,
        	'whatsapp' => $request->whatsapp,
        	'company_name' => $request->company_name,
        	'company_register_nr' => $request->company_register_nr,
        	'tax_nr' => $request->tax_nr,
        	'bank_account_nr' => $request->bank_account_nr,
        	'bank_account_receiver_name' => $request->bank_account_receiver_name,
        ]);

        return back();
    }
}
