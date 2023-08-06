<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $cd = $_POST['a'];
    $cr = $_POST['b'];
    $dt = $cd * $cr;
    ?>
     <form action="bt2.php" method="POST">
        <h1>Diện Tích Hình chữ Nhật</h1>
        <form >
        <label for="fname">Chiều Dài:</label><br>
        <input type="text" id="fname" name="a" value="<?php echo (isset($_POST['a'])) ? $_POST ['a'] : '' ; ?>" ><br>
        <label for="lname">Chiều Rộng:</label><br>
        <input type="text" id="lname" name="b" value="<?php echo (isset($_POST['b'])) ? $_POST ['b'] : '' ;?>"><br><br>
        <label for="lname">Diện Tích:</label><br>
        <input type="text" id="lname" name="c" disabled  value = "<?php echo isset($dt) ? $dt : '' ;?>" ><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>