<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public $redirectTo = 'admin';

    protected function guard()
    {
        return auth()->guard('admin');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        $pageTitle = "Welcome TRXMod21X";
        return view('admin.auth.login', compact('pageTitle'));
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $request->session()->regenerateToken();

        // TODO:: VERIFY CAPTCHA
        // CODE HERE

        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/admin');
    }
}
