<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;
use Input;
use Theme;
use Session;
use App\Persistence\User;
use \Firebase\JWT\JWT;
use App\Models\Users;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->theme = Theme::uses('default')->layout('login');
    }

    public function index()
    {
        if (Auth::check())
        {
            return Redirect::to(route('dashboard-page'));
        }

        $data = [];

        $this->theme = Theme::uses('default')->layout('login');

        return $this->theme->scope('login', $data)->render();
    }

    public function doLogin(Request $request)
    {
        $rules = array(
            'username' => 'required',
            'password' => 'required'
        );

//        $userdata = [
//            'username' => Input::get('username'),
//            'password' => Input::get('password'),
//            'is_actived' => 1
//        ];

        

        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails())
        {
            $url = route('login-page');
            return Redirect::to($url)
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
        }
        else
        {
            if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
            {
                session()->put('user', 'success');
                return redirect('user');
            }
            
            $validator->getMessageBag()->add('username', "Username or Password is wrong!");
            $url = route('login-page');
            return Redirect::to($url)
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
        }
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect('/');
    }

}
