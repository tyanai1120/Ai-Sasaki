<html>
<head>
<title>mission_1-5</title><!-- 文書のタイトル -->
</head>
<meta charset="UTF-8">
<body> <!--文書の内容 -->
<form method="post" action="mission_1-5.php"><!--actionはデータの送信先、methodは転送方法を指定。今回はpostを使用。-->
<p>
<input type="text" name="コメント"></p><br>
<p>
<input type="submit" value="送信">
</p>
</form>
</body>
</html>


<?php
if($_POST['コメント']==="完成")
{
echo"おめでとう！";
}
else
if(!empty($_POST['コメント']))
{
$fp  = fopen($filename,'r');
$contents = file_get_contents($filename);
$comment = $_POST['コメント']; //取得するコメントを$commentoで指定する
date_default_timezone_set('Asia/Tokyo');
echo "ご入力ありがとうございます。<br>".date('Y/m/d H:i:s')."に".$comment."を受け付けました。";
//date()は年月日時分を指定

$filename='mission_1-5_Ai sasaki.txt';
$fp=fopen($filename,'w');//開く
fwrite($fp,$comment);//書き込む
fclose($fp);//ファイルを閉じる

}
else
{
}
?>