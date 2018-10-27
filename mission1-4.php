<html>
<title>mission1-4</title><!-- 文書のタイトル -->
<meta charset="UTF-8">
<body> <!--文書の内容 -->
<form method="post" action="mission1-4.php"><!--actionはデータの送信先、methodは転送方法を指定。今回はpostを使用。-->
<p>
<input type="text" name="コメント" value="コメント"></p><br>
<p>
<input type="submit" value="送信">
</p>
</form>
</body>
</html>


<?php
if(isset($_POST['coment']));
{
$comment = $_POST["コメント"]; //取得するコメントを$commentoで指定する
date_default_timezone_set('Asia/Tokyo');
echo "ご入力ありがとうございます。<br>".date('Y/m/d H:i:s')."に".$comment."を受け付けました。";
//date()は年月日時分を指定
}
?>