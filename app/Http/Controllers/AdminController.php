<?php

namespace App\Http\Controllers;
use App\Models\Flight_info;
use App\Models\Journey_info;
use App\Models\Admin_info;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin_login(){
        return view('admin.admin_login');
    }
    function admin_login_pass(Request $req){
        $credintial=$req->validate([
            'phone'=>'required',
            'password'=>'required'
        ]);
        $find=Admin_info::where('phone',$req->phone)->where('password',$req->password)->get();

        if($find){
            return "login successfull";
            session(['admin_user'=>$find]);
            
        }else{
            return redirect()->route('admin_login')->with('error','Phone and password doesnt match');
        }
    }
    function admin_dashboard(){
        return view('admin.admin_panel');
    }
    function admin_flight(){
        return view('admin.admin_flight');
    }
    function add_flight_view(){
        return view('admin.add_flight');
    }
    function edit_flight_view(){
        return view('admin.edit_flight');
    }
    function edit_flight_search_view(){
        return view('admin.flight_edit_search');
    }
    function new_flight(Request $req){
        // $user = new User();
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->adress = $req->adress;
        // $user->phone = $req->phone;
        // $user->password = $hashedPassword;
        // $user->save();
        $class=explode('-',$req->class,);
        $seat=explode('-',$req->total_seat);
        $price=explode('-',$req->price);

        if(count($class)>0){
            for($i=0;$i<count($class);$i++){
                $n_f=new Flight_info();
                $n_f->flight_type=$req->flight_type;
                $n_f->flight_name=$req->flight_name;
                $n_f->start_destination=$req->start_destination;
                $n_f->final_destination=$req->final_destination;
                $n_f->start_time=$req->start_time;
                $n_f->finish_time=$req->finish_time;
                $n_f->class=$class[$i];
                $n_f->total_seat=$seat[$i];
                $n_f->price=$price[$i];
                $n_f->journey_date=$req->j_date;
                $n_f->cabin_kg=$req->cabin;
                $n_f->check_in=$req->checkin;
                $n_f->save();
                
            }
        }
        return redirect()->route('add_flight')->with('flight_added','New Flight Added');
        

    }
    function edit_flight(Request $req){
        
        $found_flight=Flight_info::where('id',$req->flight_id)->where('flight_name',$req->flight_name)->get();
        // return $found_flight;
        if($found_flight){
            // $edit_flight=$found_flight[0];
            $flight=$found_flight[0];
            // $f=compact('flight');
            session(['flight'=>$flight]);

            return view('admin.edit_flight');
        }else{
            return redirect()->route('flight_edit_search')->with('error','Flight does not exist');
        }

    }
}
