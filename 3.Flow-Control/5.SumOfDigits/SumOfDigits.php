<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sum of Digits</title>
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
                <label for="input">Input string</label>
                <input type="text" id="input" name="input" required />
                <input type="submit" name="submit" id="submit" value="Submit" />
            </form>

            <?php
            if (isset($_POST['submit'])):
                $numbers = explode(', ', $_POST['input']); ?>
                <table>
                    <tbody>
                    <?php foreach ($numbers as $number):
                        $sum = 0;
                        ?>
                        <tr>
                            <td> <?= $number ?></td>
                            <td>
                                <?php if (is_numeric($number)):
                                    while ($number > 0):
                                        $sum += $number % 10;
                                        $number /= 10;
                                    endwhile;
                                    echo $sum;
                                else:
                                    echo "I cannot sum that";
                                endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </main>
    </body>
</html>