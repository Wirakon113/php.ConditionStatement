<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำสั่ง loop ใน PHP</title>
</head>
<body>
    <h1>การใช้คำสั่งเเบบ loop statement</h1>
    <?php 
    echo "<h2>While Loop<br></h2>";
    $x = 1 ;
    while ($x <= 5) {
        if ($x == 3) 
        break;
        echo "รอบที่ $x<br>";
        $x++;
       
    }
    $i = 1;
    while ($i <= 50) { 
        echo "-"; $i++; 
    }
    echo "<br>";
    echo "<h1>DO WHILE LOOP</h1>";
    $y = 1 ;
    do {
        echo "รอบที่ $y<br>";
        $y++;
    }while ($y <= 5);
    echo "<br>";
    echo "<h1>FOR LOOP</h1>";

    for ($i=1; $i <= 10; $i++) { 
        echo "For รอบที่ $i<br>";
    }
    echo "------------------------------------------------------<br>";

    for ($i=1; $i <+5 ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo "#";
        }
        echo "<br>";
    }
    echo "------------------------------------------------------<br>";
    echo "<h1>Foreach Loop</h1>";
    $pet = array("เเมว","สุนัข","นกเเก้ว","ปลาทอง","หมูเด้ง");
    foreach ($pet as $value) {
        echo "ฉันชอบ".$value."<br>";
    }
    echo "------------------------------------------------------<br>";
    echo "<h1>Foreach Loop เเบบ key => value</h1>";
    $food = array("หมวย"=>"ส้มตำ","บูม"=>"หมูย่าง","บีม"=>"ผัดกระเพรา"); 
    foreach ($food as $student => $value) {
        echo "ชื่อ$student ชอบกิน$value<br>";
    }


    ?>
</body>
</html>