<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function check(Request $request){
        $check=$request->all();
        $user=Admin::where('Username',$check['username'])->where('Password',$check['password'])->first();
        if($user){
            Auth::guard('admin')->login($user);
            if(Auth::user()->Role == 'OP-PROFILE' || Auth::user()->Role == 'FrontOffice' || Auth::user()->Role == 'MRDHEAD'){
                return redirect()->route('outpatients.create');
            }elseif(Auth::user()->Role == 'JR'){
                return redirect()->route('outpatients.find');
            }else{
                return redirect()->route('login')->with('error','Whoops! invalid Username or Password.');
            }
        }else{
            return redirect()->route('login')->with('error','Whoops! invalid Username or Password.');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
