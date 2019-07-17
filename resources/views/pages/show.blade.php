@extends('layouts.default')
@section('title', $article->title)

@section('content')
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: #7A7A7A;
        }
        .content{
            padding: 0;
            background-color: #fff;
            margin: 0 auto;
            width: 60%;
            height: 100%;
            text-align: center;
        }

    </style>
    <div class="content">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }} </p>
        <p class="jij">对于男人来说，最无法接受的恐怕就是
            <span>“不行了”</span>！不管你多有钱多有势，要是让女人觉得你
            <span>“不行了”</span>！这一生算是废了大半了！</p>
        <p class="jij">
            <span>阳痿早泄、疲软无力、腰酸膝软、四肢发冷、白发脱发、畏寒、燥热、盗汗虚汗、头晕耳鸣、精神萎靡、前列腺问题、尿频尿不尽等症状......</span>都是男人的难言之隐，心中之痛！

        </p>
        <p class="jij">很多人只知道肾虚早泄了要补肾,却不懂到底如何补肾。一顿乱吃了各种各样的产品，用了错的方法白白遭了好多罪！</p>

        <p class="jij1">
            <span>（强烈建议认真阅读本文!）看如何调理男人难题！</span>
        </p>

        <p class="jij">

        </p>
    </div>

    <a id="cebian" onclick="kai()" class="wxNo"><img class="wximg" src="{{ URL::asset('images/wxh.gif') }}"></a>
    <style>
        .wximg{
            position: fixed;
            right: 2px;
            bottom: 50%;
            width: 16%;
        }
    </style>
    <style>
        #pop {
            width: 80%; margin:0px auto;
            padding: 15px 0;
            box-sizing: border-box;
            background-color: white;
            position: fixed;
            top: 25%; display:block; border-radius: 20px;
            z-index: 23;
            display: none;
            left:10%;
            background-color: rgba(0,0,0,0.6);
        }

        #pop #guanbi {
            position: absolute;
            right: 10px;
            top: 10px;
        }
        #bgbj {
            width: 1920px;
            height: 100%;

            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1;
            display: none;
        }
        #guanbi{
            box-sizing: border-box;
            background-color: yellow;
            padding: 5px 10px;
            color: red;
            font-weight: bold;
            box-shadow: 5px 5px 3px rgba(0,0,0,0.5);
            cursor: pointer;
            border-radius: 5px;
        }
        #button {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            height: 50px;
            line-height: 50px;
            background-color: #ec0300;
            font-size: 18px;
            color: #FFF;
            cursor: pointer;
            z-index: 20;
        }
        #pop .one{ color:#FFF;
            text-align:center;

            font-size:19px;
            margin-bottom:0;
            line-height:30px;
        }
        #pop .two{
            background-color:#F62796;
            height:50px;
            text-align:center;
            margin-bottom:0;
            line-height:50px;
        }
        #pop .two .weixin{ line-height:26px;
            color:#FFF;
            font-weight:bold;
            font-size:24px;
        }
        #pop .stwe{
            text-align:center;
            height:50px;
            font-size:16px;
            background-color:#FFF;
            margin-bottom:0;
            line-height:50px;
        }
        #pop .for{
            text-align:center;
            height:50px;
            font-size:16px;
            background-color:#03F;
            margin-bottom:0;
            line-height:25px;
        }
    </style>
    <div id="pop"><span id="guanbi" onclick="guan()">关闭</span>
        <p class="one count_wxcp"><span class="wxabc">{{ $wxh }}</span></p>
        <p class="one">复制成功</p>
        <p class="for"><a href="weixin://" style="color:#FFF; padding-top:5px; display:block;">去微信添加好友</a></p>
    </div>
    <div id="bgbj"></div>
    <div style="display:none;"></div>
    <!--弹框-->
    <script>
        var btn = document.getElementById("button");
        var btns = document.getElementById("guanbi");
        var bj = document.getElementById("bgbj");
        var cont = document.getElementById("pop");
        function kai() {
            cont.style.display = "block";
            bj.style.display = "block"
        }
        function guan() {
            cont.style.display = "none";
            bj.style.display = "none"
        }
        // btn.onclick = kai;
        // btns.onclick = guan;
    </script>
@stop