<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่ง Condition (กลุ่มคำสั่ง if)</h1>
    <?php 
    echo "<h2>คำสั่ง if</h2>";
    $x = 5;
    $y = 8;

    echo "\$x = $x<br>";
    echo "\$y = $y<br>";
    if($x < $y){
        echo " ค่าตัวเเปล x น้อยกว่าค่าในตัวเเปล y <br>";
    
    }
    else{
        echo "ค่าในตัวเเปล y น้อยกว่าค่าในตัวเเปล x <br>";
    }
    echo "-------------------------------------------------------------<br>";
    echo "<h2>Short hand if</h2>";
    $score = 90;
    if($score >= 50) echo"ขอเเสดงความยินดีคุณสอบผ่าน";
    echo "<br>";
    $result = $score >= 50 ? "ได้เกรด P":"ได้เกรด F";
    echo "<br>";
    echo "ผลการเรียนของคุณ".$result;
    echo "<br>";
    echo "-------------------------------------------------------------<br>";
    echo "<br>";
    echo "<h2>คำสั่ง switch case</h2>";
    $pet = 'Cat';
    switch ($pet) {
        case 'Cat':
            echo "คุณชอบนอนเหมือนเเมว";
            break;
        case 'Dog':
            echo "คุณชอบทำเหมือนหมา";
            break;
        case 'Bird':
            echo "คุณพูดมากเหมือนนก";
            break;
        
        default:
            echo "คุณเป็นมนุษย์";
            break;
    }

    ?>
</body>
</html>