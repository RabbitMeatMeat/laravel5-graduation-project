<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/icon.jpg') }}">

    <title>Lalala</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    {{--<link href="{{ asset('/css/bootswathc.min.css') }}" rel="stylesheet">--}}
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/my.css') }}" rel="stylesheet">

</head>

<body>

<div class="mybanner">
    <div class="headerpic">
        <nav class="nav navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">navigation switch</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img alt="Brand" src="{{ URL('/img/bestcoder.png') }}">
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL('/auth/login') }}">LOG IN</a> </li>
                        <li><a href="{{ URL('/auth/register') }}" class="btn btn-default btn-lg" role="button">SIGN UP</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="masthead">
            <div class="container-fluid">
                <h1>在线软件分发平台</h1>
                <h2>Challenge yourself. Get paid.</h2>
                <a class="btn btn-info btn-lg" href="{{ URL('/auth/register') }}" role="button">Get Started</a>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="singleblock">
        <h1>Prove your skills and showcase your talents</h1>
        <h2>Win cash in the process</h2>
        {{--<h1>提升你的技能 展示你的才智 获得丰厚回报</h1>--}}
    </div>
</div>
{{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-5 col-lg-offset-1">--}}
            {{--<h2>程序员</h2>--}}
            {{--<p>寻找适合自己的任务，获得回报</p>--}}
            {{--<p><a class="btn btn-primary" href="{{ URL('/auth/register') }}" role="button">开始</a></p>--}}
        {{--</div>--}}

        {{--<div class="col-lg-5 col-lg-offset-1">--}}
            {{--<h2>程序员</h2>--}}
            {{--<p>寻找适合自己的任务，获得回报</p>--}}
            {{--<p><a class="btn btn-primary" href="{{ URL('/auth/register') }}" role="button">开始</a></p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="footer">
    <div class="version">Contest System 1.0</div>
    <div class="copyright">Copyright &copy; 2014-2015 <a href="mailto:hduacm@qq.com">HDU ACM Team</a></div>
</div>




<!-- Placed at the end of the document so the pages load faster -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
