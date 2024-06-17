<?php
//writefile = fopen("writefile.txt", "w") or die("Unable to open file!");
writefile = fopen("writefile.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite(writefile, $txt);
$txt = "Tom Cruise\n";
fwrite(writefile, $txt);

writefile = fopen("writefile.txt", "r") or die("Unable to open file!");
echo fread(writefile,filesize("writefile.txt"));

fclose(writefile);
?>