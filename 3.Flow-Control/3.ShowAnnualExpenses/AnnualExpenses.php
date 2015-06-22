<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Show Annual Expenses</title>
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
                <label for="years">Enter number of years</label>
                <input type="text" name="years" id="years" required />
                <input type="submit" name="submit" id="submit" value="Show costs">
            </form>

            <?php
            if (isset($_POST['submit'])):
                $count = $_POST['years'];
                $year = date('Y');
                $months = array();
                for ($i = 1; $i <= 12 ; $i++) {
                    $months[] =  DateTime::createFromFormat('!m', $i);
                }
            ?>
                <table>
                    <thead>
                    <tr>
                        <th>Year</th>
                        <?php foreach ($months as $month): ?>
                            <th> <?= $month->format('F'); ?></th>
                        <?php endforeach; ?>
                        <th>Total:</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php for ($y = $year; $y > $year - $count; $y--): ?>
                        <tr>
                            <td><?= $y ?></td>
                            <?php $total = 0;
                            for ($m = 0; $m < count($months); $m++):
                                $expenses = rand(0, 999);
                                $total += $expenses; ?>
                                <td><?= $expenses ?></td>
                            <?php endfor; ?>
                            <td><?= $total ?></td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            <?php  endif; ?>
        </main>
    </body>
</html>