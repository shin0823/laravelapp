@extends('layouts.helloapp')

@section('title', 'Index')

@section('menu_title')
Laravelについて
 @endsection

@section('content')
    <ul>
    <li>特徴</li>
    <li>バージョン</li>
</ul>
 @endsection

@section('content')
   <p>開発元：Taylor Otwell</p>
   <p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@endsection

@section('footer')
copright 2020 東京情報クリエイター工業院専門学校
@endsection
