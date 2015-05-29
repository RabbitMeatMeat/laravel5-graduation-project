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
    {{--<link href="{{ asset('/css/base.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('/css/my.css') }}" rel="stylesheet">

</head>

<body>
    @yield('content');

<!-- Placed at the end of the document so the pages load faster -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
