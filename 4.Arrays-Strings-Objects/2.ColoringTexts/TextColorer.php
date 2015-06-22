<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Coloring Texts</title>
        <style>
            input {
                display: block;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <textarea name="input" id="input"></textarea>
            <input type="submit" name="submit" id="submit" value="Color Text" />
        </form>
        <?php
        if (isset($_POST['input'])) {
            preg_match_all("/\\S/", $_POST['input'], $symbols);
            foreach ($symbols[0] as $symbol) {
                $color = ord($symbol) % 2 == 0 ? "red" : "blue";
                echo "<span style='color: $color'> $symbol </span>";
            }
        }
        ?>
    </body>
</html>