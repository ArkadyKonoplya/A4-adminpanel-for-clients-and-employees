<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use App\RequestQuote;
use App\Notification;
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
        return redirect('client');

    }
    // Client list View
    public function client()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();
        $RequestQuote = DB::table('clients')->get();
        return view('admin/client', ['RequestQuote' => $RequestQuote, 'user' => $user, 'notifications' => $notifications]);
    }
    // Client create form
    public function client_create()
    {
        $client = DB::table('clients')->get();
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();
        return view('admin/client_create', ['clients' => $client, 'user' => $user, 'notifications' => $notifications]);
    }

    // Client create
    public function client_create_save(request $request)
    {
        $client = new Client();
        $client->Company_name= $request->Companyname;
        $client->Business_number= $request->businessnumber;
        $client->first_name= $request->firstname;
        $client->last_name= $request->lastname;
        $client->Phone_number= $request->phonenumber;
        $client->Cell_number= $request->cellnumber;
        $client->Carriers= $request->carriers;
        $client->HST_number= $request->HSTnumber;
        $client->Website= $request->website;
        $client->save();

        $Notification = new Notification();
        $Notification->objects= 'client';
        $Notification->actions= "create";
        $Notification->save();


        return redirect('client');
    }

    //Client edit form
    public function client_edit($id)
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $clients = DB::table('clients')->where('id', $id)->first();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();

        return view('admin/client_edit', ['clients' => $clients, 'user' => $user, 'notifications' => $notifications]);
    }

    //Client update
    public function client_edit_save($id, request $request)
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
       
        $client = Client::find($id);
        $client->Company_name= $request->Companyname;
        $client->Business_number= $request->businessnumber;
        $client->first_name= $request->firstname;
        $client->last_name= $request->lastname;
        $client->Phone_number= $request->phonenumber;
        $client->Cell_number= $request->cellnumber;
        $client->Carriers= $request->carriers;
        $client->HST_number= $request->HSTnumber;
        $client->Website= $request->website;
        $client->Status= $request->Status;
        $client->save();

        $Notification = new Notification();
        $Notification->objects= 'client';
        $Notification->actions= "update";
        $Notification->save();

        return redirect('/client');    
    }

    // Employee list view
    public function employee()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();
        
        $Employees = DB::table('users')->get();
        return view('admin/employee', ['Employees' => $Employees, 'user' => $user, 'notifications' => $notifications]);
    }

    // A employee Create form
    public function employee_create()
    {
        $employees = DB::table('users')->get();
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();

        return view('admin/employee_create', ['employees' => $employees, 'user' => $user, 'notifications' => $notifications]);
    }

    // A employee Create
    public function employee_create_save(request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $name = $firstname." ".$lastname;

        $employee = new User();
        $employee->name= $name;
        $employee->First_Name= $request->firstname;
        $employee->Last_Name= $request->lastname;
        $employee->email= $request->email;
        $employee->Cell_number= $request->cellnumber;
        $employee->phone= $request->cellnumber;
        $employee->Position= $request->Position;
        $pwd = $request->password;
        $password = Hash::make($pwd);
        $employee->password= $password;
        $employee->save();

        $Notification = new Notification();
        $Notification->objects= 'Employee';
        $Notification->actions= "create";
        $Notification->save();

        return redirect('employee');
    }
    // A employee View
    public function employee_edit($id)
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $employees = DB::table('users')->where('id', $id)->first();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();

        return view('admin/employee_edit', ['employees' => $employees, 'user' => $user, 'notifications' => $notifications]);
    }

    // A employee Update
    public function employee_edit_save($id, request $request)
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $employee = User::find($id);
        $employee->First_Name= $request->firstname;
        $employee->Last_Name= $request->lastname;
        $employee->email= $request->email;
        $employee->Cell_number= $request->cellnumber;
        $employee->phone= $request->cellnumber;
        $employee->Position= $request->Position;
        $employee->Status= $request->Status;
        $employee->save();

        $Notification = new Notification();
        $Notification->objects= 'Employee';
        $Notification->actions= "update";
        $Notification->save();

        return redirect('/employee');    
    }




    // User profile show
    public function profile()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();

        return view('auth/profile',['user' => $user, 'notifications' => $notifications]);
    }

    // Profile password reset
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

    // profile image update
    public function update_avatar(request $request)
    {


        $user = Auth::user();
        $avatarName = $user->id.'_avatar'.time().'.'.request()->profile_photo->getClientOriginalExtension();
        $request->profile_photo->storeAs('avatars',$avatarName);
        $user->image = $avatarName;
        $user->save();
        return back();
    
    }
    // A Client delete
    public function client_destroy($id){
   
        DB::table('clients')->where('id', $id)->delete();

        $Notification = new Notification();
        $Notification->objects= 'Client';
        $Notification->actions= "delete";
        $Notification->save();

        return back();
    }

    // A Employee delete
    public function employee_destroy($id){
   
        DB::table('users')->where('id', $id)->delete();
        $Notification = new Notification();
        $Notification->objects= 'Employee';
        $Notification->actions= "delete";
        $Notification->save();
        return back();
    }

    // Logs Show
    public function notiifcation()
    {
        $userID = auth()->user()->id;
        $user = DB::table('users')->where('id', $userID)->get();
        $notifications_logs = DB::table('notifications')->get();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(3)->get();
        return view('admin/notifications', ['notifications' => $notifications, 'user' => $user, 'notifications_logs' => $notifications_logs]);
    }


}
