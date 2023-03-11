<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MySql-PHP Connection Test</title>
</head>

<body>
    <?php echo "MySql Connection Test<br>"; $db = mysqli_connect("localhost", "root", "");
    if($db){ echo "connect : connected<br>";
    } else{ echo "disconnect : disconnected<br>";
    }
    $result = mysqli_query($db, 'SELECT VERSION() as VERSION');
    $data = mysqli_fetch_assoc($result); echo $data['VERSION']; ?>
</body>
</html>

