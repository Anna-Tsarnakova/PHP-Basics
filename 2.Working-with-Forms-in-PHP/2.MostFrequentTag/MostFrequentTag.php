<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Most Frequent Tag</title>
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
            echo '<form action="MostFrequentTag.php" method="post">';
            echo '<label for="input">Enter Tags:</label>';
            echo '<input type="text" id="input" name="input" required="required"/>';
            echo '<input type="submit" name="submit" value="Submit" />';
            echo '</form>';
            if (isset($_POST['submit'])) {
                $tags = explode(', ', htmlentities($_POST['input']));
                $counts = array_count_values($tags);
                $mostFrequent = array_search(max($counts), $counts);
                arsort($counts);
                foreach ($counts as $key=>$value) {
                    echo "$key : $value times<br />\n";
                }
            echo "<p>Most Frequent Tag is: $mostFrequent</p>";
            }
            ?>
        </main>
    </body>
</html>