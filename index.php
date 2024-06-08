<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="calculator">
        <h1>Multipurpose Calculator</h1>
        <form action="calculator.php" method="POST">
            <input type="number" name="value1" placeholder="Enter first value" required>
            <input type="number" name="value2" placeholder="Enter second value" required>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="exponent">Exponentiation</option>
                <option value="percentage">Percentage</option>
                <option value="sqrt">Square Root</option>
                <option value="log">Logarithm</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
        <?php if (isset($_GET['result'])) : ?>
            <h2>Result: <?= htmlspecialchars($_GET['result']) ?></h2>
        <?php endif; ?>
    </div>
</body>

</html>