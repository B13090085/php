<?php //開始 PHP 程式
    error_reporting(0); //關閉錯誤訊息
    session_start(); //啟動 Session
    if (!$_SESSION["id"]) { //檢查是否登入
        echo "please login first"; //請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳到登入頁
    }
    else{
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); //建立資料庫連線
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";  //建立 SQL 新增指令
        if (!mysqli_query($conn, $sql)){ //執行 SQL
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //3秒後回網頁
        }
    }
?>
