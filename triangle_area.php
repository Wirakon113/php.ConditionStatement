<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณพื้นที่รูปเลขาคณิต</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        h3 {
            color: #555;
            margin: 15px 0;
        }

        .result {
            font-size: 1.2em;
            font-weight: bold;
            color: #28a745;
            margin-top: 20px;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>พื้นที่รูปสามเหลี่ยม</h2>
        <?php
            $height = isset($_POST['height']) ? $_POST['height'] : 0;
            $widht = isset($_POST['widht']) ? $_POST['widht'] : 0;
            $area = 0.5 * $height * $widht;

            echo "<h3>รูปสามเหลี่ยมที่มีความสูง <span style='color: #007BFF;'>$height</span> และมีความยาวฐาน <span style='color: #007BFF;'>$widht</span></h3>";
            echo "<div class='result'>คำนวณพื้นที่ได้ $area ตารางหน่วย</div>";
        ?>

    </div>
</body>
</html>
