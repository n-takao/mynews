<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-Compayible" content="IE=sdge">
        <meta name="viewport" content="width=device-width,inital-scale=1">
        
        
        <title>My プロフィール作成画面</title>
    </head>
    <body>
        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'My プロフィールの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
            </div>
        </div>
    </div>
@endsection
    </body>
</html>
<!--課題１Viewは何をするところでしょうか。簡潔に説明してみてください。
　　Controllerの指示でアクセスしてきたユーザーのブラウザに表示するデータを生成します。
　　課題２プログラマーがHTMLを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか。
　　　　
　　　　　決まったものしか表示できないhtmlファイルの出力になる。
　　　　　ユーザーごとにWebページにユーザー名を表示したい場合などは、Model経由でデータベースからデータを取得し、
　　　　　それをhtmlファイルに記述してユーザーに渡す必要があります。
　　　　　このような場合にPHP言語やフレームワークが利用される。
-->