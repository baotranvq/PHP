<?php

    if (($open = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        button{
            width: 100px;
            height: 40px;
            border-radius: 10px;
            background-color: #FF5E1F;
            color: white;
            font-weight: 500;
        }
        .content-mid{
            border: 1px solid rgb(97, 97, 97);
            border-radius: 20px;
            padding: 30px;
        }
        .wrapper-mid{
            padding: 10px 0px;
        }
        h5{
            color: #FF5E1F;
        }
        .mid-content{
            display: grid;
            grid-template-columns: 390px 390px 390px;
            gap: 20px;
            margin: 30px 25px;
        }
        
    </style>
</head>

<body>
    <div class="heard-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/9/97f3e7a54e9c6987283b78e016664776.svg" alt=""></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Chuyến Bay</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Du Lịch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Khách Sạn</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <img src="./image/bar1.png" width="100%" alt="">
    </div>
    <div class="mid-content" >
        <?php 
            foreach ($array as $sub){
                echo '<div class= "wrapper-mid" >
                    <div class="content-mid">
                        <h2> <img src="./image/vietnamAirline.webp" alt="">  '.$sub[0].'</h2>
                        <h4>'.$sub[1].' <i class="bi bi-airplane"></i> '.$sub[2].'</h4>
                        <h5>'.$sub[3].'</h5>
                        <button>Choose</button>
                    </div>
                </div>';
            }

            ?>
    </div>
        
</body>

</html>