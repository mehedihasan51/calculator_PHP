<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include 'style.css' ?>
    </style>
</head>
<body>
    
<div class="container">
    <h2>Basic Calculator</h2>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first Number" required><br><br>
        <input type="number" name="num2" placeholder="Enter Sedond Number" required><br><br>
        <label for="">Optation</label><br>
        <select name="opration" id="">
            <option value="add">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
            <option value="binary">Binary Conversion</option>
            <option value="octal">Octal Conversion</option>
            <option value="hexadecimal">Hexadecimal Conversion</option>
        </select><br><br>
        <button name="submit" value="submit">Calculat</button>
    </form>
    <div id="result">

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $opration = $_POST["opration"];

        switch ($opration) {
            case "add":
                $result = $num1 + $num2;
                echo "<p>Result: $num1 + $num2 = $result</p>";
                break;
            case "subtraction":
                $result = $num1 - $num2;
                echo "<p>Result: $num1 - $num2 = $result</p>";
                break;
            case "multiplication":
                $result = $num1 * $num2;
                echo "<p>Result: $num1 * $num2 = $result</p>";
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Result: $num1 / $num2 = $result</p>";
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
                break;
                case "binary":
                    echo "Binary: " . decbin($num1);
                    break;
                case "octal":
                    echo "Octal: " . decoct($num1);
                    break;
                case "hexadecimal":
                    echo "Hexadecimal: " . dechex($num1);
                    break;
            default:
                echo "<p>Error: Invalid operation selected.</p>";
        }
    }
    ?>

    </div>
</div>
</body>
</html>