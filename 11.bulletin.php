<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請先登入"; //提示「請先登入」，並在3秒後跳轉回登入頁。
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        //顯示歡迎訊息 + 功能連結
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        //連接資料庫，並撈出bulletin資料表的所有資料。
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");

        //顯示表格標題列，第一欄是空的
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){ //顯示「修改」與「刪除」按鈕，透過GET參數將佈告的bid帶到編輯和刪除頁面
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"]; //編號
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
        echo "</table>";
    
    }

?>
