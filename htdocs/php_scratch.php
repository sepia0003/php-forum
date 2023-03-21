<html>
<body>

<!-- 클라이언트가 웹서버에게 .php로 요청을 보내면, 
웹서버는 php에게 위임하고 php는 해당 구문을 계산한 뒤 html로 만들어서 웹서버에 전달,
그리고 웹서버는 해당 html파일을 클라이언트에게 응답 -->
<!-- 아래 php구문에서 계산한 결과가 최종적으로 완성되는 html파일에 반영된다. php구문 그 자체가 아니라 -->
<?php
//문자열 출력
echo "hello world\n";

//if문
if(1 == 1.0){
    echo 'result: if';
} 
else{
    echo 'result: else';
}

if($_GET['id'] === 'usrid'){
    echo 'right';
}
else{
    echo 'wrong';
}

//for,while등
while(1 == 2){
    echo 'while coding';
}

for($i=0; $i<10; $i++){//php에는 C언어와는 다르게 앞에 int i; 등으로 선언할 필요없이 $i; 로 선언하면 된다.
    echo 'for coding';
}

?>
</body>
</html>