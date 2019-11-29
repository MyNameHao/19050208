<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('user/logins')}}" method="post">
    <table border="1">
        @csrf
        <tr>
            <td>用户名</td>
            <td><input type="text" name="u_account"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="u_pwd"></td>
        </tr>
        <tr>
            <td>操作</td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>