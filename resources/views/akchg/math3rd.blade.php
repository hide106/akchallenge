@extends('layouts.akchallenge')

@section('title', '【数学】中学３年')
@section('content')
<div class="subject_table">
    <table>
        <tr>
            <td>①式の展開と因数分解</td>
            @if ( $math_table->{'3_1_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_1_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_1_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=1&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>②平方根</td>
            @if ( $math_table->{'3_2_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_2_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_2_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=2&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>③二次方程式</td>
            @if ( $math_table->{'3_3_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_3_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_3_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=3&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>④関数y=ax<sup>2</td>
            @if ( $math_table->{'3_4_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_4_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_4_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=4&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>⑤図形と相似</td>
            @if ( $math_table->{'3_5_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_5_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_5_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=5&level=3&ans=10">Clear</a></td>
            @endif
        </tr>
        <tr>
            <td>⑥円の性質・三平方の定理</td>
            @if ( $math_table->{'3_6_1'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=1&ans=10">初級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=1&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_6_2'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=2&ans=10">中級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=2&ans=10">Clear</a></td>
            @endif
            @if ( $math_table->{'3_6_3'} == 0)
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=3&ans=10">上級</a></td>
            @else
            <td><a class="level_button" href="{{ route('mathprob') }}?grade=3&unit=6&level=3&ans=10">Clear</a></td>
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