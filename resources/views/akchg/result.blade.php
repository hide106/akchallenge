@extends('layouts.akchallenge')

@section('title', '結果')
@section('content')
    <h1>{{ $msg }}</h1>

    @if( $perfect_score == 1 )
        全問正解です！
    @else
    @endif
    <p>※次の問題は不正解</p>
    <table class="wrong_question">
        <tr>
    @for ($i=0; $i< 10; $i++)
    @if ( $correct_question[$i]  !=  1)
        <td>問{{$i+1}}</td>
    </a>
    @endif
    @endfor
    </tr>
    </table>
    <div class="ly_buttun_other">
    @if ($grade ==1)
    <a class="buttun_other" href="{{ route('math1st') }}">戻る</a>
    @elseif ($grade ==2)
    <a class="buttun_other" href="{{ route('math2nd') }}">戻る</a>
    @else
    <a class="buttun_other" href="{{ route('math3rd') }}">戻る</a>
    @endif
    <a class="buttun_other" href="{{ route('logout') }}">ログアウト</a>
    </div>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection