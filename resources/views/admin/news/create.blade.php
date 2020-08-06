<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=sdge">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        
        
        <title>Mynews</title>
        
    </head>
    <body>
        
        {{--layouts/admin.blabe.phpを読み込む--}}
        @extends('layouts.admin')
        
        {{--admin.blabe.phpの@yield('title')に'ニュースの新規作成'を埋め込む--}}
        @section('title', 'ニュースの新規作成')
        
        {{--admini.blade.phpの@yield('content')に以下のタグを埋め込む--}}
        @section('content')
        <div class="conteiner">
            <div class="now">
                <div class="col-md-8 mx-auto">
                    <h2>ニュース新規作成</h2>
                </div>
            </div>
        </div>
    @endsection    
</html>