<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            background: beige;
        }
    </style>
</head>
<body>
    <?php
        echo "TEST";

        $string = "Bravo My Life.";
        echo $string;

        $num = $_GET['point'];
        echo $num;
    ?>
    <h1>나의 수학점수는</h1>
    <div class="box"><?php echo $num;?>점 입니다.</div>
    <?php
        if ($num == 100) {
    ?>
    <div class="box">100점 입니다!</div>
    <?php
        } else {
    ?>
    <div class="box">100점이 아닙니다.</div>
    <?php
        }
    ?>
</body>
</html>