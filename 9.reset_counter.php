<?php
    session_start();
    unset($_SESSION["counter"]); //把計數器清空，重置
    echo "counter重置成功...."; //提示訊息：「counter重置成功....」
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //<meta> 標籤，用來實現自動跳轉。

?>
