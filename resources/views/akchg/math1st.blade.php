@extends('layouts.akchallenge')

@section('title', '【数学】中学１年')
@section('content')
<div class="subject_table">
    <table>
        <tr>
            <td>①正の数・負の数</td>
            @if ( $math_table->{'1_1_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=1&ans=13">初級</a></td>
            @else
            <td><a class="clear_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=1&ans=13">Clear</a></td>
            @endif
            @if ( $math_table->{'1_1_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=2&ans=10">中級</a></td>
            @else
            <td><a class="clear_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_1_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=3&ans=10">上級</a></td>
            @else
            <td><a class="clear_button" href="{{ route('mathprob') }}?grade=1&unit=1&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>②文字の式</td>
            @if ( $math_table->{'1_2_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=1&ans=19">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=1&ans=19">Clear</a></td>
            @endif
            @if ( $math_table->{'1_2_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_2_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=2&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>③方程式</td>
            @if ( $math_table->{'1_3_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_3_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_3_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=3&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>④変化と対応</td>
            @if ( $math_table->{'1_4_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=1&ans=11">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=1&ans=11">Clear</a></td>
            @endif
            @if ( $math_table->{'1_4_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_4_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=4&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>⑤平面・空間図形</td>
            @if ( $math_table->{'1_5_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=1&ans=14">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=1&ans=14">Clear</a></td>
            @endif
            @if ( $math_table->{'1_5_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'1_5_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=1&unit=5&level=3&ans=10">Clear</a></td>
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