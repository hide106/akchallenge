<html>
<head>
    <title>@yield('title')</title>
    <style>
        /*General*/
        body {font-size:16pt; color:#999; margin: 5px; }
        h1 { font-size:50pt; text-align:center; color:#d3d3d3;
        margin:30px auto 30px; letter-spacing:-4pt; }
        ul { font-size:12pt; }
        p { text-align: center; }
        hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
        .menutitle {font-size:20pt; font-weight:bold; margin: 30px auto 30px; 
        text-align:center; color:#d3d3d3}
        .content {margin:10px; }
        .footer { text-align:right; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc; }

        /* ログイン・登録画面フォーム */
        table{margin: 0px auto; 0px}
        input{width: 300px;height: 40px; font-size: 20px;}
        th { padding:5px 10px; font-size: 20px;}
        td {color:#999; padding:5px 10px; }
        input.btn {width: 100px;height: 30px; font-size: 15px;}
        .ly_lnk {text-align: center; margin-top: 20px;}
        .lnk{text-decoration: none; color: #999;}

        /*ボタン関連*/
        .subject_button{display: flex; border-style: solid; width:120px; height:60px; border-radius:20px; margin: 0px auto; text-decoration: none; color: #999; text-align: center;  justify-content: center; align-items: center; font-size: 35px;}
        .grade_button{display: flex; border-style: solid; width:150px; height:60px; border-radius:20px; margin: 0px auto; text-decoration: none; color: #999; text-align: center;  justify-content: center; align-items: center; font-size: 30px;}
        .buttun_other{display: inline-block; border-style: solid; width:100px; height:30px; margin: 10px 10px; text-decoration: none; color: #999; text-align: center;  justify-content: center; align-items: center; font-size: 18px;}
        .ly_buttun_other{text-align: center;}
        .level_button{display: inline-block; border-style: solid; width:70px; height:40px; border-radius:50px; padding-top: 5px; margin: 0px auto; text-decoration: none; color: #999;  text-align: center; font-size: 25px; }
        .clear_button{display: inline-block; border-style: solid; width:70px; height:40px; border-radius:50px; padding-top: 5px; margin: 0px auto; text-decoration: none; color: #999;  text-align: center; font-size: 23px; }
        .question_button{display: inline-block; width:50px; height:30px; margin: 10px 10px; text-decoration: none; color: #999; text-align: center;  justify-content: center; align-items: center; font-size: 18px;}
        .ly_question_button{text-align: center;}
        .score_button {margin-top: 30px;}
        /*問題関連*/
        #questionArea{ text-align: center; margin-top: 50px}
        .question_img{  width: 700px; height:300px }
        .answer_area{ text-align: center; margin-top: 50px;}
        .ans_form{ margin: 10px 20px; width: 150px; height: 30px; font-size: 20px;}

        /*教科・レベル選択用テーブル*/
        .subject_table > table {width: 700px; margin: 50px auto; font-size: 25px; }
        .subject_table > table > tbody > tr > td {height: 70px; width:17%}
        .subject_table > table > tbody > tr > td:first-child {width:45%}

        /*結果表示用*/
        .wrong_question{ text-align: center; margin: 30px auto; border: 2px solid; font-size: 20px;}
    </style>
</head>
<body>
    <h1>AK Challenge</h1>
    <h2 class="menutitle">@yield('title')</h2>

    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>
