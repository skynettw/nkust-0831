<?php 
	session_start(); 
	$username = $_SESSION["username"];
	$link_homepage = "<a href='index.php'>首頁</a> ";
	$link_login = " <a href='login.php'>登入</a>";
	$link_lotto = " <a href='lotto.php'>大樂透預測</a> ";
	$link_compare = " <a href='compare.php'>產品比較</a> ";
	$link_logout = " <a href='logout.php'>登出</a>";
	echo $link_homepage;
	if ($username==NULL) { 
		//如果是訪客的話，要執行這邊
		echo $link_login;
	}else {
		//如果是會員的話，要執行這邊
		echo $link_lotto;
		echo $link_compare;
		echo $link_logout;
	}
?>
