<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">

    <title>휴캔두잇</title>
</head>

<body>
    <header>
        <div class="logo gugi-regular">
            휴캔두잇
        </div>
        <nav>
            <i class="bi bi-house"></i>
            <i class="bi bi-trash3"></i>
            <i class="bi bi-person-circle"></i>
        </nav>
    </header>

    <main>
        <!-- 휴지통 -->
        <div class="trashcanContainer">
            <img src="images\trash_can.png" class="trashcan">
            <div class="tissueContainer">
                <div class="tissue" id="tissue">
                    <div class="tissue-modal" id="tissueModal">
                        <!-- 오늘의미션 모달창 -->
                        <h4>오늘의 미션!</h4>
                        <div class="chks">
                            <div class="chk">
                                <input type="checkbox" id="chk1">
                                <label for="chk1">외국 드라마 자막으로 보기</label>
                            </div>
                            <div class="chk">
                                <input type="checkbox" id="chk2">
                                <label for="chk2">실전 회화 단어 10개 외우기</label>
                            </div>
                            <div class="chk">
                                <input type="checkbox" id="chk3">
                                <label for="chk3">영어로 자기소개서 써보기</label>
                            </div>
                        </div>
                        <div class="timerContainer">
                            <div class="timer">
                                <div id="d-day-hour"></div>
                                :
                                <div id="d-day-min"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="js/todo.js"></script>
</body>

</html>