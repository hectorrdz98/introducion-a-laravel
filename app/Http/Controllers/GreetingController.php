<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GreetingController extends Controller
{
    public function saludar() {
        $users = DB::table('vendors')->get();
        return view('greeting', ['users' => $users]);
    }

    public function login(Request $request) {
        $email = $request->input('email');
        DB::insert('insert into vendors (email) values (?)', 
            [$email]);
        return back();
    }
}
