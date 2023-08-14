<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tieu-de{
            font-size: 26px;
            font-weight: 700;
            background-color: pink;
            color: orange;
        }
        h4{
            margin: 0px 20px;
            padding: 20px 0px;
        }
        .main-content{
            padding: 20px 0px;
            background-color: palevioletred;
        }
        .btn{
            padding: 5px 50px;
            border-radius: 10px;
            background-color: orangered;
            color: white;
            font-size: 26px;
            font-weight: 600;
        }
        .wrapper-main{
            width: 500px;
        }
        .void-main{
            background-color: wheat;
            width: 500px;
            padding: 10px 0px;
            text-align: center;
            color: red;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="formFile.php" method="post">
        <div class="wrapper-main">
            <div class="tieu-de">
              <h4>TẠO - GHI VÀ ĐỌC FILE VỪA TẠO</h4>
            </div>
            <div class="main-content">
                <span style="margin: 0px 20px; font-weight: 600;">Tên File</span><br>
                <label style="margin: 0px 20px;" for="">
                    <input name="ten_file" value="<?php echo $_POST["ten_file"];?>" type="text">
                </label>

                <br><span style="margin: 0px 20px; font-weight: 600;">Nội Dung</span>
                <div style="margin: 0px 20px;">
                    <textarea name="noi_dung" id="" cols="50" rows="5"><?php echo$_POST["noi_dung"];?></textarea>
                </div>
                <div >
                    <input style="margin-left: 100px;" class="btn" type="submit" name = "submit" value="Ghi và đọc file">
                </div>

            </div>
        </div>

    </form>
    <?php
        if(!empty($_POST["ten_file"]) && !empty($_POST["noi_dung"])){
            $ten_file =$_POST["ten_file"];
            $noi_dung =$_POST["noi_dung"];
            // ghi file
            $file = fopen("$ten_file", "w") or die ("null");
            fwrite($file, $noi_dung);
            echo "<p><b>Đã ghi file thành công</b></p>";
            fclose($file);
            // xuat file ra man hinh
            $myfile = "$ten_file";
            $fh = fopen ("$ten_file", 'r') or die ("null");
            $line = fread($fh,filesize($myfile));
            fclose($fh);
            echo "<br><b>Nội Dung Của File</b></br>";
            echo '<div class = "void-main">';
            echo "<pre>$line</pre>";
            echo '</div>';
        }
        else{
            echo "<p>Hay nhap du ten file va noi dung</p>";
        }
    ?>

</body>
</html>