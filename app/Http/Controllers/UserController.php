<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    // showの引数にはUserを使い、＄userでインスタンス化した。
    public function show(User $user)
    {
        // viewのuserファイル内のshow.blade.phpにいく
        // keyはuserで値を$userにした
        return view('user.show' ,[
            'user' =>$user
        ]);
    }
}
