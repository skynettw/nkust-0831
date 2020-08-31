<?php 
	session_start(); 
	$username = $_SESSION["username"];
	$link_homepage = "<a href='index.php'>首頁</a>";
	$link_login = "<a href='login.php'>登入</a> ";
	$link_logout = "<a href='logout.php'>登出</a> ";
	echo $link_homepage;
	if ($username==NULL) { 
		echo $link_login;
	}else {
		echo $link_logout;
	}
?>
