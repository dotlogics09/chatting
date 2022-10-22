<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function storeUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($request->password == $request->confirm_password) {
            $storeUser = new Users();
            $storeUser->first_name = $request->first_name;
            $storeUser->last_name = $request->last_name;
            $storeUser->username = $request->user_name;
            $storeUser->type = 'User';
            $storeUser->email = $request->email;
            $storeUser->password = md5($request->password);
            $storeUser->save();
        }

        return redirect('/')->with(['successMessage' => 'Registered Successfully']);
    }

    function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required', 'string', 'email', 'max:255','exists:users',
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = md5($request->password);
        
        $data = Users::where('email', $email)->where('password', $password)->first();
        
        if ($data) {
            if (!Auth::check($request->email)) {
                $request->session()->put('id', $data->id);
                $request->session()->put('user_type', $data->type);

                return redirect('/dashboard')->with('successMessage', 'Login Successfully');
            }
        } else {
            return back()->withInput()->with('password_check', '* Please enter the correct Password.');
        }
    }

    function logout()
    {
        session()->flush();
        return redirect('/')->with('fail', 'Logout Successfully');
    }
}
