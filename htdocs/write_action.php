<?php
$connect = mysqli_connect("localhost", "root", "test1234", "db_board");

$id = $_POST['name']; 
$pw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d H:i:s');

$URL = './index.php';

$query = "INSERT INTO board (number, title, content, date, recom, id, password) 
        values(null,'$title', '$content', '$date', 0, '$id', '$pw')";

$result = $connect->query($query);
if ($result) {
?>  <script>
        alert("<?php echo "Your article is input." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "Failed to input your article.";
}

mysqli_close($connect);
?>