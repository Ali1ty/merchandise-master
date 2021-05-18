<?php

namespace App\Http\Controllers\Auth;

use App\Models\AuthenticatesUser;
use App\Models\LoginToken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $auth;
    protected $redirectTo = '/home';

    public function __construct(AuthenticatesUser $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create()
    {
        return view('auth.login');
    }


    public function postLogin()
    {
        $this->auth->invite();
        return redirect(route('confirm'));
    }

    public function confirm()
    {
        return view('auth.confirm');
    }

    public function authenticate(LoginToken $token)
    {
        $this->auth->login($token);
    }

    public function postAuthenticate(Request $request)
    {
        $token = LoginToken::where('token', request()->get('token'))->first();

        if (!is_null($token)) {
            \Auth::login($token->user, true);
            $token->delete();
            return redirect('/home');
        } else {
            $request->session()->flash('error', 'کد وارد شده صحیح نیست');
            return redirect(route('confirm'));
        }
    }


    public function logout()
    {
        \Auth::logout();
        return redirect('/farno-char');
    }
}
