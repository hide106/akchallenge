@extends('layouts.akchallenge')

@section('title', '登録画面')
@section('content')
    <form action="register" method="post">
        <table>
        @csrf
            <tr><th>ユーザー名　</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @if ($errors->has('name'))
            <tr><th></th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>メールアドレス　</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @if ($errors->has('mail'))
            <tr><th></th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>パスワード　</th><td><input type="password" name="password"></td></tr>
            <tr><th>パスワード（確認用）</th><td><input type="password" name="password_confirmation"></td></tr>
            @if ($errors->has('password'))
            <tr><th></th><td>{{$errors->first('password')}}</td></tr>
            @endif
        </table>
        <div class="ly_lnk">
            <input type="submit" name="send" class = "btn" value="登録">
        </div>
    </form>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection