@extends('layouts.akchallenge')

@section('title', '問題')
@section('content')
<div class="ly_question_button">
    <input type="button" value= "問1" class="question_button" onclick="(function(){ let p = 1; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問2" class="question_button" onclick="(function(){ let p = 2; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問3" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問4" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問5" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問6" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問7" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問8" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問9" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
    <input type="button" value= "問10" class="question_button" onclick="(function(){ let p = 3; g = {{$grade}}; u = {{$unit}}; l = {{$level}};showQuestion(p,g,u, l);})();">
</div>

<script>
    function showQuestion(p, g, u, l){
        document.getElementById("questionArea").innerHTML = '<img class = \"question_img\" src=\"img\\Math\\Grade' + g + '\\Unit' + u + '\\Level' + l + '\\' + p + '.png\" >';
    }
</script>
    <div id="questionArea">
        <h1>スタート</h1>
    </div>
<form action="/mathprob?grade={{$grade}}&unit={{$unit}}&level={{$level}}" method="post">
    @csrf 
    <div class="answer_area">
        ①<input type="text" name="ans[]" class = "ans_form">
        ②<input type="text" name="ans[]" class = "ans_form">
        ③<input type="text" name="ans[]" class = "ans_form">
        ④<input type="text" name="ans[]" class = "ans_form">
        ⑤<input type="text" name="ans[]" class = "ans_form">
        <br>
        ⑥<input type="text" name="ans[]" class = "ans_form">
        ⑦<input type="text" name="ans[]" class = "ans_form">
        ⑧<input type="text" name="ans[]" class = "ans_form">
        ⑨<input type="text" name="ans[]" class = "ans_form">
        ⑩<input type="text" name="ans[]" class = "ans_form">
    </div>
    <div class="ly_buttun_other">
        <input class ="score_button" type="submit" value="採点">
    </div>
</form>



@endsection
@section('footer')
copyright 2022 AK School.
@endsection