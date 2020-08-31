<?php 
	session_start(); 
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>何敏煌0831</title>
	</head>
	<body>
		<h2>
			何敏煌的0831練習網頁
		</h2>
		<hr>
			<?php include "menu.php"; ?>	
		<hr>
		<?php
		//檢查$username的內容以決定瀏覽者的身份
		if ($username!=NULL) {
			echo "你的帳號：". $username . "<br>" . 
				 "電子郵件：" . $email . "<br>";
		} else {
			echo "歡迎親愛的訪客，請登入以檢視更多的訊息！<br>";
		}
		echo "<hr>";
		//以下引入頁尾的程式碼
		include "footer.php";
		?>
	</body>
</html>