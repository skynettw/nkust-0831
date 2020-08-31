<?php
	session_start();
	//以下取得來自於表單的資料
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	if ($password=="1234") {
		//成功登入要處理的程式碼
		$_SESSION["username"] = $username;
		$_SESSION["email"] = $email;
		header("Location: index.php");
		exit;
	} else {
		//登入失敗要處理的程式碼
		echo "你的密碼輸入錯誤！<br>";
		echo "<a href='login.php'>回上一頁重新輸入</a>";
	}
?>