<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Word Mapper</title>
        <style>
            input {
                display: block;
            }
            table, tr, td {
                border: 1px solid black;
            }
            td {
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <form action="" method="post">
            <textarea name="input" id="input"></textarea>
            <input type="submit" name="submit" id="submit" value="Count words" />
        </form>

        <?php if (isset($_POST['submit']) && isset($_POST['input'])):

            preg_match_all("/\\w+/", strtolower($_POST['input']), $words);

            $map = array();
            foreach ($words[0] as $word) {
                if (!array_key_exists($word, $map)) {
                    $map[$word] = 1;
                } else {
                    $map[$word]++;
                }
            }

            ?>

            <table>
                <?php foreach($map as $key => $value): ?>
                    <tr>
                        <td><?= htmlentities($key) ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </body>
</html>


