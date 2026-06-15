<?php

error_reporting(0);     // 關閉錯誤訊息

session_start();        // 啟動 session


if (!$_SESSION["id"]) {

    echo "請登入帳號";

    // 3秒後跳回登入頁
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";

}
else{

  
    $conn = mysqli_connect(
        "120.105.96.90",
        "immust",
        "immustimmust",
        "immust"
    );

   
    $sql = "delete from bulletin where bid='{$_GET['bid']}'";

    // echo $sql;  // 除錯用（顯示 SQL）

    if (!mysqli_query($conn, $sql)) {

        // ❌ 刪除失敗
        echo "佈告刪除錯誤";

    } else {

        // ✅ 刪除成功
        echo "佈告刪除成功";
    }

    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
}

?>
