<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('/news/create')}}" method="post" enctype="multipart/form-data">
    <table>
        @csrf
        <tr>
            <td>新闻标题:</td>
            <td><input type="text" name="n_title"></td>
        </tr>
        <tr>
            <td>新闻分类</td>
            {{--<td><input type="text" name="n_class"></td>--}}
            <td><select name="n_class" id="">
                    @foreach($data as $v)
                    <option value="{{$v->c_name}}">{{$v->c_name}}</option>
                        @endforeach
                </select></td>
        </tr>
        <tr>
            <td>新闻图片</td>
            <td><input type="file" name="n_img"></td>
        </tr>
        <tr>
            <td>新闻简介</td>
            <td><input type="text" name="n_brief"></td>
        </tr>
        <tr>
            <td>新闻内容</td>
            <td><input type="text" name="n_desc"></td>
        </tr>
        <tr>
            <td><input type="submit" value='添加'></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>