<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Rich People's Problems</title>
        <style>
            table {
                margin-top: 20px;
            }

            table, td, th {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <main>
            <form action="" method="post">
                <label for="cars">Enter cars</label>
                <input type="text" id="cars" name="cars" required />
                <input type="submit" name="submit" id="submit" value="Show result" />
            </form>

            <?php
            $colors = array('black', 'red', 'green', 'blue', 'yellow', 'silver', 'white');
                if (isset($_POST['submit'])):
                    $cars = explode(', ', $_POST['cars']); ?>
                    <table>
                        <thead>
                        <tr>
                            <th>Car</th>
                            <th>Color</th>
                            <th>Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cars as $car): ?>
                            <tr>
                                <td> <?= htmlentities($car) ?></td>
                                <td> <?= htmlentities($colors[array_rand($colors)]) ?> </td>
                                <td> <?= rand(1, 5) ?> </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
        </main>
    </body>
</html>