@extends('layouts.app')

@section('css')
 <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        Confirm
    </div>
    <form action="/thanks" class="form" method="post">
        @csrf

<!--formの指示が次ページの遷移だけでいいかが分からんから、要確認-->
        <div class="confirm-table">
            <table class="confirm-table__inner">

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['full_name'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['sex'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="kinds" value="{{ $contact['kinds'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="oder" value="{{ $contact['oder'] }}" readonly />
                    </td>
                </tr>
<!--readonlyだと見た目が悪いようで、チャットGPTに提案されたの
<tr class="confirm-table__row">
    <th class="confirm-table__header">お名前</th>
    <td class="confirm-table__text">
        {{ $contact['full_name'] }}
    </td>
</tr>
またはformで渡したい場合はhiddenを使う（hideenってなんだっけ）
<td class="confirm-table__text">
    {{ $contact['full_name'] }}
    <input type="hidden" name="full_name" value="{{ $contact['full_name'] }}">
</td>
上の方法は、値を見せるだけで、データが送信されないからダメそう
-->

            </table>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <button class="form__button-return" type="submit">修正</button>
            <!--戻って修正もtypeはsubmitでええんか…？入力内容残す…だと？ってか、formのアクションがサンクス遷移だからダメじゃね-->
        </div>

    </form>
<!--まんまチャットGPTが出してきた入力残して戻るコードだから、とりまコメントアウト
    <form action="/register" method="post" class="form">
        @csrf
        @foreach ($contact as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <button class="form__button-return" type="submit">修正</button>
    </form>
-->


</div>