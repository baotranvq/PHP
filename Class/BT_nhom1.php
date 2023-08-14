<?php
    include "./BT_nhom.php";

    $book = new Book("1", "Toi di code dao","HN","2020","100000"); 
    echo $book->Display_Book();
?>