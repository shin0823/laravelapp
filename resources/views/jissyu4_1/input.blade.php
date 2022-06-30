@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報入力画面
@endsection

@section('content')
   <p>{{$msg}}</p>
   @if (count($errors)>0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="m" method="post">
       @___(15)___
       @if (___(16)___)
       <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
       @endif
       <tr><th>名前　: </th><td><input type="text" name="name"
           value="{{old('name')}}"></td></tr>
       @if ($errors->has('mail'))
       <tr><th>ERROR</th><td>{{___(17)___}}</td></tr>
       @endif
       <tr><th>メール: </th><td><input type="text" name="mail"
           value="{{old('mail')}}"></td></tr>
       @if ($errors->has('age'))
       <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
       @endif
       <tr><th>年齢　: </th><td><input type="text" name="age"
           value="{{___(18)___}}"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
