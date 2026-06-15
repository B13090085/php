<?php //開始 PHP 程式

    error_reporting(0); //關閉錯誤訊息顯示
    session_start(); //啟動 Session
    if (!$_SESSION["id"]) { //檢查登入狀態
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳轉登入頁面
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); //連接 MySQL 資料庫
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //開始執行 SQL 指令
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //如果 SQL 執行失敗就會顯示錯誤
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //3秒後回到18.user.php
        }
    }

?>
