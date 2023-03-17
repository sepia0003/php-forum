<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset='utf-8'>
    <title>Forum_login</title>
    <link rel="stylesheet" type="text/css" href="./static/mainstyle.css">
</head>

<body>
    <div align='center'>
        <span>
            <p style="font-size: 25px;"><b>login</b></p>
        </span>

        <form method='post' action='login_action.php'>
            <p><b>I &nbsp;D &nbsp;</b><input name="id" type="text"></p>
            <p><b>PW &nbsp;</b><input name="pw" type="password"></p>
            <br />&nbsp;
            <input type="submit" value="Login">&nbsp;&nbsp;
        </form><br />
        <button id="register" onclick="location.href='./register.php'">Register</button>

    </div>
</body>

</html>