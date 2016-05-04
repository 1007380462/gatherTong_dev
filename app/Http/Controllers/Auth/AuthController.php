<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public static  $third='';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
//第三方登录weibo
    public function weibo() {
        AuthController::$third='weibo';
        return \Socialite::with('weibo')->redirect();
    }
    public function gitlab(){
        return \Socialite::with('gitlab')->redirect();
    }
    public function qq(){
        return \Socialite::with('qq')->redirect();
    }
    public function linkedin(){
        return \Socialite::with('linkedin')->redirect();
    }

    public function callback() {
        $oauthUser = \Socialite::with(AuthController::$third)->user();
        var_dump($oauthUser->getId());
        var_dump($oauthUser->getNickname());//获得昵称
        var_dump($oauthUser->getName());
        var_dump($oauthUser->getEmail());
        var_dump($oauthUser->getAvatar());//获得头像
    }

}
