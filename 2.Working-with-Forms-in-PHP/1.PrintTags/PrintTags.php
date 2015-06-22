<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Print Tags</title>
        <style>
            form{
                margin-bottom: 15px;
            }
            label {
                display: block;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <main>
            <?php
                echo '<form action="PrintTags.php" method="post">';
                echo '<label for="input">Enter Tags:</label>';
                echo '<input type="text" id="input" name="input" required="required"/>';
                echo '<input type="submit" name="submit" value="Submit" />';
                echo '</form>';
                if (isset($_POST['submit'])) {
                    $tags = explode(", ", htmlentities($_POST['input']));
                    for ($i = 0; $i < count($tags); $i++) {
                        echo "$i : $tags[$i] <br />";
                    }
                }
            ?>
        </main>
    </body>
</html>