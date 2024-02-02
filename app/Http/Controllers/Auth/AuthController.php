<?php

namespace App\Http\Controllers\Auth;

use App\CommandBus;
use App\Commands\Auth\LoginCommand;
use App\Commands\Auth\RegisterUserCommand;
use App\Http\Controllers\Controller;
use App\Queries\Auth\LoginQuery;
use App\QueryBus;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function __construct(protected CommandBus $CommandBus, protected QueryBus $QueryBus){}


    public function Register(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view("Pages.Auth.Register");
        } else if ($request->isMethod('post'))
        {
            $request->validate([
                'name'  =>  "required",
                'family'  =>  "required",
                'age'  =>  "required",
                'email'  =>  "required|email",
                'password'  =>  "required",
                'gender'  =>  "required",
                'city'  =>  "required",
                'address'  =>  "required"
            ]);
            $Data = $request->except('_token');
            $Command = new RegisterUserCommand($Data);
            $this->CommandBus->handle($Command);
        }
    }

    public function Login(Request $request)
    {
        if($request->isMethod("get"))
        {
            return view('Pages.Auth.Login');
        }elseif($request->isMethod('post'))
        {
            $request->validate([
                "email" =>  "required|email",
                "password"  =>  "required"
            ]);
            $Data = $request->except("_token");
            $Command = new LoginQuery($Data);
            return $this->QueryBus->handle($Command);
        }

    }
}
