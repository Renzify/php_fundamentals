<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num1" placeholder="1st Number">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="2nd Number">
    <button>Caculate</button>
    </form>

    <?php
        // Check Request
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Read/Grab input safely
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = filter_input(INPUT_POST, "operator", FILTER_SANITIZE_SPECIAL_CHARS);

        // Validate / Error Handling
            $errors = false;

            // Check if empty
            if (empty($num1) || empty($num2) || empty($operator)) {
                echo "<p>Please fill in all fields</p>";
                $errors = true;
            }

            // Check if valid inputs
            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "<p>Please input a number</p>";
                $errors = true;
            }

            // Process
            if (!$errors){
                $value = 0;
                
                switch ($operator){
                    case "add":
                        $value = $num1 + $num2;
                      break;

                    case "subtract":
                        $value = $num1 - $num2;
                        break;
                    
                    case "multiply":
                        $value = $num1 * $num2;
                        break;

                    case "divide":
                        $value = $num1 / $num2;
                        break;
                    default:
                        echo "<p>Internal Server Error</p>";
                }
            //Output
                echo "<p>Result = " . $value . "</p>";
            }
        }
    ?>
</body>
</html>