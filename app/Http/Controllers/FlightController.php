<?php

namespace App\Http\Controllers;

use App\Models\Flight_info;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Journey_info;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class FlightController extends Controller
{
    function login(){
        return view('login');
    }
    function reg(){
        return view('register');
    }
    // function register(Request $req){

    //     $req->validate([
    //         // 'email'=>'required|unique:user_info,email',
    //         'email'=>'required',
    //         // 'phone'=>'required|numeric|unique:user_info,phone',
    //         'password'=>'required|confirmed',
    //     ]);



    //     // $name=$req->name;
    //     // $last_name=$req->lastname;
    //     // $space=" ";
    //     // $username=$name.$space.$last_name;
    //     // $user=new User();
    //     // $user->name=$username;
    //     // $user->email=$req->email;
    //     // $user->adress=$req->adress;
    //     // $user->phone=$req->phone;
    //     // $user->password=$req->password;
    //     // $user->save();

    //     if(Auth::attempt($req->only(['email' => $req->email, 'password' => $req->password]))){
    //         return redirect()->route('login');
    //     }else{
    //         return "hocche na";
    //     }

        // $user=new User();
        // $user->name=$req->
        function register(Request $req){

            $req->validate([
                'email' => 'required|unique:user_info,email',
                'password' => 'required|confirmed',
            ]);

            // Hash the password
            $hashedPassword = bcrypt($req->password);

            // Save the user
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->adress = $req->adress;
            $user->phone = $req->phone;
            $user->password = $hashedPassword;
            $user->save();

            // Attempt to log in the user
            if(Auth::attempt(['phone' => $req->phone, 'password' => $req->password])){
                session(['login'=>'true']);
                $user=User::where('phone',$req->phone)->get();
                session()->forget('user');
                session(['user'=>$user]);
                return redirect()->route('search_flight');
            } else {
                return "hocche na";
            }
        }
        function login_pass(Request $req){
            $credintial=$req->validate([
                'phone'=>'required',
                'password'=>'required'
            ]);
            $phone=$req->phone;
            // for($i=0;$i<2;$i++){
            //     if
            // }
            $att=Auth::attempt(['phone'=>$req->phone,'password'=>$req->password]);
            if($att){
                session(['login'=>'true']);
                session()->forget('user');
                $user=User::where('phone',$req->phone)->get();
                // $us=$user[0];
                session(['user'=>$user]);
                // return session('user')['name'];
                return redirect()->route('search_flight');
            }else{
                return redirect()->route('login')->with('error','Phone and password doesnt match');
            }
        }
        function search_flight(){
            return view('search_flight');
        }
        function show_flights(){
            return view('result');
        }
        function third(){
            return view('third_page');
        }
        function clicksearch(Request $req){
            $req->validate([

                'from'=>'required|string',
                'to'=>'required|string',
                'journey_date'=>'required',
                'return_date'=>'required',
                'travellers'=>'required|integer|between:1,4'

            ]);
            $journey_date=date('d-m-Y',strtotime($req->journey_date));
            $return_date=date('d-m-Y',strtotime($req->return_date));
            $arr1=Flight_info::where('start_destination',$req->from)->where('final_destination',$req->to)->where('journey_date',$journey_date)->where('class',$req->triptype)->get();

            if(count($arr1)>0){
                session(['arr1'=>$arr1]);
                $round_trip='false';
                // echo $round_trip;
                // echo $req->trip_type;
                if($req->trip_type=='round-trip'){
                    $round_trip='true';
                    session(['trip'=>'Round Trip']);
                    $start=$req->to;
                    $final=$req->from;
                    $arr2=Flight_info::where('start_destination',$start)->where('final_destination',$final)->where('journey_date',$return_date)->where('class',$req->triptype)->get();
                    session(['arr2'=>$arr2]);


                }else{
                    session(['trip'=>'One Way Trip']);
                }

                $travellers=$req->travellers;
                $dateFromHtmlInput = $req->journey_date;
                $carbonDate = Carbon::parse($dateFromHtmlInput);

                // Format the date as 'd M, Y' (e.g., 4 Dec, 2023)
                $date= $carbonDate->format('j M, Y');

                // Get the day of the week (e.g., Monday)
                $dayOfWeek = $carbonDate->format('l');
                $day=substr($dayOfWeek,0,3);
                session(['date'=>$date]);
                session(['day'=>$day]);
                session(['travellers'=>$travellers]);
                 return redirect()->route('show_flights')->with('round_trip',$round_trip);

                // return $arr2;

            }




        }
        function third_page($id,$total_seat){
            $arr=Flight_info::where('id',$id)->get();
            $unformatted_date=$arr[0]['journey_date'];
            $carbonDate = Carbon::parse($unformatted_date);

                // Format the date as 'd M, Y' (e.g., 4 Dec, 2023)
            $date= $carbonDate->format('j M, Y');

                // Get the day of the week (e.g., Monday)
            $dayOfWeek = $carbonDate->format('l');
            $day=substr($dayOfWeek,0,3);
            session()->forget('arr1');
            session()->forget('date');
            session()->forget('day');
            session(['date'=>$date]);
            session(['day'=>$day]);

            session(['arr1'=>$arr]);
            return view('third_page');

        }
        function data($data){
           return $data;
        }
        function travellers_info(Request $req){
            
            if(!session('user')){
                return redirect()->route('login')->with('not_logged_in','You are not logged in, Please log in first');
            }
            
            
            $j=1;
            $arr=session('arr1');
            $arr2=session('user');
            $user=$arr2[0];
            $flight=$arr[0];
           

            for($i=0;$i<session('travellers');$i++){
                $firstname=$req->$j;
                $lastname=$req->{$j+=1};
                $name=$firstname." ".$lastname;
                $new_traveller=new Journey_info();
                $new_traveller->passenger_name=$name;
                $new_traveller->email=$req->{$j+=1};
                $new_traveller->phone=$req->{$j+=1};
                $new_traveller->passenger_type=$req->{$j+=1};
                $new_traveller->flight_id=$flight['id'];
                $new_traveller->user_id=$user['id'];
                $j+=1;
                $new_traveller->save();
            
            
            
            }
            // return  $req->{$j+2};
            // $firstname=$req->$j;
            // $lastname=$req->{$j+1};
            // $name=$firstname." ".$lastname;
            // // $lastname=$req->{$j+1};
            // return  $name;
            return redirect()->route('payment');
            // dd($req->all());

        }
        function pay(){
            return view('payment');
        }
        function logout(Request $req){
            Auth::logout();
            $req->session()->flush();
            return redirect()->route('login');
        }
        function bkash(){
            return view('bkash');
        }
        function nagad(){
            return view('nagad');
        }
        function visa(){
            return view('visa');
        }
        function home(){
            return view('home');
        }
        function ticket(){
            return view('ticket');
        }
        function purchase_history(){
            $user=session('user')[0];
            $id=$user['id'];
            $history=Journey_info::where('user_id',$id)->orderBy('id','desc')->get();
            $flight_name=array();
            foreach ($history as $ticket) {
                $flight_id=$ticket['flight_id'];
                
                $flight=Flight_info::where('id',$flight_id)->get();
                // return $flight['flight_name'];
                $flight_info=$flight[0];
                // return $flight_info;
                $name=$flight_info['flight_name'];
                array_push($flight_name,$name);

            }

            return view('history')->with([
                'p_hstry'=>$history,
                'flight_name'=>$flight_name
            
            ]);
        }
        function refund_req(){
            return view('refund_req');
        }
        function ticket_done(){
           $flight=session('arr1');
           $flight=$flight[0];
           $remaining_seat=$flight['total_seat'];
           $remaining_seat-=1;
           $id=$flight['id'];
           $update_flight=Flight_info::find($id);
           $update_flight->update([
            'total_seat'=>$remaining_seat
           ]);
           return view('ticket');

        }
        function flight_search($id){
            $flight=Flight_info::where('id',$id)->get();
            $flight=$flight[0];
            return $flight;
        }
        function date_formate($date){
                $carbonDate = Carbon::parse($date);

                // Format the date as 'd M, Y' (e.g., 4 Dec, 2023)
                $date= $carbonDate->format('j M, Y');

                // Get the day of the week (e.g., Monday)
                $dayOfWeek = $carbonDate->format('l');
                $day=substr($dayOfWeek,0,3);
                return $date;
        }

}
