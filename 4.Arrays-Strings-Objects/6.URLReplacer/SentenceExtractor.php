<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL Replacer</title>
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
            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
        <div>
            <?php
            if (isset($_POST['submit'])):
                $text = $_POST['text'];
                $aTagsCount = preg_match_all('/<a\s*href\s*=\s*([^>]+)>(.+?)<\/a>/', $text, $aTags);

                for ($i = 0; $i < count($aTags[0]); $i++) :
                    $url = substr($aTags[1][$i], 1, strlen($aTags[1][$i]) - 2);
                    $textBetweenATag = $aTags[2][$i];
                    $replacement = "[URL=" . $url . "]" . $textBetweenATag. "[/URL]";
                    $text = str_replace($aTags[0][$i], $replacement, $text);
                endfor;

                echo htmlentities($text);
            endif;
            ?>
        </div>
    </body>
</html>