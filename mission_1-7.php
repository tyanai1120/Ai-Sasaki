<html>
<head>
<meta charset="utf-8">
<title>mission1-7></title>
</head>
<body>
<form method="post" action="mission_1-7.php">
<p>
<input type="text" name="コメント"></p><br>
<p>
<input type="submit" value="送信">
</p>
</form>
</body>
</html>

<?php
if(!empty($_POST['コメント']))
{
$filename='mission_1-6_Ai Sasaki.txt';	
	
$comment=$_POST['コメント'];

$fp=fopen($filename,'a');
fwrite($fp,$comment."\n");
fclose($fp);

}
else
{
}

$text=file('mission_1-6_Ai Sasaki.txt');
echo "$text[0]<br />";
echo "$text[1]<br />";
echo "$text[2]<br />";

foreach($text as $value){
echo $value."<br>";
}

?>