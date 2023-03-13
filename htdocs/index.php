<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="./static/mainstyle.css" />
</head>
<body>
    <div id="forum_area">
        <h1>Forum</h1> 
        <h4>you can write articles for free</h4>
        <table class="article_list">
            <thead>
                <tr>
                    <th width="70">num</th>
                    <th width="500">title</th>
                    <th width="100">author</th>
                    <th width="100">uploaded</th>
                    <th width="100">recommended</th>
                    <th width="100">views</th>
                </tr>
            </thead>

            <?php
                $sql = query("select * from forum"); 
                while($board = $sql->fetch_array()){
                    $title=$board["title"]; 
                    if(strlen($title)>30){ 
                        $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                    }
                }
            ?>

            <tbody>
                <tr>
                    <td width="70"><?php echo $board['idx']; ?></td>
                    <td width="500"><a href=""><?php echo $title;?></a></td>
                    <td width="100"><?php echo $board['name']?></td>
                    <td width="100"><?php echo $board['date']?></td>
                    <td width="100"><?php echo $board['recom']; ?></td>
                    <td width="100"><?php echo $board['views']?></td>
                </tr>
            </tbody>
        </table>
        <div id="write_btn">
            <a href="/forum/write.php"><button>write</button></a>
        </div>
    </div>
</body>
</html>