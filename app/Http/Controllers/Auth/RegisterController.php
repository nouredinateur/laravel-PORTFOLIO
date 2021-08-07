<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request)
    {        
    //    $this->validate($request, [
    //        'image'=>'required',
    //        'description'=> 'required',
    //        'name' => 'required|max:255',
    //        'username' => 'required|max:255',
    //        'email' => 'required|email|max:255',
    //        'password' => 'required',
    //    ]);

       if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore =  time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }  else{
            $fileNameToStore = 'noimage.png';
        };

       User::create([
            'image' => 'storage/image/' . $fileNameToStore,
            'description' => $request->description,
           'name' => $request->name,
           'username' => $request->username,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);
       
        // auth()->attempt($request->only('email', 'password'));

       return redirect()->route('home');
       
    }
}