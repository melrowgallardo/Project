<?php

function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero!";
        default:
            return "Invalid operator!";
    }
}

$result = "";
$num1 = "";
$num2 = "";
$operator = "+";

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $result = calculate($num1, $num2, $operator);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
        }
        h2 {
            color: #333;
            margin-top: 30px;
            font-size: 28px;
        }
        form {
            display: inline-block;
            padding: 25px 30px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            margin-top: 20px;
        }
        input, select, button {
            padding: 12px;
            margin: 8px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #66a6ff;
            box-shadow: 0 0 8px rgba(102,166,255,0.4);
        }
        button {
            background: #66a6ff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #4d8be0;
        }
        .result-box {
            margin-top: 20px;
            padding: 12px;
            width: 250px;
            font-size: 18px;
            border-radius: 10px;
            background: #f0f8ff;
            color: #333;
            font-weight: bold;
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post">
        <input type="number" name="num1" step="any" required value="<?php echo htmlspecialchars($num1); ?>">
        
        <select name="operator">
            <option value="+" <?php if ($operator == "+") echo "selected"; ?>>+</option>
            <option value="-" <?php if ($operator == "-") echo "selected"; ?>>-</option>
            <option value="*" <?php if ($operator == "*") echo "selected"; ?>>*</option>
            <option value="/" <?php if ($operator == "/") echo "selected"; ?>>/</option>
        </select>
        
        <input type="number" name="num2" step="any" required value="<?php echo htmlspecialchars($num2); ?>">
        <br>
        <button type="submit">Calculate</button>

        <?php if ($result !== ""): ?>
            <div class="result-box">
                Result: <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </form>
</body>
</html>
