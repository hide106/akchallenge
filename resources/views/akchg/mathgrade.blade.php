@extends('layouts.akchallenge')

@section('title', '【数学】学年を選んでください')
@section('content')
    <a class="grade_button" href="/math1st">中学１年</a>
    <br>
    <a class="grade_button" href="/math2nd">中学２年</a>
    <br>
    <a class="grade_button" href="/math3rd">中学３年</a>
    <br>
    <div class="ly_buttun_other">
        <a class="buttun_other" href="/subject">戻る</a>
        <a class="buttun_other" href="/logout">ログアウト</a>
    </div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection