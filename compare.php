<?php 
	session_start(); 
	$username = $_SESSION["username"];	
	if ($username==NULL) {
		header("Location: login.php?redir=compare.php");
		exit;
	}
	$tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>產品比較</title>
	</head>
	<body>
		<h2>
			中型掀背車比較
		</h2>
		<hr>
		<?php 
		//echo $tags;
		//開啟檔案作為讀取
		$fp = fopen("products.txt", "r") or die("Die!");
			//讀入所有的資料，放在$data變數中
			$data = fread($fp, filesize("products.txt"));
		//關檔
		fclose($fp); 
		//explode用來以換列字元來拆解讀取到的資料
		$cars = explode("\n", $data);
		//以下用一個迴圈把每一個項目個別讀出來
		foreach($cars as $car) {
			//利用explode把$car拆解成2個項目，
			//放在$temp變數中
			$temp = explode(",", $car);
			//$temp這時候是一個陣列
			//第1個項目$temp[0]是車款名稱，放到$model變數中
			//第2個項目$temp[1]是影片ID，放到$vid變數中
			$model = trim($temp[0]); 
			//使用trim清除前後空白字元
			$vid = trim($temp[1]);
			echo $model . "<br>";
			//以下做影片ID的置換，並顯示出內容
			echo str_replace("^^^^", $vid, $tags);
			echo "<br>";
		}
		?>
	</body>
</html>
