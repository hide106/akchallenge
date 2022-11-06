@extends('layouts.akchallenge')

@section('title', '教科を選んでください')
@section('content')
    <a class="subject_button" href="{{ route('mathgrade') }}">数学</a>
    <br>
    <a class="subject_button" href="#">英語</a>
    <br>
    <div class="ly_buttun_other">
    <a class="buttun_other" href="{{ route('logout') }}">ログアウト</a>
</div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection