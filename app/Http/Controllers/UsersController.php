<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Edit;
use Session;
use App\User;
use Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit($id)
    {
        $user = Auth::user($id);
        return view('pages.edit')->withUser($user);
    }
    
    public function update(Request $request, $id)
    {
        $user = Auth::user($id);
        if($request->input('old_password') == "" || $request->input('password') == "" || $request->input('password_confirmation') == "")
        {
        if($request->input('email') == $user->email){
           $this->validate($request, array(
            'vardas' => 'required|max:255',
            'pavarde' => 'required|max:255',
            'salis' => 'required|max:255',
            'miestas' => 'required|max:255',
            'email' => 'required|email|min:5|max:255'
        )); 
        }
        else {
        $this->validate($request, array(
            'vardas' => 'required|max:255',
            'pavarde' => 'required|max:255',
            'salis' => 'required|max:255',
            'miestas' => 'required|max:255',
            'email' => 'required|email|min:5|max:255|unique'
        ));
        }
        $user = User::find($id);
        
        $user->vardas = $request->input('vardas');
        $user->pavarde = $request->input('pavarde');
        $user->salis = $request->input('salis');
        $user->miestas = $request->input('miestas');
        $user->email = $request->input('email');
        $user->save();
        }
        else
        {
            if($request->input('email') == $user->email){
           $this->validate($request, array(
            'vardas' => 'required|max:255',
            'pavarde' => 'required|max:255',
            'salis' => 'required|max:255',
            'miestas' => 'required|max:255',
            'email' => 'required|email|min:5|max:255', 
            'old_password' => 'required',
            'password' => 'required|confirmed'
        )); 
        }
        else {
        $this->validate($request, array(
            'vardas' => 'required|max:255',
            'pavarde' => 'required|max:255',
            'salis' => 'required|max:255',
            'miestas' => 'required|max:255',
            'email' => 'required|email|min:5|max:255|unique',
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ));
        }
        $user = User::find($id);
        
        $user->vardas = $request->input('vardas');
        $user->pavarde = $request->input('pavarde');
        $user->salis = $request->input('salis');
        $user->miestas = $request->input('miestas');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->fill([
            'password' => Hash::make($request->input('password'))
        ])->save();
        }
        Session::flash('success:', 'The user data was saved!');
        
        return Redirect()->route('welcome');
    }
}
