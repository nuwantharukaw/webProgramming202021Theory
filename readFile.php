<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("readFile.txt", "r") or die("Unable to open file!");
echo fread($readFile,filesize("readFile.txt"));
fclose($readFile);
?>

</body>
</html>