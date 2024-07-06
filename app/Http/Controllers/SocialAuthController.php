<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users;
use Ulluminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    
    public function redirectToProvide($provider) 
    // $provider會動態決定使用哪個第三方平台 ex:google
    // 在 routes/web.php 文件中,Route::get('login/{provider}, $provider={provider}, 若是google, $provider=google
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->stateless()->user();

        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'password' => bcrypt(str_random(24))
            ]
            );
            Auth::login($user, true);

            return redirect('/dashboard');
    }

}
