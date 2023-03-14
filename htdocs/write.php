<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset='utf-8'>
    <title>write_artice</title>
    <link rel="stylesheet" type="text/css" href="./static/mainstyle.css">
</head>

<body>
    <form method="post" action="write_action.php">
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td id="table_top">
                    <p><b>Write an article</b></p>
                </td>
            </tr>

            <tr>
                <td>
                    <table class="table2">
                        <tr>
                            <td>Author</td>
                            <td><input type="text" name="name" size=30></td>
                        </tr>

                        <tr>
                            <td>Title</td>
                            <td><input type="text" name="title" size=70></td>
                        </tr>

                        <tr>
                            <td>Content</td>
                            <td><textarea name="content" cols=75 rows=15></textarea></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pw" size=15 maxlength=15></td>
                        </tr>
                    </table>

                    <input id="inputbox" type="submit" value="Input">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>