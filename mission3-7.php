<?php

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

header("Content-Type: text/html; charset=UTF-8");
$sql="CREATE TABLE tbtest"
."("
."id INT,"
."name char(32),"
."comment TEXT"
.");";

$stmt=$pdo->query($sql);


$sql='SHOW TABLES';
$resut=$pdo -> query($sql);
foreach($resut as $row){
	echo$row[0];
	echo'<br>';
}
echo"<hr>";


$sql='SHOW CREATE TABLE tbtest';
$result=$pdo->query($sql);
foreach($result as $row){
print_r($row);
}
echo "<hr>";


$sql=$pdo->prepare("INSERT INTO tbtest(id,name,comment)VALUES('1',:name,:comment)");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$name='sasaki';
$comment='summer';
$sql-> execute();
$sql=$pdo->prepare("INSERT INTO tbtest(id,name,comment)VALUES('2',:name,:comment)");
$sql -> bindParam(':name',$name,PDO::PARAM_STR);
$sql -> bindParam(':comment',$comment,PDO::PARAM_STR);
$name='sasaki';
$comment='winter';
$sql -> execute();

$sql='SELECT*FROM tbtest';
$results=$pdo-> query($sql);
foreach($results as $row){
//$rowの中にはテーブルのカラム名がはいる
echo $row['id'].',';
echo $row['name'].',';
echo $row['comment'].'<br>';
}


$id=1;
$nm="ai";
$kome="fall";//好きな名前と言葉は自分で決めること
$sql="update tbtest set name='$nm' , comment='$kome' where id=1";
$result=$pdo->query($sql);

?>