<?php
    $name=$_POST["name"];
    $district=$_POST["district"];
    $gender=$_POST["gender"];
    $social=$_POST["social"];

    echo "Name: $name <br/>";
    echo "District:<br/>";
    foreach ($district as $y){
        echo "$y<br/>";
    };
    echo "gender: $gender <br/>";
    echo "Socials:<br/>";
    foreach ($social as $x){
        echo "$x<br/>";
    };
?>