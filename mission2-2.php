<html>
<head>
<title>mission_2-2</title>
<!-- 文書のタイトル -->
</head>
<meta charset="UTF-8">
<body> <!--文書の内容 -->
<form method="post" action="mission2-2.php">
<!--actionはデータの送信先、methodは転送方法を指定。今回はpostを使用。-->
<p>
名前:<input type="text" name="名前"></p><br>
<p>
コメント:<input type="text" name="コメント"></p><br>
<p>
<input type="submit" value="送信">
</p>
</form>
</body>
</html>


<?php
$filename='mission_2-1_Ai Sasaki.txt';
$fp=fopen($filename,'a');

$i=1;
$lines=file('mission_2-1_Ai Sasaki.txt');
$cnt=count($lines,+1);//取得する投稿番号を指定する
$name=$_POST['名前'];//取得する名前の指定
$comment=$_POST['コメント'];//取得するコメントを指定
date_default_timezone_set('Asia/Tokyo');//基準にする日にち・時間の地域を指定
$date=date('Y/m/d H:i:s');//年月日時分

if($_POST['コメント'])
{
fwrite($fp,$cnt."<>".$name."<>".$comment."<>".$date."\n");//<>を各文字の間に入れる
}
	else
{
}

$text=file('mission_2-1_Ai Sasaki.txt');


foreach($text as $value){
	$pieces=explode("<>",$value);
echo $pieces[0]." ";
echo $pieces[1]." ";
echo $pieces[2]." ";
echo $pieces[3]."<br>";
}


fclose($fp);

?>


