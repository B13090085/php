<?php //開始執行 PHP 程式
    error_reporting(0); //關閉所有錯誤訊息顯示
    session_start(); //啟動 Session
    if (!$_SESSION["id"]) { //檢查是否已登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳轉到登入頁面
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); //連接 MySQL 資料庫
        $sql="delete from user where id='{$_GET["id"]}'"; //建立刪除資料的 SQL 指令
        #echo $sql; //註解掉的除錯程式
        if (!mysqli_query($conn,$sql)){ //執行 SQL 指令
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //無論成功或失敗，3秒後都會回到前面
    }
?>
