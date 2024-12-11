<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เครื่องคำนวณ BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            color: #2c3e50;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #34495e;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #34495e;
        }
        .form-group input {
            width: 90%;
            padding: 10px;
            border: 2px solid #bdc3c7;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #2980b9;
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background: #ecf0f1;
            color: #34495e;
            text-align: left;
        }
        .result p {
            margin: 10px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>เครื่องคำนวณ BMI</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="firstname">ชื่อ:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="age">อายุ:</label>
                <input type="number" id="age" name="age" min="1" required>
            </div>
            <div class="form-group">
                <label for="weight">น้ำหนัก (กิโลกรัม):</label>
                <input type="number" id="weight" name="weight" min="1" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="height">ส่วนสูง (เซนติเมตร):</label>
                <input type="number" id="height" name="height" min="1" step="0.1" required>
            </div>
            <button type="submit" class="btn">คำนวณ BMI</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $age = intval($_POST['age']);
            $weight = floatval($_POST['weight']);
            $height = floatval($_POST['height']);

            // คำนวณค่า BMI
            $heightInMeters = $height / 100;
            $bmi = $weight / ($heightInMeters * $heightInMeters);
            $bmi = round($bmi, 2);

            // แปลผลค่า BMI
            if ($bmi < 18.5) {
                $category = "น้ำหนักน้อยเกินไป";
                $advice = "คุณควรกินอาหารที่มีสารอาหารครบถ้วนเพื่อเพิ่มน้ำหนัก.";
            } elseif ($bmi < 24.9) {
                $category = "น้ำหนักปกติ";
                $advice = "ยอดเยี่ยม! รักษารูปร่างและสุขภาพให้ดีต่อไป.";
            } elseif ($bmi < 29.9) {
                $category = "น้ำหนักเกิน";
                $advice = "คุณควรเริ่มออกกำลังกายและควบคุมอาหาร.";
            } else {
                $category = "โรคอ้วน";
                $advice = "คุณควรปรึกษาแพทย์เพื่อคำแนะนำเพิ่มเติม.";
            }

            // แสดงผลลัพธ์
            echo "<div class='result'>";
            echo "<h2>ผลลัพธ์ BMI</h2>";
            echo "<p><strong>ชื่อ-นามสกุล:</strong> $firstname $lastname</p>";
            echo "<p><strong>อายุ:</strong> $age ปี</p>";
            echo "<p><strong>BMI:</strong> $bmi ($category)</p>";
            echo "<p><strong>คำแนะนำ:</strong> $advice</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
