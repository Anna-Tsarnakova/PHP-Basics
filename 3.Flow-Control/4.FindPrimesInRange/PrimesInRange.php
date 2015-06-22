<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Find Primes In Range</title>
        <style>
            main {
                padding: 20px;
            }

            div {
                width: 800px;
                padding-top: 20px;
            }

        </style>
    </head>

    <body>
        <main>
            <form action="" method="post">
                <label for="start">Start Index: </label>
                <input type="text" name="start" id="start" required />
                <label for="end">End Index: </label>
                <input type="text" name="end" id="end" required />
                <input type="submit" name="submit" id="submit" value="Submit" />
            </form>
                <?php
                    function isPrime($num)
                    {
                        if ($num < 2) {
                            return false;
                        } else {
                            for ($divisor = 2; $divisor <= (int)sqrt($num); $divisor++) {
                                if ($num % $divisor == 0) {
                                    return false;
                                }
                            }
                        }
                        return true;
                    }

                    if (isset($_POST['submit'])
                        && $_POST['start'] != ''
                        && $_POST['end'] != ''
                        && is_numeric($_POST['start'])
                        && is_numeric($_POST['end'])):

                        $start = $_POST['start'];
                        $end = $_POST['end'];

                        for ($i = $start; $i <= $end; $i++):
                            $numbers[] = isPrime($i) ? "<strong>$i</strong>" : $i;
                        endfor; ?>
                       <div> <?= implode(', ', $numbers); ?></div>
                     <?php endif;  ?>
        </main>
    </body>
</html>