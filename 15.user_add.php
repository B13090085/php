<?php

error_reporting(0); //關閉所有錯誤訊息顯示
session_start(); //啟動 Session 功能，讓程式能夠讀取登入資訊
if (!$_SESSION["id"]) { //檢查是否已登入
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後自動跳轉到登入頁面
}
else{    //如果已經登入就執行下面程式 

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); //建立 MySQL 連線
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; //建立SQL字串
   #echo $sql; //註解掉的除錯程式
   if (!mysqli_query($conn, $sql)) { //執行SQL
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //3秒後跳轉
   }
}
?>
