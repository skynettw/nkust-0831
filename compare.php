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
		<?php echo $tags; ?>
	</body>
</html>
