<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeSessionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['create']
        ]);
    }

    //
    public function create() {

        return view('sessions.create');
    }

    public function store(storeSessionsRequest $request) {
        $credentials = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if (Auth::attempt($credentials, $request->has('remember') )) {
            session()->flash('success','欢迎回来!');
            return redirect()->intended(route('users.show',[Auth::user()]));
        } else {
            session()->flash('danger','很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }
    }

    public function destroy() {
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect()->route('login');

    }
}
