<!-- 首頁 -->
<html>

    <head>
        <!-- 設定utf-8編碼 -->
        <meta charset="utf-8">
        <meta name=”viewport” content="width=device-width", initial-scale=1.0>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>

    <body>

        <form method="post" action="p2.php">
            <div class="form-group">
                <label for="ProjectName">研究案名</label>
                <input type="text" class="form-control" id="ProjectName" name="account">
                <label for="HospitalID">醫院編號</label>
                <input type="text" class="form-control" id="HospitalID" name="HospitalID">
            </div>

            <div>
                <h4>新增醫院</h4>
                <label for="HospitalName">醫院名稱</label>
                <input type="text" class="form-control" id="HospitalName" name="HospitalName">
                <label for="HospitalID">醫院編號</label>
                <input type="text" class="form-control" id="HospitalID" name="HospitalID">
            </div>
        </form>

    </body>
</html>