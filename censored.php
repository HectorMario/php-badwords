<?php
$original = $_GET["text"];
$censored = $_GET["censored"];
$starts = "***";
$newText = str_replace("$censored", "$starts", "$original");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="prova">
        <p>
            <?php 
            echo $original; 
            ?>
        </p>
        <p>
            <?php 
            echo strlen("$original"); ?>
        </p>
    </div>
    <div class="prova">
        <p>
            <?php 
            echo $newText; 
            ?>
        </p>
        <p>
            <?php 
            echo strlen("$newText"); ?>
        </p>
    </div>
</body>
</html>