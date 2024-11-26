<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php 
        $x = 75 ;
        echo "ค่าของ x ==> ".$x;
        echo "<br>";    
        function myfuntion(){
           // echo "อ่านค่าจาก funtion 1 ค่าของ x==> ". $GLOBALS['x'];
           global $x;
           $x = 35;
           echo "อ่านค่าจาก funtion ค่าของ x==> ".$x;
           echo "<br>";
        }
        myfuntion();
        echo "อ่านค่าจาก funtion ค่าของ x==> ".$x;
        echo "<hr>";

        echo "<h2> การใช้ข้อมูลจาก Sever \$_server ดัวย </h2>";
        echo $_SERVER['PHP_SELF']."<br>"; 
        //echo $_SERVER['SEVER_NAME']."<br>";
        echo $_SERVER['HTTP_HOST']."<br>";
        //echo $_SERVER['HTTP_REFERER']."<br>";
        echo $_SERVER['HTTP_USER_AGENT']."<br>";
        echo $_SERVER['SCRIPT_NAME']."<br>";
        echo "<hr>";
        

    ?>
</body>
</html>