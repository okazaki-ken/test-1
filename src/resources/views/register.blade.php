@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
<a href="/login" class="login__buton">
    <button>login</button>
</a>
@endsection

@section('content')
<div class="register">
    <div class="register-head">
        <h2>Register</h2>
    </div>

    <form action="/lregister" method="post" class="form">
        @csrf

        <div class="register__name">お名前</div>
        <div class="register__name--form">
            <input type="text" name="name" value="">
            <!--バリデーションを設定するよ-->
            <div class="register__erro">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="register__email">メールアドレス</div>
        <div class="register__email--form">
            <input type="email" name="email" value="" >
            <!--バリデーションを設定するよ-->
            <div class="register__erro">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="register__password">パスワード</div>
        <div class="register__password--form">
            <input type="password" name="password" value="">
        </div>
        <div class="register__erro">
                @error('password')
                {{ $message }}
                @enderror
        </div>

        <div>
            <button class="register__button" type="submit" >登録</button>
        </div>

    </form>
</div>
@endsection