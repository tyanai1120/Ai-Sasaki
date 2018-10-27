<html>
<head>
<title>mission_2-3</title><!-- 文書のタイトル -->
</head>
<meta charset="UTF-8">
<body> <!--文書の内容 -->
<form method="post" action="mission2-3.php">
<!--actionはデータの送信先、methodは転送方法を指定。今回はpostを使用。-->
<p>
名前:<input type="text" name="名前"></p><br>
<p>
コメント:<input type="text" name="コメント"></p><br>
<p>
<input type="submit" value="送信">
</p>
<p>
削除対象番号：<input type=" delete" name="削除対象番号">
<p>
<input type="submit" value="送信">
</p>
</form>
</body>
</html>


<?php

$filename='mission_2-1_Ai Sasaki.txt';
$fp=fopen($filename,'a');

$lines=file('mission_2-1_Ai Sasaki.txt');
$last_line=$lines[count($lines)-1];//$last_lineを定義
$pieces=explode("<>",$last_line);

$last_id=$pieces[0];
$cnt=$last_id+1; //取得する投稿番号を指定する
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


fclose($fp);

//削除機能
$filname='mission_2-1_Ai Sasaki.txt';//ファイルを指定
$fp=fopen($filename,'r');//ファイルを開いて読み込む
$lines=file('mission_2-1_Ai Sasaki.txt');//開く、linsで全体が読み込まれた
 $delete=$_POST['削除対象番号'];
$arr=array();//空の配列
foreach($lines as $line){
	$pieces=explode("<>",$line);
if($delete !=$pieces[0])//!=がイコールではない。&pieces[0]投稿番号
{
	$arr[]=$line;//入力された投稿番号以外のものを入れる
}
else{
}
}
fclose($fp);
$fp=fopen($filename,'w');
foreach($arr as $line){//ループ$arrが開きたいファイル
	$pieces=explode("<>",$line);//＜＞で区切るプラス配列に入れる
	fwrite($fp,$line);
 echo $pieces[0]." ";
 echo $pieces[1]." ";
 echo $pieces[2]." ";
 echo $pieces[3]."<br>";
}
fclose($fp);


?>