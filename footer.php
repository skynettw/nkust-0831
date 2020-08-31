<?php
	//開啟檔案作為讀取
	$fp = fopen("counter.txt", "r") or die("Unable to open the file");
	//讀取目前檔案的內容，也就是目前的人次
	$counter = fread($fp, filesize("counter.txt"));
	//關檔，$fp是檔案指標，可以自行命名，它是之後存取該檔案的指標
	fclose($fp);

	echo "本網站參觀人次："; 
	echo $counter;
	echo "人次！";
	$counter ++; // 把目前的數字內容加 1
	//開啟檔案作為寫入
	$fp = fopen("counter.txt", "w") or die("Unable to open the file");
	//把$counter變數的內容，以文字檔的型式儲存到檔案中
	fwrite($fp, $counter);
	//關檔
	fclose($fp);
?>
<br><center>
<a href="https://info.flagcounter.com/LPUO"><img src="https://s05.flagcounter.com/count/LPUO/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_6/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
</center>

