<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    else
        echo "登入失敗";
?>

//帳號是john 密碼是john1234，全都輸入正確會顯示登入成功，有錯則登入失敗