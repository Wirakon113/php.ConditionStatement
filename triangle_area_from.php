<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณพื้นที่รูปเลขาคณิต</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h2 {
            color: #007BFF;
        }
        form {
            background-color: #ffffff;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: #fff;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        input[type="reset"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h2>โปรแกรมคำนวณพื้นที่รูปเลขาคณิต</h2>
    <form action="triangle_area.php" method="post">
        <label for="height">ความสูง:</label>
        <input type="text" id="height" name="height" placeholder="กรอกค่าความสูง" required>

        <label for="width">ความยาวฐาน:</label>
        <input type="text" id="width" name="widht" placeholder="กรอกค่าความยาวฐาน" required>

        <input type="submit" value="คำนวณ">
        <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>
