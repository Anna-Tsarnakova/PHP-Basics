<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" charset="utf-8" />
        <title>HTML Tags Counter</title>
        <style>
            form{
                margin-bottom: 15px;
            }
            label {
                display: block;
                margin: 10px 0;
            }
            .big-paragraph{
                font-size: 22px;
                font-weight: bold;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <main>

            <?php
            echo '<form action="HTMLTagsCounter.php" method="post">';
            echo '<label for="input">Enter HTML tags:</label>';
            echo '<input type="text" id="input" name="input" required="required"/>';
            echo '<input type="submit" name="submit" value="Submit" />';
            echo '</form>';
            $tags = ['a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
                'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
                'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
                'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
                'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
                'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
                'strong', 'css', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
                'tt', 'u', 'ul', 'var'];

            if (isset($_POST['submit'])) {
                if (!isset($_SESSION['count'])){
                    $_SESSION['count'] = 0;
                }
                if(in_array($_POST['input'], $tags)){
                    $_SESSION['count']++;
                    echo "<p class='big-paragraph'>Valid HTML tag!</p>";
                } else {
                    echo "<p class='big-paragraph'>Invalid HTML tag!</p>";
                }
                echo "<p class='big-paragraph'>Score: {$_SESSION['count']}</p>";
            }
            ?>
        </main>
    </body>
</html>