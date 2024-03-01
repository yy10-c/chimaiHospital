<!-- 檢驗端 -->
<html>

    <head>
        <!-- 設定utf-8編碼 -->
        <meta charset="utf-8">
        <meta name=”viewport” content="width=device-width", initial-scale=1.0>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">        -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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

                        <input type="checkbox" name="all" id="all">
                        <label class="" for="ALL">ALL</label>
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
                    <select name="" id="">
                        <option value="DNA" selected>DNA</option>
                        <option value="RNA">RNA</option>
                    </select>
                    <input type="text" class="form-control" id="" name="">
                </div>

                <!-- <div> -->
                    <div>
                        <div>
                            <label for="">體積\濃度</label>
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