<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Models\Customer;

use Auth;
use Hash;

class AuthController extends Controller {

    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => [
            'getLogout',
            'getChangePassword',
            'postChangePassword',
            'getChangeProfile',
            'postChangeProfile'
        ]]);
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('customer_signin');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended(action('IndexController@search'));
        }
        return redirect()
            ->action('\Auth\AuthController@getLogin')
            ->withInput($request->only('username', 'remember'))
            ->withErrors([
                'username' => $this->getFailedLoginMessage(),
            ]);
    }


    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        return 'Invalid username atau password.';
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        $this->auth->logout();

        return redirect()->action('Auth\AuthController@getLogin');;
    }

    public function getChangePassword(Request $request)
    {
        return view('back.auth.change_password');
    }

    public function postChangePassword(Request $request)
    {
        
        $user = Auth::user();

        $current = $request->input('password_current');
        $stored = $user->password;

// var_dump(Hash::check($current, $stored));die();
        if (Hash::check($current, $stored)) {
            var_dump(Hash::check($current, $stored));die();
                $this->validate($request, [
                'password_new' => 'required|different:password_current',
                'password_confirm' => 'required|same:password_new',
            ]);
        
        
        $user->password = Hash::make($request->input('password_new'));
        $user->save();

        return redirect()
            ->action('Admin\Auth\AuthController@getChangePassword')
            ->with('PASSWORD_CHANGED', false);
        }else{
            return redirect()
            ->action('Admin\Auth\AuthController@getChangePassword')
            ->with('PASSWORD_CHANGED', false);
        }
    }

    public function getChangeProfile(Request $request)
    {
        $user = Auth::user();
        return view('back.auth.change_profile')
        ->with('user',$user);
    }

    public function postChangeProfile(Request $request,$email)
    {
    
         $users = User::where('email', $email)->update([
                'username' => $request->input('username'),
                'email' => $request->input('email')
            ]);

        return redirect()
            ->action('Admin\Auth\AuthController@getChangeProfile')
            ->with('PROFILE_CHANGED', true)
            ->with('email',$email);
    }
}
