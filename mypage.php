<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/mypage.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        <?php
        include('db_conn2.php');

        // user_info 테이블과 user_data 테이블을 조인하여 id가 일치하는 레코드의 이름을 가져오는 쿼리
        $sql = "SELECT user_info.name 
        FROM user_info
        INNER JOIN user_data ON user_info.id = user_data.id";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="info">';
            echo '<div class="profile">';
            echo '<i class="bi bi-emoji-smile"></i>';
            echo '</div>';
            echo '<div class="name"><b>' . $row['name'] . '</b></div>';
            echo '</div>';
        }

        mysqli_close($conn);
        ?>

        <div class="hr-container">
            <hr>
        </div>

        <div id="certificates-item">
            <div class="cer-box-containerss">
                <?php
                include('db_conn2.php');

                $sql = "SELECT tissue, main_keyword, sub_keyword FROM user_data";
                $result = mysqli_query($conn, $sql);

                $count = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['tissue'] == 30) {
                        $count++;

                        echo '<div class="cer-box">';
                        echo '<p class="cer-title">수료증</p>';
                        echo '<br>';
                        echo '<p class="cer-content">30일 간의 미션을 수행했습니다</p>';
                        echo '<br>';
                        echo '<p class="cer-target">목표 : ' . $row['main_keyword'] . ' - ' . $row['sub_keyword'] . '</p>';
                        echo '</div>';

                        if ($count % 3 == 0) {
                            echo '<div style="max-width: 1300px; gap: 50px;">';
                        }
                    }
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </main>

</body>

</html>