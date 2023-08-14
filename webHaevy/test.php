<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file3.css">
    <style>
       table td {
           font-family: 'Courier New', Courier, monospace;
           padding-right: 10px;
       }
       .col td {
           font-size: 18px;
           font-weight: bold;
       }
       table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .col {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .row{
            text-align: center;
            margin-left: 300px;
            margin-right: 300px;
        }
       
   </style>
</head>
<body>
    <div id="header">
           <ul class="menu">
           <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Thông báo</a></li>
            <li><a href="#">Hỏi đáp</a></li>
            <li><a href="#">Liên hệ</a></li>
           </ul>   
    </div>
<div class="containerr">
        <div class="row">
            <form method="get">
                <label for="search">Tìm kiếm ga:</label>
                <input type="text" id="search" name="search">
                <input id="tt" type="submit" value="Tìm kiếm">
            <label>So sánh ga:</label>
            <select name="ID1" id="ID1">
                <option value="">Chọn ga</option>
                <?php 
                $open = fopen("data.csv", "r");

                $array = [];
                while (($data = fgetcsv($open)) !== false) {
                    $array[] = $data;
                }
                fclose($open);

                foreach ($array as $sub){
                    echo '<option >'.$sub[0].'</option>';
                }
                ?>
            </select>

            <label for="ID2">với ga:</label>
            <select name="ID2" id="ID2">
                <option value="">Chọn ga</option>
                <?php 
                foreach ($array as $sub){
                    echo '<option >'.$sub[0].'</option>';
                }
                ?>
            </select>
            
            <input id="ss" type="submit" value="So sánh">
        </form>
        
        <?php 
        if (isset($_GET['ID1']) && isset($_GET['ID2']) && !empty($_GET['ID1']) && !empty($_GET['ID2'])) {
            $ID1 = $_GET['ID1'];
            $ID2 = $_GET['ID2'];

            $IDIndex1 = array_search($ID1, array_column($array, 0));
            $IDIndex2 = array_search($ID2, array_column($array, 0));
            
            if (true) {
                $IDData1 = $array[$IDIndex1];
                $IDData2 = $array[$IDIndex2];

                $kc = abs($IDData1[1] - $IDData2[1]);
                $time = $kc / 76.58; 
                    
                echo '<p>Khoảng cách giữa ga ' . $ID1 . ' và ga ' . $ID2 . ' là: ' . $kc . ' KM</p>';
                echo '<p>Thời gian đi từ ga ' . $ID1 . ' đến ga ' . $ID2 . ' là: ' . $time . ' giờ</p>';
            } else {
                echo '<p>Không tìm thấy thông tin về các ga bạn đã chọn</p>';
            }
        }
        
        ?>
            <?php 
                $open = fopen("data.csv","r");
                    
                echo "<br>
                <table>
                    <tr>
                            <tr class='col'>
                                <td>Tên Ga</td>
                                <td>KM</td>
                                <td>SE7</td>
                                <td>SE5</td>
                                <td>SE3</td>
                                <td>SE1</td>
                            </tr>";
                $count = 0;
                while(($data = fgetcsv($open)) !== false){
                    
                    if ($count === 0) {
                        $count++;
                        continue;
                    }

                    $ga = (!empty($data[0]) ? $data[0] : "Tàu nghĩ");
                    $km = (!empty($data[1]) ? $data[1] : "Tàu nghĩ");
                    $se7 = (!empty($data[2]) ? $data[2] : "Tàu nghĩ");
                    $se5 = (!empty($data[3]) ? $data[3] : "Tàu nghĩ");
                    $se3 = (!empty($data[4]) ? $data[4] : "Tàu nghĩ");
                    $se1 = (!empty($data[5]) ? $data[5] : "Tàu nghĩ");

                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $searchTerm = $_GET['search'];
                        if (stripos($ga, $searchTerm) !== false) {
                            echo " <br>
                            <tr class='aa'>                                        
                                <td>$ga</td>
                                <td>$km</td>
                                <td>$se7</td>
                                <td>$se5</td>
                                <td>$se3</td>
                                <td>$se1</td>
                            </tr>";
                        }
                    } else {
                        echo "
                        <tr class='aa'>                                        
                            <td>$ga</td>
                            <td>$km</td>
                            <td>$se7</td>
                            <td>$se5</td>
                            <td>$se3</td>
                            <td>$se1</td>
                            </tr>";
                    }
                }
                
                echo '
                    </td>
                </tr>
                </table>';
                
                fclose($open);
            ?>
        </div>
</div>
        <!-- <div class="footer">
      <p> &copy;  Bản quyền thuộc đương sắt Việt Nam</p>  
      
        Liên hệ: <a href="#">+123-456-789</a> | Email: <a href="#">info@example.com</a>
        <br>
        <a href="#">Chính sách Riêng tư</a> | <a href="#">Điều khoản Sử dụng</a>
        <br>
        Kết nối với chúng tôi trên <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a> và <a href="https://twitter.com/yourcompany" target="_blank" rel="noopener noreferrer">Twitter</a>
    </div> -->
</body>
</html>