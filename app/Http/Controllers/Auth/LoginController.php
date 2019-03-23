<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle login request
     * @param Request $request
     * @return type
     */
    public function postLogin(Request $request)
    {
        // Return to manager Dashboard if user is manager else return to the intended page if there is an intended page else return to home page (or back)
        $data = $request->all();

        isset($data['remember_me']) ? $data['remember_me'] = TRUE : $data['remember_me'] = FALSE;

        $authenticated = Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $data['remember_me']);

        if($authenticated && Auth::user()->role_id == config('constants.role.admin'))
        {       
            return redirect('admin/dashboard');
        }
        elseif($authenticated && Auth::user()->role_id == config('constants.role.customer'))
        {
            $request->session()->flash('alert-info', "Logged in Successfully");
            return redirect('user/products')->with(['user' => Auth::user()]);
        }
        else
        {
            //user Account doesnt exist
            $request->session()->flash('alert-danger', "Invalid password or email address");
            return redirect('/login');
        }
    }

    /**
     * Log user out
     * @return type
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
