<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {    //用while抓出每筆資料做比對
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"]))  //如果輸入的帳號($_POST["id"])和密碼 ($_POST["pwd"])與資料庫的某一筆相符，就把$login設為TRUE

       $login=TRUE;
   } 
   if ($login==TRUE) //顯示登入結果
     echo "登入成功";
  else
     echo "登入失敗";
?>
