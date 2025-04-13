<?php
    session_start(); //開啟或建立一個新的session
    if (!isset($_SESSION["counter"]))  //如果$_SESSION["counter"] 沒有設定過，就設成1。有則在原本的基礎上加一
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"]; //顯示目前的計數值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; //顯示一個超連，點下連結後重製