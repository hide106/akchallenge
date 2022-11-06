@extends('layouts.akchallenge')

@section('title', '【数学】中学２年')
@section('content')
<div class="subject_table">
    <table>
        <tr>
            <td>①式の計算</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>②連立方程式</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>③一次関数</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>④図形の調べ方</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>⑤図形の性質と証明</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>⑥場合の数と確率</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=6&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=6&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=6&level=3&ans=10">上級</a></td>
        </tr>
        <tr>
            <td>⑦箱ひげ図とデータの活用</td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=7&level=1&ans=10">初級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=7&level=2&ans=10">中級</a></td>
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=7&level=3&ans=10">上級</a></td>
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