<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class SocialAuthController extends Controller
{
    /** 
     * 
     *  @return \Illuminate\Http\Response
     * */
     
    public function redirectToProvider(){

        return Socialite::driver('google')->redirect();
    }

    /** 
     * 
     *  @return \Illuminate\Http\Response
     * */
     
    public function handleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();

        }catch(\Exception $e)
        {
            return redirect('/login');

        }
        // dd($user);

        $existinguser = User::where('email' , $user->email)->first();

        if($existinguser)
        {
            Auth::login($existinguser , true);

        }
        else
        {
            $newuser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
            ]);

              Auth::login($newuser , true);

        }

        return redirect()->to('Home');



    }
     
}
