<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class SortController extends Controller
{

    public function show(Request $request)
    {
        $user = User::orderBy($request->sort)->get();

        return view('users.users', ['users' => $user]);
    }
}
