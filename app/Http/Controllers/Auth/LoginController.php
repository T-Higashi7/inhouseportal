<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     /*2021.5.14protected $redirectTo = '/home';→コメントアウト
    //protected $redirectTo = '/home';
    */
    
    /*2021.5.14 protected function redirectTo()以下追加
    */
    protected function redirectTo()
    {
        $admin_flag = $this->guard()->user()->admin_flag;
        if($admin_flag == 1){
            return '/admin';
        }else{
            return '/user';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
