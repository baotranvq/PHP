<?php   
    $dbh = mysqli_connect("localhost","root","","db_bao") ;
    if(!$dbh){
        die ("connection fail" . mysqli_connect_error());
    }
    // die("unable to connect to MySQL" . mysqli_connect_error());
    // if(!mysqli_select_db($dbh,'db_bao'));
    // die("unable to select database" . mysqli_connect_error());
    $sql_stmt = "SELECT * FROM my_contacts";
    $result = mysqli_query($dbh,$sql_stmt);

    if(!$result)
        die("Database access failed: " . mysqli_connect_error());
        $rows = mysqli_num_rows($result);
    
    if($rows){
        while($row = mysqli_fetch_array($result)){
            echo 'ID: '. $row['ID'] . '<br>';
            echo 'FullName: '. $row['full_name'] . '<br>';
            echo 'Gender: '. $row['gender'] . '<br>';
            echo 'Contact: '. $row['contact_no'] . '<br>';

        }
    }
?>
