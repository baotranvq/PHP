
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .void-main{
            background-color: pink;
            text-align: center;
            width: 400px;
            padding: 20px 0px;
        }
    </style>
</head>
<body>
<?php
    $myfile = "file1.txt";
    $fh = fopen ("file1.txt", 'r') or die ("null");
    $line = fread($fh,filesize($myfile));
    fclose($fh);

    echo '<div class = "void-main">';
    echo "<pre> $line </pre>";
    echo '</div>';
?>


</body>
</html>