<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Calculator</title>
</head>
<body>
    <h1>PHP Basic Calculator</h1>
    <form method="GET" action="">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        
        <button type="submit">Calculate</button>
    </form>

    <?php
    // Check if form values are set
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];

        // Perform the operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operation";
        }

        // Output result
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>
