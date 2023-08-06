<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .div2{
            background-color: red;
            width: 100px;
            height: 100px;
            margin: 10px 10px;
            border: 1px solid black;
            float: left;
        }
    </style>
</head>
<body>
    
    <h1>BOX</h1>
    <?php
    for ($i = 0 ; $i < 5; $i ++){
        for($j = 0; $j < 5; $j++){
            echo '<div class= div2> </div>';
        }
        echo '<br> <br>';
    }


    $animals_list = array ("lion", "wolf");
    foreach($animals_list as $key=>$array_value){
        echo "<h1>" .$key . "<br>";
    }
    foreach($animals_list as $array_values){
        echo "h1" .$array_values ;
    }

    ?>
</body>
</html>