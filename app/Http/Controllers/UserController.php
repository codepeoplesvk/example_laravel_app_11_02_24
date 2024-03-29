<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();



        return view('users.users', ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = User::all();
        return view('users.users',['users' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {


        $validate = $request->validated();





        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('images');
        }
        $user = User::create([
            'name' =>  $validate['name'],
            'address' =>  $validate['address'],
            'gender' =>  $validate['gender'],
            'image' =>  $path,
        ]);

        return redirect()->route('users.index', ['users' => $user->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $user = User::findOrFail($id);
        $users = User::all();
        return view('users.users', ['user_details' => $user, 'users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $users = User::all();
        return view('users.users', ['user_info' => $user, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {

        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->fill($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $user->image = $path;
        }
        $user->save();
        $users = User::all();
        return view('users.users', ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
