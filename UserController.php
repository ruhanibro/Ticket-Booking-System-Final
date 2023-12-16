<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Response;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use App\Models\bus2;


class BusController extends Controller
{
    public function searchBuses(Request $request)
    {
        $from = $request->input('From');
        $to = $request->input('To');
        $journeyDate = $request->input('Journey_Date');
        $returnDate = $request->input('Return_Date');

        // Customize the query based on your database schema
        $buses = Bus::where('From', $from)
                    ->where('To', $to)
                    ->where('Journey_Date', $journeyDate)
                    ->where('Return_Date', $returnDate)
                    ->get();

        return view('bussearch', ['buses' => $buses]);
    }
}


















class UserController extends Controller
{
    public function signup (Request $req){
        $pass = md5( $req->password );

        $data = array( 'name' => $req->name, 'email' => $req->email, 'password' => $pass, 'number' => $req->number,'image' => "" );
        DB::table( 'users' )->insert( $data );

        return redirect( 'loginSignup' );


    }
    public function login (Request $req){
        $pass = md5( $req->password );

        $users = DB::select( "SELECT * FROM `users` WHERE `email`='$req->email' AND `password`='$pass'" );
        foreach ( $users as $user ) {

            Session::put( '$uid', $user->id );
            Session::put( '$uname', $user->name );


            return redirect( 'home' );
        }
        if ( $users == false ) {


            return redirect( 'loginSignup' );
        }

    }


    public function profile(){
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );

        return view( 'profile', [ 'data' => $data ] );
    }

    public function air()
    {
        return view('air');
    }

    public function bus()
    {
        return view('bus');
    }

    public function train()
    {
        return view('train');
    }


    public function payment()
    {
        return view('payment');
    }

    public function bussearch()
    {
          return view('bussearch');}  
          
    // public function confirmticket()
    // {
    //     return view('confirmticket');
    // } 


    public function availableseats()
    {
        // Logic to fetch available seats
        // ...

        // Return a view or response
        return view('availableseats');
 
    }

    public function confirmticket()
    {
        $data = DB::select("SELECT `from`, `to`, journey_date, return_date FROM buses");
        return view('confirmticket', ['data' => $data]);
    }

    // public function availableseats()
    // {
    //     // Logic to fetch available seats
    //     // ...

    //     // Return a view or response
    //     return view('availableseats');
 
    // }


    


    public function editprofile(Request $req){
        $uid = Session::get( '$uid' );
        $img_name = $_FILES[ 'file' ][ 'name' ];
        $img_size = $_FILES[ 'file' ][ 'size' ];
        $tmp_name = $_FILES[ 'file' ][ 'tmp_name' ];
        $error = $_FILES[ 'file' ][ 'error' ];
        if ( $error === 0 ) {
            $img_ex = pathinfo( $img_name, PATHINFO_EXTENSION );
            $img_ex_lc = strtolower( $img_ex );

            $allowed_exs = array( 'jpg', 'jpeg', 'png', 'webp' );
            if ( in_array( $img_ex_lc, $allowed_exs ) ) {
                $new_img_name = uniqid( $req->name, true ) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file( $tmp_name, $img_upload_path );

                // Update into Database
                DB::UPDATE( "UPDATE `users` SET `image`='$new_img_name' WHERE id='$uid'" );

                return redirect( 'profile' );
            }
        }
    }

    public function logout (){
        Session::flush();
        return redirect( 'loginSignup' );


    }



}
