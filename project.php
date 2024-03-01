<html>
    <head>
        <!-- 設定utf-8編碼 -->
        <meta charset="utf-8">       
    </head>
    <body>

        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                //檢查帳號密碼 存在使用 header 函數套至特定網頁
                //如果不存在則顯示錯誤訊息
            }
        ?>


        <form method="post" action="p2.php">
            <div class="form-group">
                <label for="ProjectName">研究案名</label>
                <input type="text" class="form-control" id="ProjectName" name="account">
                <label for="HospitalID">醫院編號</label>
                <input type="text" class="form-control" id="HospitalID" name="HospitalID">
            </div>
        </form>
    </body>
</html>