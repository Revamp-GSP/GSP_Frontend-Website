<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{

    public function getLogin(){
        return view('login');
    }
    
    public function postLogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //dd($input);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {   
            //dd("salom");
            return redirect('/dashboard');

        }else{
            dd("babi");
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
    
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}