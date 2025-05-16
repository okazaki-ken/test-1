@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@section('content')
<div class="contact-from">
    <div class="contact-form__head">
        Contact
    </div>
    <form action="/confirm" method="post" class="form">
        @csrf

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="family_name" placeholder="例：山田" value="{{ old('family_name') }}" />
                    <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}"/>
                </div>

                <div class="form__error">
                    @error('family_name')
                       <div>{{ $message }}</div>
                    @enderror
                    @error('first_name')
                    <div>{{ $message }}</div>
                    @enderror
                    <!--名字のバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="from__label--item">性別</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tex">
                    <input type="radio" name="sex" value="male">男性
                    <input type="radio" name="sex" value="female">女性
                    <input type="radio" name="sex" value="other">その他
<!--チェックボックス見た目はできたが、デフォ投入なし。valueも設定いるかも？-->
                </div>

                <div class="form__error">
                    @error('sex')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--性別のバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例：text@example.com" value="{{ old('email') }}"/>
                </div>

                <div class="form__error">
                    @error('email')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--メールのバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel-1" placeholder="080" value="{{ old('tel-1') }}" />
                    <input type="tel" name="tel-2" placeholder="1234" value="{{ old('tel-2') }}" />
                    <input type="tel" name="tel-3" placeholder="5678" value="{{ old('tel-3') }}" />
                    <!--inputの番号を分けるのこれであってるか？-->
                </div>

                <div class="form__error">
                    @error('tel-1')
                       <div>{{ $message }}</div>
                    @enderror
                    @error('tel-2')
                       <div>{{ $message }}</div>
                    @enderror
                    @error('tel-3')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--でんわのバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>

                <div class="form__error">
                    @error('address')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--住所のバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
                <!--のバリデーションはないよ-->
            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">問い合わせの種類</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select name="kinds" >
                        <option value="">選択してください</option>
                        <option value="商品の交換について">商品の交換について
                        </option>
                        <option value="その他">その他</option>
                    </select>
                </div>

                <div class="form__error">
                    @error('kinds')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--問い種類のバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__group">
            <div class="formp__group-title">
                <span class="form__label--item">問い合わせの内容</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <textarea cols="30" rows="6" name="oder" placeholder="お問い合わせ内容をご記載ください" value="{{ old('oder') }}" >
                    </textarea>
                </div>

                <div class="form__error">
                    @error('oder')
                       <div>{{ $message }}</div>
                    @enderror
                    <!--問い合わせのバリデーション-->
                </div>

            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>

    </form>
</div>

@endsection