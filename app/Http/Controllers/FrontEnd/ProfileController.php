<?php

namespace App\Http\Controllers\FrontEnd;

use App\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view("FrontEnd.profile.index", compact("user"));
    }

    public function userProfile()
    {
        $user = User::find(Auth::user()->id);

        return view("FrontEnd.profile.index", compact("user"));
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('FrontEnd.profile.edit', [
            "users" => $users,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_muzakki' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'username' => 'required',
        ]);

        $users = user::where('id', $id);
        $users->update($request->except('_token', '_method'));
        return redirect()->route('profile.index');
    }
}
