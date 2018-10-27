<?php

$filename='mission_2-5_Ai Sasaki.txt';
$fp=fopen($filename,'a');
$lines=file('mission_2-5_Ai Sasaki.txt');
$last_line=$lines[count($lines)-1];//$last_lineを定義
$pieces=explode("<>",$last_line);
$last_id=$pieces[0];
$cnt=$last_id+1; //取得する投稿番号を指定する
$name=$_POST['名前'];//取得する名前の指定
$comment=$_POST['コメント'];//取得するコメントを指定
date_default_timezone_set('Asia/Tokyo');//基準にする日にち・時間の地域を指定
$date=date('Y/m/d H:i:s');//年月日時分
$password=$_POST['パスワード1'];//パスワード


//if(empty($_POST['パスワード']))
//{
//fwrite($fp,$cnt."<>".$name."<>".$comment."<>".$date."<>".$password."\n");//<>を各文字の間に入れる
//}
//else
//{
//}
//fclose($fp);


//削除機能
$filnename='mission_2-5_Ai Sasaki.txt';//ファイルを指定
$fp=fopen($filename,'r');//ファイルを開いて読み込む
$lines=file('mission_2-5_Ai Sasaki.txt');//開く、linsで全体が読み込まれた
 $delete=$_POST['削除対象番号'];
$arr=array();//空の配列
$pass=$_POST['パスワード2'];
if(!empty($delete))//もし
	{	
		if($pieces[0] == $delete && $pieces[4]==($_POST['パスワード2'])){//もし削除番号とパスワードが一致したら？
	foreach($lines as $line){
	$pieces=explode("<>",$line);
if($delete !=$pieces[0])//!=がイコールではない。&pieces[0]投稿番号
	{
	
	$arr[]=$line;//入力された投稿番号以外のものを入れる
	}
}
$fp=fopen($filename,'w');
	foreach($arr as $line){
		
	$pieces=explode("<>",$line);

	fwrite($fp,$line);
	}
	fclose($fp);
	}
	elseif($pieces[0] == $delete && $pieces[4] !=($_POST['パスワード2'])){
	//削除番号とパスワードが両方合ってない時
	echo"パスワードが一致しませんでした。";{
	
	}
	}
	}


		//if($pieces[4]==($_POST['パスワード2'])){
		//	$lines=file($filename);
		//	foreach($lines as $line){
		//$pieces=explode("<>",$line);
		//}
			//else
			//{
		//}
	//	}
		


//編集機能
	$filename='mission_2-5_Ai Sasaki.txt';
	$fp=fopen($filename,'r');
	$lines=file('mission_2-5_Ai Sasaki.txt');
	$edit=$_POST['編集対象番号'];
	$editnumber=$_POST['editnumber'];
	$passwords=$_POST['パスワード3'];

	if(!empty($edit))//もし編集対象番号が空ではない時
	{
		$lines=file('mission_2-5_Ai Sasaki.txt');//テキストファイルopen
		foreach($lines as $line){//ループ
		$pieces=explode("<>",$line);
		if($edit == $pieces[0] && $passwords == $pieces[4])
 {
 	$date0=$pieces[0];//投稿番号
 	$date1=$pieces[1];//なまえ
 	$date2=$pieces[2];//コメント
 	$date3=$pieces[3];//日付
 	$date4=$pieces[4];//password
 }
 
 																				
 	else if($edit == $pieces[0] && $passwords != $pieces[4])
 			{
 	echo"パスワードが一致しませんでした";
			}						
	}
	}
	
	$arr=array();//空の配列
$filename='mission_2-5_Ai Sasaki.txt';


		if(!empty($editnumber)){
		$filename='mission_2-5_Ai Sasaki.txt';
		foreach($lines as $line){
		$pieces=explode("<>",$line);//区切り文字で区切ったものを配列に入れる
		if($editnumber !==$pieces[0])
		{
			$arr[]=$line;
			//空の配列に入れる
														}
	else{
		//編集した時に表示させるコード
		$name=$_POST['名前'];//取得する名前の指定
		$comment=$_POST['コメント'];//取得するコメントを指定
		$arr[]=($pieces[0]."<>".$name."<>".$comment."<>".$pieces[3]."<>".$pieces[4]."<>");//<>を各文字の間に入れる
		//echo $name;
		}
											}
		$fp=fopen($filename,'w');//上書き保存
		foreach($arr as $line){
		$pieces=explode("<>",$line);
		fwrite($fp,$line);//fwrite($fp,$cnt."<>".$name."<>".$comment."<>".$date."<>".$passwords."<>"."\n");
											}
		fclose($fp);
		}
		else							
{
if(!empty($_POST['コメント']) && !empty($_POST['名前']) && !empty($_POST['パスワード1']))//コメントと名前と新規投稿の時のパスワードが入力されたら
	{
	
			$password=$_POST['パスワード1'];//パスワード
				$fp=fopen($filename,'a');//fwriteをファイルに追記する
		fwrite($fp,$cnt."<>".$name."<>".$comment."<>".$date."<>".$password."<>"."\n");
		fclose($fp);//ファイルを閉じる
	}
}




	
?>
<html>
<head>
<title>mission_2-5</title><!-- 文書のタイトル -->
</head>
<meta charset="UTF-8">
<body> <!--文書の内容 -->
<form method="post" action="mission2-5.php">
<!--actionはデータの送信先、methodは転送方法を指定。今回はpostを使用。-->
<p>
	<input type="text" name="名前" placeholder="名前" value="<?php echo $date1;?>">
</p>
<p>
	<input type="text" name="コメント" placeholder="コメント" value="<?php echo $date2;?>">
</p>
<p>
	<input type="text" name="パスワード1" placeholder="パスワード1" value="<?php echo $date4;?>">
</p>
<p>
	<input type="hidden" name="editnumber"   value="<?php echo $date0;?>">
</p>
<p>
		<input type="submit" value="送信">
</p>
<p>
	<input type="text" placeholder="削除対象番号" name="削除対象番号" >
</p>
<p>
	<input type="text" name="パスワード2" placeholder="パスワード" value="">
</p>
<p>
		<input type="submit" value="送信">
</p>
<p>
	<input type="number" name="編集対象番号" placeholder="編集対象番号">
</p>
<p>
	<input type="text" name="パスワード3" placeholder="パスワード" value="">
</p>
<p>
		<input type="submit" value="送信">
</p>
</form>
</body>
</html>

<?php

	$filename='mission_2-5_Ai Sasaki.txt';
$fp=fopen($filename,'r');
$lines=file($filename);
foreach($lines as $line)
{//ループ $linesが開きたいファイル
	$pieces=explode("<>",$line);//＜＞で区切るプラス配列に入れる
 echo $pieces[0]." ";
 echo $pieces[1]." ";
 echo $pieces[2]." ";
 echo $pieces[3]."<br>";
}
fclose($fp);

?>

