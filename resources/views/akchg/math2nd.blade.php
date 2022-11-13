@extends('layouts.akchallenge')

@section('title', '【数学】中学２年')
@section('content')
<div class="subject_table">
    <table>
        <tr>
            <td>①式の計算</td>
            @if ( $math_table->{'2_1_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_1_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_1_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=1&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>②連立方程式</td>
            @if ( $math_table->{'2_2_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_2_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_2_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=2&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>③一次関数</td>
            @if ( $math_table->{'2_3_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_3_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_3_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=3&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>④図形の性質</td>
            @if ( $math_table->{'2_4_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_4_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_4_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=4&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>⑤場合の数と確率</td>
            @if ( $math_table->{'2_5_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_5_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'2_5_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=2&unit=5&level=3&ans=10">Clear</a></td>
            @endif
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