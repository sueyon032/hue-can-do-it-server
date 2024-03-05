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
        <!-- 미션선택 모달창 -->
        <div class="modal" id="modal">
            <div class="modalContainer">
                <h2>30일간 도전할 미션을 선택하세요!</h2>

                <div class="challengeContainer" id="challenges">
                    <h4>어떤 것에 도전하고 싶나요?</h4>

                    <div class="challenge">
                        <button>공부</button>
                        <button>운동</button>
                    </div>
                </div>

                <div class="challengeContainer" id="challenge-types">
                    <h4>어떤 공부를 하고 싶나요?</h4>
                    <!--오늘의 미션으로 무엇을 하고 싶나요?-->

                    <div class="challenge-type">
                        <button>국어</button>
                        <button>영어</button>
                        <button>수학</button>
                    </div>
                </div>

                <div class="startContainer" id="startContainer">
                    <button class="startbtn">도전</button>
                </div>

                <p>*선택한 주제로 30일 챌린지를 성공하면 수료증을 드립니다.</p>
            </div>
        </div>

        <!-- 휴지통 -->
        <div class="trashcanContainer">
            <img src="images\trash_can.png" class="trashcan">
            <div class="tissueContainer">
                <div class="tissue" id="tissue">
                </div>
            </div>
        </div>

    </main>

    <script src="js/home.js"></script>
</body>

</html>