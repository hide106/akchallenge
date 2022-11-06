@extends('layouts.akchallenge')

@section('title', '問題')
@section('content')
<div class="ly_question_button">
    <input type="button" value= "問1" class="question_button" onclick="(function(){ let p = 1; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問2" class="question_button" onclick="(function(){ let p = 2; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問3" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問4" class="question_button" onclick="(function(){ let p = 4; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問5" class="question_button" onclick="(function(){ let p = 5; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問6" class="question_button" onclick="(function(){ let p = 6; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問7" class="question_button" onclick="(function(){ let p = 7; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問8" class="question_button" onclick="(function(){ let p = 8; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問9" class="question_button" onclick="(function(){ let p = 9; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
    <input type="button" value= "問10" class="question_button" onclick="(function(){ let p = 10; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u,l);})();">
</div>

<script>
    function showQuestion(p, g, u, l){
        document.getElementById("questionArea").innerHTML = '<img class = \"question_img\" src=\"img\\Math\\Grade' + g + '\\Unit' + u + '\\Level' + l + '\\' + p + '.jpg\" >';
    }
</script>
    <div id="questionArea">
        <h1>スタート</h1>
    </div>
<form action="{{ route('mathprob') }}?grade={{$grade}}&level={{$level}}&unit={{$unit}}&ans_n={{$ans}}" method="post">
    @csrf 
    <div  class = "answer_area">
@php
$numbering = array('①', '②', '③', '④', '⑤', '⑥', '⑦', '⑧', '⑨', '⑩', '⑪', '⑫', '⑬', '⑭', '⑮', '⑯', '⑰', '⑱', '⑲', '⑳', '㉑', '㉒', '㉓', '㉔', '㉕', '㉖', '㉗', '㉘', '㉙', '㉚');
$num = $_GET['ans'];
$counter = 0;
@endphp
        <table>
            <tr>
@while ($counter < $num)
<td>{{$numbering[$counter]}}<input type="text" name="ans[]" class = "ans_form"></td>
@php
$counter++;
@endphp
@if ($counter % 5 == 0)
</tr>
<tr>
@endif
@endwhile
        </table>
    </div>
    <div class="ly_buttun_other">
        <input class ="score_button" type="submit" value="採点">
    </div>
</form>

@endsection
@section('footer')
copyright 2022 AK School.
@endsection