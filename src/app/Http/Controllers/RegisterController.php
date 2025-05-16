<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegsterRequest;
use App\Http\Models\Register;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }


    //反省での残し。以下のconfirmは入力データを返して表示させるだけ
    //今回の登録画面だと確認を経由しないから不要
    /*
    public function confirm(RegisterRequest $request){
        $register = $request -> only(['name','email','password']);
            return view('confirm',['register' => $register]);
       
    }
    */

    public function store(RegisterRequest $request){
        $register = $request -> only(['name','email','password']);
        Register::create($register);
        //↑はモデルに「protected$ fillable =['name','email','password'];」がないとダメとか言ってる
        //ナンゾコレ？（eloquentモデルとか言ってるから、その辺）
        //↑データベースに保存するファイルと理解(5/14時点)
        //ちな、こっちはデータベースに保存をかけるファンクション
       
        return view('admin',compact('refister'));
    }
}
