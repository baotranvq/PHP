<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            text-decoration: none;
            list-style: none;
        }
    </style>
</head>
<body>
    <?php
        $school = array(
            "Students"=>array(
                "SV001"=>array(
                    "name"=>"Trần Minh ",
                    "birthday"=>"08/05/2004",
                    "gender"=>"Nam"
                ),
                "SV002"=>array(
                    "name"=>"Phạm Văn Tuấn",
                    "birthday"=>"29/3/2004",
                    "gender"=>"Nam"
                ),
                "SV003"=>array(
                    "name"=>"Lê Phương Uyên",
                    "birthday"=>"09/02/2004",
                    "gender"=>"Nữ"
                ),
                "SV004"=>array(
                    "name"=>"Lê Nhật Trường",
                    "birthday"=>"27/05/2004",
                    "gender"=>"Nam"
                ),
                "SV005"=>array(
                    "name"=>"Nguyễn Kim Oanh",
                    "birthday"=>"04/11/2004",
                    "gender"=>"Nữ"
                ),
            ),
            "Teachers"=>array(
                "GV001"=>array(
                    "name"=>"Bùi VĂn Linh",
                    "birthday"=>"02/01/1989",
                    "gender"=>"Nam"
                ),
                "SV002"=>array(
                    "name"=>"Nguyễn  Long",
                    "birthday"=>"02/06/1948",
                    "gender"=>"Nam"
                ),
                "SV003"=>array(
                    "name"=>"Kim Anh Hạnh",
                    "birthday"=>"09/30/1999",
                    "gender"=>"Nữ"
                ),
                "SV004"=>array(
                    "name"=>"Nguyễn VĂn Hiếu",
                    "birthday"=>"17/08/1994",
                    "gender"=>"Nam"
                )
            )
        );
        foreach($school as $type=>$list){
            echo '<div >';
            echo '<h1> '.$type.' </h1>';
            foreach($list as $code => $person){
                echo '<li><b>Mã:</b> '.$code.'</li>';
                echo '<li><b>Tên:</b> '.$person['name'].'</li>';
                echo '<li><b>Ngày sinh:</b> '.$person['birthday'].'</li>';
                echo '<li><b>Giới tính:</b> '.$person['gender'].'</li>';
                echo '<br/>';
            }
            echo '</div>';
        }
    ?>
</body>
</html>