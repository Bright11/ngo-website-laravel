<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    //
    public function nlrfregister()
    {
        return view('frontend.nlrfregister');
    }

    public function insertregisterngo(Request $req)
    {
        if($req->code==123){
           $validation= $req->validate([
                'password' => 'required|min:5',
                'confirmpassword' => 'required_with:password|same:password|min:5',
                'email' => 'required',
                'email' => 'unique:users',
            ]);
            
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('nlrflogin')->with('status', 'Now you can login');
        }else{
            return redirect()->back()->with('status','You are not authorised to do this');
        }
        
    }

    public function nlrflogin()
    {
        return view('frontend.nlrflogin');
    }


    public function insertlogin(Request $req)
    {
        if ($req->code == 123){
        $user = user::where(['email' => $req->email])->first();
        //$num =user::where()
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('status', 'incorrect user name or password');
        } else {
            $req->session()->put('user', $user);
            //if( $user = Auth::attempt(['users.email'=>$req->email])){
            return redirect('/')->with('status', 'you have successfully login');
        }
        }else{
            return redirect()->back()->with('status', 'You are not authorised to do this');
        }

    }

    public function confirmadmin()
    {
        return view('frontend.confirmadmin');
    }

    // public function checkadmin(Request $req)
    // {
    //     if($req->code==123){
    //         return view('frontend.nlrflogin');
    //     }elseif($req->code==1234){
    //         return view('frontend.nlrfregister');
    //     }
    //     else{
    //         return redirect('/')->with('status','Stop it');
    //     }
    // }
    public function logout()
    {
        Session::forget('user');
        return redirect('/')->with('status', 'Goodbye');
    }
}
