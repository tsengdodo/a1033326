<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';//設定網頁編碼
class PostOffice{
	function mailFiler(){
		// Use fopen function to open a file
$file = fopen("string.txt", "r");

// Read the file line by line until the end
while (!feof($file)) {
$value = fgets($file);
echo $value;
echo "</br>";
}

// Close the file that no longer in use
fclose($file);
	}
	function mailRegex(){
		
		$file = fopen("string.txt", "r");
		$value = fgets($file);
		$cleaned=preg_replace("/[^0-9A-Za-z]/","",$value);

		echo $cleaned;
		echo "</br>";

	}
	function spiltroad(){

	}
}
$PostOffice = new PostOffice;
$PostOffice->mailFiler();
$PostOffice->mailRegex();
?>
