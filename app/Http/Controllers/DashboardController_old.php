<?php

namespace App\Http\Controllers;

use App\RequestQuote;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function dashboard()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        
        $RequestQuote = DB::table('request_quote')->get();
        return view('dashboard', ['RequestQuote' => $RequestQuote, 'user' => $user]);
    }
    public function profile()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        return view('auth/profile',['user' => $user]);
    }
    public function EditProfile(request $request)
    {
        $userID = auth()->user()->id;
        $username = $request->username;
        $country = $request->country;
        $email = $request->email;
        $phone = $request->digits;
        $suggestions = $request->suggestions;
        $editdata = array(
			'name' 	  =>  $username,
			'email' =>  $email,
			'country'	=> $country,
			'phone' => $phone,
			'comment' => $suggestions
		);
        DB::table('users')->where('id', $userID)->update($editdata);
        $user = DB::table('users')->where('id', $userID)->get();
        return view('auth/profile',['user' => $user]);
    }
    public function ResetPwd(request $request)
    {
        $password = $request->passwordNew;
        $hashedpassword = auth()->user()->password;
        $passwordNew = $request->password;
        
        if(! Hash::check( $password , $hashedpassword ))
        {
            $passwordLength = strlen($password);
                return "password";
            
        }else{
            $userID = auth()->user()->id;
            $password = Hash::make($passwordNew);
            $editdata = array(
                'password' 	  =>  $password
            );
            DB::table('users')->where('id', $userID)->update($editdata);

            return false;
        }
        
    }
    public function update_avatar(request $request)
    {


        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->profile_photo->getClientOriginalExtension();

        $request->profile_photo->storeAs('avatars',$avatarName);

        $user->image = $avatarName;
        $user->save();
        return back();
    
    }
}
