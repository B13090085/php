<html> //建立 HTML 文件開始
    <head><title>新增使用者</title></head> //瀏覽器分頁標題顯示「新增使用者」
    <body> //網頁內容開始
<?php        //開始 PHP 程式碼。
    error_reporting(0); //關閉所有錯誤訊息顯示
    session_start(); //啟動 Session，而Session 是伺服器端保存登入資訊的方法
    if (!$_SESSION["id"]) { //如果 Session 裡沒有 id
        echo "請登入帳號"; 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後自動跳到
2.login.html
    }
    else{    
        echo "
            <form action=15.user_add.php method=post> //建立表單
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除> //送出按鈕和重設按鈕
            </form>
        ";
    }
?>
    </body>
</html> //網頁結束
