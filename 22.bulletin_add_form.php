<?php //開始 PHP 程式
    error_reporting(0); //關閉所有錯誤訊息
    session_start(); //啟動 Session 
    if (!$_SESSION["id"]) { //檢查登入狀態
        echo "please login first"; //顯示：please login first，中文：請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳轉登入頁面
    }
    else{
        echo "
        <html> //開始輸出 HTML
            <head><title>新增佈告</title></head> //網頁標題：新增佈告，顯示在瀏覽器分頁
            <body>
                <form method=post action=23.bulletin_add.php> //建立表單
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除> //建立日期選擇器及設定重設按鈕
                </form> //表單結束
            </body>
        </html>
        ";
    }
?>
