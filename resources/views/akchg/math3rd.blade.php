@extends('layouts.akchallenge')

@section('title', '【数学】中学３年')
@section('content')
<div class="subject_table">
    <table>
        <tr>
            <td>①式の展開と因数分解</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>②平方根</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>③二次方程式</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>④関数y=ax<sup>2</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>⑤図形と相似</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>⑥円の性質・三平方の定理</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=3&ans=10">上級</a></td>
        </tr>
    </table>
</div>
<div class="ly_buttun_other">
    <a class="buttun_other" href="{{ route('mathgrade') }}">戻る</a>
    <a class="buttun_other" href="{{ route('logout') }}">ログアウト</a>
</div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection