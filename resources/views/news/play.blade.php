<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>新闻详情页---{{$info->n_title}}</h3>
    作者{{$info['u_connect']}}&nbsp;&nbsp;&nbsp;发布时间{{date('Y-m-d H:i:s',$info['n_time'])}}&nbsp;&nbsp;&nbsp;访问量：{{$incr}}
    <br>
    主题内容：{{$info->n_desc}}
</body>
</html>