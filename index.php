<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($x=1;$x<=30;$x++){
        if ($x==5 || $x==10 || $x==15){
            continue;
        }
        else{
            echo "$x <br>";
        }
    }
    ?>
</body>
</html>
