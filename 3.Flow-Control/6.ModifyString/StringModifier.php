<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modify String</title>
    </head>

    <body>
        <form action="" method="get">
            <input type="text" id="input" name="input" required="required" />
            <input type="radio" name="operation" value="palindrome" id="palindrome">
            <label for="palindrome">Check Palindrome</label>
            <input type="radio" name="operation" value="reverse" id="reverse" required="required" />
            <label for="reverse">Reverse String</label>
            <input type="radio" name="operation" id="split" value="split" />
            <label for="split">Split</label>
            <input type="radio" name="operation" id="hash" value="hash" />
            <label for="hash">Hash String</label>
            <input type="radio" name="operation" id="shuffle" value="shuffle" />
            <label for="shuffle">Shuffle String</label>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        if (isset($_GET['input']) && isset($_GET['operation'])) {
            $input = $_GET['input'];
            $operation = htmlspecialchars($_GET['operation']);

            switch ($operation) {
                case 'palindrome':
                    checkPalindrome($input);
                    break;
                case 'reverse':
                    echo strrev($input);
                    break;
                case 'split':
                    $chars = explode(" ", $input);
                    $chars = implode($chars);
                    for ($index = 0; $index < strlen($chars); $index++) {
                        echo $chars[$index] . ' ';
                    }
                    break;
                case 'hash':
                    echo crypt($input, $salt = null);
                    break;
                case 'shuffle':
                    echo str_shuffle($input);
                    break;
                default:
                    echo 'Invalid operation!';
                    break;
            }
        }
        ?>

        <?php
        function checkPalindrome($input) {
            if (strlen($input) == 1) {
                echo $input . ' is a palindrome!';
                return;
            } else {
                for ($index = 0; $index < intval(strlen($input) / 2); $index++) {
                    if ($input[$index] != $input[strlen($input) - 1 - $index]) {
                        echo $input . ' is not a palindrome!';
                        return;
                    }
                }
                echo $input . ' is a palindrome!';
            }
        }
        ?>
    </body>
</html>



