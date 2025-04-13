<?php
    session_start();
    unset($_SESSION["id"]); //清除session中的id資料
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; //3秒後跳轉到登入頁面（2.login.html）



?>
