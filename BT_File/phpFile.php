<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $myfile = fopen("file1.txt", "w") or die("Unable to open file!");
    $text = "localhost ; root; pwd1234";  
    fwrite($myfile, $text) or die("could not write file!");
    fclose($myfile);
    echo "File 'file1.txt' write"
    ?>
</body>
</html>