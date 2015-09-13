<html>
<head>
<title>PHP-Unzip</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<style>
body {
    background-color: #141313;
    color: #FFFFFF;
    font-family: Ubuntu;
}
</style>
</head>
</html>

<?php
$datei = 'pack.zip';
$ordner = './';
  $zip = new ZipArchive;
  $res = $zip->open($datei);
   if ($res === TRUE) {
     $zip->extractTo($ordner);
     $zip->close();
      echo '<center><br /><br /><br />The file has been successfully extracted.<br /></center>';
   } else {
      echo '<center><br /><br /><br />There was an error extracting the ZIP archive! Is there a ZIP archive named: <b>'.$datei.'</b>?</center>';
   }
?>
