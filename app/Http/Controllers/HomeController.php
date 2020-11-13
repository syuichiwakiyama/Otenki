<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 全部のユーザーを得るためにモデル(User)を使用できるようにしている
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        // モデルUserから全部のデータを取り、変数usersに入れた。
        return view('home',[
            'users' =>$users,
        ]);
    }
}
