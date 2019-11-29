<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr>
    <td>新闻标题</td>
    <td>新闻分类</td>
    <td>新闻图片</td>
    <td>新闻简介</td>
    <td>前往详情页</td>
</tr>
    @foreach($info as $v)
    <tr>
        <td>{{$v['n_title']}}</td>
        <td>{{$v['n_class']}}</td>
        <td><img src="{{env('APP_UPLOAD')}}{{$v['n_img']}}" style="width:100px;height:100px;"></td>
        <td>{{$v['n_brief']}}</td>
        <td>
            <a href="{{url('news/play/'.$v['n_id'])}}">详情页</a>
        </td>
    </tr>
        @endforeach
</table>
    {{$info->links()}}
</body>
</html>
<script src="/jquery.js"></script>
<script>
    $(function(){
       $(document).on('click','.page-link',function(){
           var _this=$(this);
           var url=_this.prop('href');
           console.log(url);
           $.get(
                   url,function(res){
                      $('body').html(res);
                   }
           )
           return false;
       })
    })
</script>