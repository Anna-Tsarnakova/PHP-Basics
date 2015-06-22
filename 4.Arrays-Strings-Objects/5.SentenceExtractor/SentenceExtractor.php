<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sentence Extractor</title>
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
            <label for="word">Word:</label>
            <input type="text" name="word" id="word" required="required">
            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
        <div>
            <?php
            if (isset($_POST['submit'])):
                $word = $_POST['word'];
                $pattern = "/\\b[^.!?]*\\b" . $word . "\\b[^.!?]*[?!.]/";
                preg_match_all($pattern, $_POST['text'], $matches);

                if (count($matches) > 0):
                    foreach ($matches[0] as $sentence):
                        echo htmlentities($sentence) . '<br />';
                    endforeach;
                endif;
            endif;
            ?>
        </div>
    </body>
</html>