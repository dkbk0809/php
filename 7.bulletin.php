<?php
    error_reporting(0); //關閉 PHP 錯誤顯示
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    //輸出表格的標題列，使用<table border=2>建立有框線的表格
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){ //用while迴圈一筆一筆抓出資料，每筆資料對應一個佈告。
        echo "<tr><td>";
        echo $row["bid"]; //佈告編號
        echo "</td><td>";
        echo $row["type"]; //類別
        echo "</td><td>"; 
        echo $row["title"]; //標題
        echo "</td><td>";
        echo $row["content"];  //內容
        echo "</td><td>";
        echo $row["time"]; //發布時間
        echo "</td></tr>";
    }
    echo "</table>"
?>
