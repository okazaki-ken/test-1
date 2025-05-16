@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="asset{{('css/admin.css') }}">
@endsection

@section('header')
    <form action="/logout" class="logout" method="post">
        <button>logout</button>
    </form>
@endsection

@section('content')
<div class="content">
    <div class="content__top">Admin
        <form action="find" method="post">
        @csrf
            <input type="text" name="input" value="{{$input}}">
        <!--名前かメアドで検索のためのテキストボックスだが-->
            <select name="sex">
                <option value="male">男</option>
                <option value="female">女</option>
                <option value="other">その他</option>
            </select>
            <!--性別検索だが、選んで値を決めてるだけだよな・・・-->
            <select name="kinds" >
                        <option value="">選択してください</option>
                        <option value="商品の交換について">商品の交換について
                        </option>
                        <option value="その他">その他</option>
            </select>
            <!--問い合わせ種類検索だが、(以下性別と同じ)-->
            <!--カレンダーはまだない。-->
            <!--検索ボタンはなにすればいいんや？-->
        </form>
        <!--リセットも分からん-->


<!--エクスポートとか全く分からん-->

        <div class="content__page">
            {{ $contens->links()}}            
        </div>
<!--ページネイションで7件ごと表示する-->

<!--結果を表示させる-->
            <div class="content__table">
                <table class="content__table-inner">
                    <tr class="content__table-header">
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th><!--ヘッダーの詳細ボタン用。いるかな？--></th>
                    </tr>
                    @foreach ($contact as $contact)
                    <tr?>
                        <td>{{$contact->neme}}</td>
                        <td>{{$contact->sex}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->kinds}}</td>
                        <th>
                            <button class="content__table-button"　onclick="openModal()">詳細</button>
                            <!--詳細ボタンの反応。GPT引用だから、tableなのにdivで書いてる…　-->
                            <div id="model" style="display:none; position: fixed; top:0; left:0; widht:100%;height:100%; background: #ffffff;">
                            <div style="background: white; margin: 10% auto; padding: 20px; width: 300px; border-radius: 10px;">
                                <table>
                                    <tr>
                                        <th onclick="closeModel()" class="">&times;</th>
                                    </tr>
                                    <tr>
                                        <th>お名前</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>性別</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>建物名</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>お問い合わせの種類</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th>お問い合わせの内容</th>
                                        <th><!--単一の引用の仕方--></th>
                                    </tr>
                                    <tr>
                                        <th><button>削除</button></th>
                                    </tr>
                                </table>
                            </div>



                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
    </div>
<!--モーダルウィンド・・・？(ポップアップして、中身が表示される奴)
chatGPTからの全引用だから中身も記載場所もあってるか分からん-->
<script>
  function openModal() {
    document.getElementById("modal").style.display = "block";
  }

  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }


</div>

@endsection