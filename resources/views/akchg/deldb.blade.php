@extends('layouts.akchallenge')

@section('title', 'Usersデータ削除画面')
@section('content')
    <form action="deldb" method="post">
        @csrf
        <div class="ly_lnk">
            <input type="submit" name="send" class = "btn" value="DB削除">
        </div>
    </form>
@endsection
@section('footer')
copyright 2022 AK School.
@endsection