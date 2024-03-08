<!-- 檢驗端 -->
<html>

<head>
    <!-- 設定utf-8編碼 -->
    <meta charset="utf-8">
    <meta name=”viewport” content="width=device-width" , initial-scale=1.0>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">        -->
</head>

<body>

    <form method="post" action="">
        <div class="form-group">

            <div>
                <label for="typle">檢體類別</label>
                <input type="checkbox" name="macrodissection" id="macrodissection">
                <label class="" for="macrodissection">macrodissection</label>

                <input type="checkbox" name="cell_block" id="cell_block">
                <label class="" for="cell_block">Cell block</label>

                <input type="checkbox" name="blood" id="blood">
                <label class="" for="blood">blood</label>

                <label>
                    <input type="checkbox" id="otherCheckbox"> Other
                    <input type="text" class="other-input" name="other_sport" placeholder="請輸入檢體類別">
                </label>

                <!-- <input type="checkbox" name="all" id="all">
                        <label class="" for="ALL">ALL</label> -->
            </div>

            <div>
                <label for="HE_stain">HE stain</label>
                <input type="text" class="form-control" id="HE_stain" name="HE_stain">
            </div>

            <div>
                <label for="IHC_stain">IHC stain</label>
                <input type="text" class="form-control" id="IHC_stain" name="IHC_stain">
            </div>

            <div>
                <label for="">白片</label>
                <input type="text" class="form-control" id="" name="">
            </div>

            <div>
                <label for="">使用量</label>
                <input type="text" class="form-control" id="" name="">
            </div>

            <div>
                <label for="">extiation</label>
                <input type="checkbox" name="DNA" id="DNA">
                <label class="" for="DNA">DNA</label>
                <input type="text" class="form-control" id="" name="">

                <input type="checkbox" name="RNA" id="RNA">
                <label class="" for="RNA">RNA</label>
                <input type="text" class="form-control" id="" name="">
            </div>

            <!-- <div> -->
            <div>
                <div>
                    <label for="">體積</label>
                    <!-- <input class="form-check-input" type="radio" name="Nomodrop" id="Nomodrop">
                    <label class="form-check-label" for="Nomodrop">
                        Nomodrop
                    </label>
                    <input class="form-check-input" type="radio" name="Qubit" id="Qubit">
                    <label class="form-check-label" for="Qubit">
                        Qubit
                    </label> -->
                    <input type="text" class="form-control" id="" name="">
                </div>
                <div>
                    <label for="">濃度</label>
                    <input class="form-check-input" type="radio" name="Nomodrop" id="Nomodrop">
                    <label class="form-check-label" for="Nomodrop">
                        Nomodrop
                    </label>
                    <input class="form-check-input" type="radio" name="Qubit" id="Qubit">
                    <label class="form-check-label" for="Qubit">
                        Qubit
                    </label>
                    <input type="text" class="form-control" id="" name="">
                </div>

            </div>

            <div>
                <label for="libraryQC">上傳圖片:</label></br>
                <input type="file" id="libraryQC" name="libraryQC" accept="image/png, image/jpeg" />
            </div>

            <div>
                <label for="analusisQC">分析品管</label></br>
                <!-- <input type="file" id="libraryQC" name="libraryQC" accept="image/png, image/jpeg" /> -->
            </div>

            <!-- </div> -->

        </div>
    </form>

</body>

</html>