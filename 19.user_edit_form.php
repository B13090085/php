<html> //HTML網頁開始
    <head><title>修改使用者</title></head> //會顯示在瀏覽器分頁上
    <body> //網頁內容開始
    <?php //開始 PHP 程式
    error_reporting(0); //關閉錯誤訊息
    session_start(); //啟動 Session
    if (!$_SESSION["id"]) { //判斷是否登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳到登入頁面
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); //連接資料庫
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); //執行 SQL 查詢
        $row=mysqli_fetch_array($result); //從查詢結果取出一筆資料
        echo " //開始輸出 HTML 表單
        <form method=post action=20.user_edit.php> //建立表單 
            <input type=hidden name=id value={$row['id']}> //建立隱藏欄位
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改> //建立按鈕
        </form> //表單結束
        "; 
    }
    ?> //結束 PHP
    </body>
</html>
