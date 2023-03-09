<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'username' => 'required|regex:/[а-яА-ЯёЁ0-9]/u|max:500',
            'password' => 'required|between:6,20|confirmed',
            'email' => 'required|unique:users|email:rfc,dns',
            'agree' => 'required'
        ]);

        $user = new User();

        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

        return redirect()->route('login');

    }

    public function auth(Request $request) {

        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::query()->where('email', $request->email)->first();
        if (Hash::check($request->password, $user->password)){

            Auth::login($user);

        }

        return redirect()->route('user');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
