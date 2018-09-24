<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        if (request('password') != null)
        {
            if (Hash::check (request('password'),Auth::user()->password) == true)
            {
                $this->validate(request(), [
                    'name' => 'required|min:3',
                    //'email' => 'required|email|unique:users',
                    'newPassword' => 'required|min:6|confirmed'
                ]);
                $user->name = request('name');
                //$user->email = request('email');
                $user->password = bcrypt(request('newPassword'));
                $user->save();
                return back()->with("success","Password changed successfully !");;
            }
            else{
                return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
        }

        elseif(request('password') == null)
        {
            $this->validate(request(), [
            'name' => 'required|min:3',
            //'email' => 'required|email|unique:users',
            //'password' => 'required|min:6|confirmed'
            ]);
            $user->name = request('name');
            //$user->email = request('email');
            // $user->password = bcrypt(request('password'));
            $user->save();
            return back();
        }
    }
//    public function updatePass(Request $request)
//    {
//        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
//            // The passwords matches
//            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
//        }
//
//        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
//            //Current password and new password are same
//            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
//        }
//
//        $validatedData = $request->validate([
//            'current-password' => 'required',
//            'new-password' => 'required|string|min:6|confirmed',
//        ]);
//
//        //Change Password
//        $user = Auth::user();
//        $user->password = bcrypt($request->get('new-password'));
//        $user->save();
//
//        return redirect()->back()->with("success","Password changed successfully !");
//    }
}