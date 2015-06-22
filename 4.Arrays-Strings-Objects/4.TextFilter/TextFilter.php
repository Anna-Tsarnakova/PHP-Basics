<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Text Filter</title>
        <style>
            label, input[type="submit"]{
                display: block;
            }
            textarea {
                width: 400px;
                height: 100px;
            }
            input, textarea {
                margin: 5px 0;
            }
            div {
                width: 400px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <label for="text">Text:</label>
            <textarea name="text" id="text" required="required"></textarea>
            <label for="banlist">Banlist:</label>
            <input type="text" name="banlist" id="banlist" required="required">
            <input type="submit" name="submit" id="submit" value="Text filter">
        </form>
        <div>
            <?php
                if (isset($_POST['submit'])):
                    $banned = explode(", ", $_POST['banlist']);
                    $output = $_POST['text'];
                    foreach ($banned as $word):
                        $replaceString = str_repeat('*', strlen($word));
                        $output = str_replace($word, $replaceString, $output);
                    endforeach;
                    echo htmlentities($output);
                endif;
            ?>
        </div>
    </body>
</html>