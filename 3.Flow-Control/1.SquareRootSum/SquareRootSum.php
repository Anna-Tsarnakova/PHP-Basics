<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Square Root Sum</title>
        <style>
            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 1px solid black;
            }
            th {
                font-size: 22px;
            }
        </style>
    </head>

    <body>
        <table>
            <thead>
            <tr>
                <th>Number</th>
                <th>Square</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $sum = 0;
            for ($i = 0; $i <= 100; $i += 2):
                $square = round(sqrt($i), 2);
                $sum += $square;
            ?>
            <tr><td><?= $i ?></td><td><?= $square ?></td></tr>
            <?php endfor ?>
            <tr><th>Total:</th><td><?= $sum ?></td></tr>
            </tbody>
        </table>
    </body>
</html>