<?php
    if(($open = fopen("vd4.csv", "r")) !== FALSE){
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
            $array[] = $data;
        }
        fclose($open);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        foreach ($array as $sub){
            echo '<div>;
                <div>
                    <h2> '.$sub[0].'</h2>
                    <h4>'.$sub[1].'</h4>
                    <p>'.$sub[2].'</p>

                </div>

            </div>';

        }

        ?>
    </div>
</body>
</html>