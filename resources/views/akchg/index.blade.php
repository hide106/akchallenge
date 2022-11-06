@extends('layouts.akchallenge')

@section('title', 'ログイン')
@section('content')
    <form action="/login" method="post">
        <table>
        @csrf
            <tr><th>メールアドレス　</th><td><input type="text" name="mail"></td></tr>
            <tr><th>パスワード　</th><td><input type="password" name="password"></td></tr>
        </table>
        @isset($msg)
            <p>{{$msg}}</p>
            @endisset

        <div class="ly_lnk">
            <input type="submit" name="send" class = "btn" value="ログイン">
        </div>
    </form>
    <div class="ly_lnk">
        <a href="/register" class="lnk">登録はこちらから</a>
    </div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection