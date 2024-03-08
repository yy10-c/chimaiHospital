<!-- 送檢單 -->
<html>

<!--
     icon換成圖片不要使用網路上的

-->

<head>
    <!-- 設定utf-8編碼 -->
    <meta charset="utf-8">
    <meta name=”viewport” content="width=device-width" , initial-scale=1.0>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- 選單列 -->
    <div class="container-fliod">
        <script src="https://kit.fontawesome.com/7b6297acc7.js" crossorigin="anonymous"></script>
        <form action="">
            <div class="row">
                <div class="col-2">
                    <div><a href="project.php"><i class="fa-solid fa-house">首頁</i></a></div>
                    <div><a href="InspectionForm.php"><i class="fa-solid fa-file-medical">送檢單</i></a></div>
                    <div><a href=""><i class="fa-solid fa-flask">檢測數據</i></a></div>
                    <div><a href="employee.php"><i class="fa-solid fa-id-card-clip">員工資料</i></a></div>
                </div>

                <!-- 檢體相關 -->
                <div class="col-5">
                    <div class="qwe">
                        <label for="LabID">LabID</label>
                        <input type="text" id="LabID" name="LAbID">
                    </div>
                    <div>
                        <label for="SampleID">SampleID</label>
                        <input type="text" name="SampleID" id="SampleID">
                    </div>

                    <div>
                        <label for="CaseNo">病歷號</label>
                        <input type="text" name="CaseNo" id="CaseNo">
                    </div>

                    <div>
                        <label for="Number">數量</label>
                        <input type="text" name="Number" id="Number">
                    </div>

                    <div>
                        <label for="Remainder">剩餘</label>
                        <input type="text" name="Remainder" id="Remainder">
                    </div>

                    <div><!-- TBD(待確認) -->
                        <label for="TBD-date">待完成日</label>
                        <input type="date">
                    </div>

                    <div>
                        <label for="ReportReturnTime">報告寄回時間</label>
                        <input type="date" name="ReportReturnTime" id="ReportReturnTime">
                    </div>

                    <div>
                        <label for="SpecimenReturnTime">檢體寄回時間</label>
                        <input type="date" name="SpecimenReturnTime" id="SpecimenReturnTime">
                    </div>
                </div>

                <!-- 病人資料 -->
                <div class="col-5">
                    <div>
                        <label for="SubmitInspection">送檢單位</label>
                        <input type="text" name="SubmitInspection" id="SubmitInspection">
                    </div>

                    <div>
                        <label for="SubmitPersonnel">送檢人</label>
                        <input type="text" name="SubmitPersonnel" id="SubmitPersonnel">
                    </div>

                    <div>
                        <label for="InspectionDay">採檢日</label>
                        <input type="data" name="InspectionDay" id="InspectionDay">
                    </div>

                    <div>
                        <label for="Name">名字</label>
                        <input type="text" name="Name" id="Name">
                    </div>

                    <div>

                        <label for="gender">性別</label>
                        <input type="radio" name="gender" id="genderM" value="male">
                        <label class="form-check-label" for="genderM">
                            男
                        </label>
                        <input type="radio" name="gender" id="genderF" value="female">
                        <label class="form-check-label" for="genderF">
                            女
                        </label>

                        <!-- <label for="gender">性別</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderM" value="male" checked>
                            <label class="form-check-label" for="genderM">
                                男
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="genderF" value="female">
                            <label class="form-check-label" for="genderF">
                                女
                            </label>
                        </div> -->
                    </div>

                    <div>
                        <label for="age">年齡</label>
                        <input type="number" name="age" id="age">
                    </div>

                    <div>
                        <label for="Contacts">聯絡人</label>
                        <input type="text" name="Contacts" id="Contacts">
                    </div>

                    <div>
                        <label for="Phone">電話</label>
                        <input type="text" name="Phone" id="Phone">
                    </div>

                    <div>
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email">
                    </div>
                </div>
            </div>

            <!-- photo and submit -->
            <div class="row">
                <div class="col-10">
                    <div>
                        <label for="InspectionPhoto">檢體照片</label>
                        <input type="file" id="InspectionPhoto" name="InspectionPhoto" accept="image/png, image/jpeg" />
                    </div>
                </div>

                <div class="col-2">
                    <button type="submit" class="btn btn-primary" name="btn">送出</button>
                </div>
            </div>
        </form>

    </div>


</body>

</html>