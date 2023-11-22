<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request){
        // dd($request);
        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->security = ''; 
        $user->save();

        return redirect('/login');
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            return redirect("/home/{$user->id}");
        } else {
            info('Wrong Password!');
        }
    }

    public function index(User $user){
        return view('pages.home', [
            "user" => $user,
            "products" => Product::all()
        ]);
    }
       
}
