@extends('layouts.akchallenge')

@section('title', '【数学】学年を選んでください')
@section('content')
    <a class="grade_button" href="{{ route('math1st') }}">中学１年</a>
    <br>
    <a class="grade_button" href="{{ route('math2nd') }}">中学２年</a>
    <br>
    <a class="grade_button" href="{{ route('math3rd') }}">中学３年</a>
    <br>
    <div class="ly_buttun_other">
        <a class="buttun_other" href="{{ route('mathgrade') }}">戻る</a>
        <a class="buttun_other" href="{{ route('logout') }}">ログアウト</a>
    </div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection