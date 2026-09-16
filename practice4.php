<?php
// Read the requested table size and use 10 when the input is missing or invalid.
$number = filter_input(INPUT_GET, "number", FILTER_VALIDATE_INT);

if ($number === false || $number === null || $number < 1) {
    $number = 10;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background-color: #fef6e4;
            color: #243447;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        main {
            width: 850px;
            max-width: 95%;
            margin: auto;
            padding: 30px;
            background-color: white;
            border-radius: 14px;
            box-shadow: 0 8px 20px #0000001f;
        }

        input {
            width: 70px;
            padding: 8px;
            border: 1px solid #b7c6d1;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            padding: 9px 16px;
            color: white;
            background-color: #ee6c4d;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #9db4c0;
        }

        th {
            color: white;
            background-color: #3d5a80;
        }

        td:first-child {
            color: white;
            background-color: #5c7c99;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #3d5a80;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main>
        <h1>Multiplication Table</h1>
        <p>Enter a number to create a table from 1 through that number.</p>

        <form method="get">
            <label for="number">Table size:</label>
            <input id="number" name="number" type="number" min="1" value="<?php echo $number; ?>" required>
            <button type="submit">Create Table</button>
        </form>

        <table>
            <tr>
                <!-- The top row contains the column indexes. -->
                <th>Row \ Column</th>
                <?php for ($column = 1; $column <= $number; $column++): ?>
                    <th><?php echo $column; ?></th>
                <?php endfor; ?>
            </tr>

            <?php for ($row = 1; $row <= $number; $row++): ?>
                <tr>
                    <!-- The first cell in each row contains its row index. -->
                    <td><?php echo $row; ?></td>
                    <!-- Each remaining cell is the row index times the column index. -->
                    <?php for ($column = 1; $column <= $number; $column++): ?>
                        <td><?php echo $row * $column; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <a href="index.html">Back to the lab home page</a>
    </main>
</body>
</html>
