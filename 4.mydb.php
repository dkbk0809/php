<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_connect()建立資料庫
    $result=mysqli_query($conn, "select * from user"); //查詢資料庫資料
    $row=mysqli_fetch_array($result);//mysqli_fetch_array() 從查詢出來的資料每筆抓出來
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
