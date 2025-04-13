<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   $result=mysqli_query($conn, "select * from user");
   while ($row=mysqli_fetch_array($result)) {  // 用迴圈讀取每一列的資料，直到讀完
     echo $row["id"]." ".$row["pwd"]."<br>"; //分別取出這筆資料的帳號與密碼
   } 
?>
