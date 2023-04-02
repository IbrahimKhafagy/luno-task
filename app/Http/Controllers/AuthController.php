<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');

    }

        public function registerSave(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed'
            ]);
            $data = $request->only('name','email');
            $data['password']= bcrypt($request->password);
            $users = User::create($data);
            auth()->guard()->login($users);
            if ($users) {
                return redirect(route('index'));
            }
        //    Validator::make($request->all(),[
        //     'name'=> 'required',
        //     'email'=> 'required|email',
        //     'password' => 'required|min:6',
        //     'password_confirmation' => 'confirmed|min:6'
        //    ])->validate();


        //     $user = User::create($request->all(), [
        //     'name'=>$request->name,
        //     'email' => $request ->email,
        //     'password'=>Hash::make($request->password),


        //    ]);

        //    $user->save();

        //    return redirect()->route('index');

        }


    public function index(){
        return view('auth.login');
    }


    public function loginAction(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');

    }
}
