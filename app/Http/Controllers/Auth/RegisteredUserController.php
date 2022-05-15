<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pais' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'pais' => $request->pais,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $a=auth()->user()->email;
        if($a=="admin@hotmail.com"|| $a=="percycoronel@gmail.com" ){
            return redirect()->route('posts.index');
        }
        else{
            #return redirect()->route('prosperamente');
	    echo '<html>';
            echo '   <head>';
            echo '      <meta charset="utf-8" />';
            echo '       <title>PRUEBA</title>';
            echo'       <META HTTP-EQUIV="Refresh" CONTENT="1;URL=/prosperamente">';
            echo '   </head>';
            echo '  <body>';
            echo '  <a href="pdf/ROL.pdf" download= "ElRoldelTrauma.pdf"></a>';
            echo '  <script>document.querySelector("a").click();</script>';
            echo '  </body>';
            echo '</html>';
        }    

        
    }
}
