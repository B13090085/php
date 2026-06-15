<?php

error_reporting(0);        // 關閉錯誤訊息

session_start();           // 啟用 session

if (!$_SESSION["id"]) {

    echo "請登入帳號"; 
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉登入頁

}
else{


    $conn = mysqli_connect(
        "120.105.96.90",
        "immust",
        "immustimmust",
        "immust"
    );

  
    $sql = "update bulletin set
            title='{$_POST['title']}',
            content='{$_POST['content']}',
            time='{$_POST['time']}',
            type='{$_POST['type']}'
            where bid='{$_POST['bid']}'";


        //  更新失敗
        echo "修改錯誤";

    } else {

        // 更新成功
        echo "修改成功，三秒鐘後回到佈告列表";

        // 跳回公告列表
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
}

?>
