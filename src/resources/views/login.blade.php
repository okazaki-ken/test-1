@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<a href="/register">
    <button>register</button>
</a>
@endsection

@section('content')
<div class="login">
    <div class="login-head">
        <h2>login</h2>
    </div>

    <!--ログインはpostメソッドなのか？-->
    <form action="/login" method="post" class="form">
        @csrf

        <div class="login__email">メールアドレス</div>
        <div class="login__email--form">
            <input type="email" name="email" value="" >
            <!--バリデーションはまだ登録のだよ-->
            <div class="login__erro">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="login__password">パスワード</div>
        <div class="login__password--form">
            <input type="password" name="password" value="">
        </div>
        <!--バリデーションはまだ登録のだよ-->
        <div class="login__erro">
                @error('password')
                {{ $message }}
                @enderror
        </div>

        <div class="form__button">
            <button class="login__button" type="submit" >ログイン</button>
        </div>

    </form>

</div>
@endsection