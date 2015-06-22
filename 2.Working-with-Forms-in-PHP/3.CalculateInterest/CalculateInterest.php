<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Calculate Interest</title>
        <style>
            label[for="amount"], label[for="interest"]{
                display: block;
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
        <main>
            <form action="CalculateInterest.php" method="post">
                <label for="amount">Enter Amount <input type="text" name="amount" id="amount" pattern="[0-9]+\.?[0-9]+" required="required"> </label>

                <label for="usd"><input type="radio" name="currency" id="usd" value="usd" required="required">USD</label>
                <label for="eur"><input type="radio" name="currency" id="eur" value="eur">EUR</label>
                <label for="bgn"><input type="radio" name="currency" id="bgn" value="bgn">BGN</label>

                <label for="interest">Compound Interest Amount <input type="text" name="interest" id="interest" pattern="[0-9]+\.?[0-9]+" required="required" /></label>
                <select name="period" required="required">
                    <option value="6">6 Months</option>
                    <option value="12">1 Year</option>
                    <option value="24">2 Years</option>
                    <option value="60">5 Years</option>
                </select>
                <input type="submit" name="submit" value="Calculate">
                <?php
                    if (isset($_POST["submit"])) {
                        $amount = htmlentities($_POST["amount"]);
                        $currency = $_POST["currency"];
                        $monthInterest = htmlentities($_POST["interest"]) / 12;
                        $period = $_POST["period"];
                        $newAmount = $amount * pow(1 + $monthInterest / 100, $period);
                        $result = number_format($newAmount, 2, '.', '');

                        switch($currency){
                            case "usd":$currency = "$";
                                echo  $currency . ' ' . $result;
                                break;
                            case "eur":$currency = "€";
                                echo  $currency . ' ' . $result;
                                break;
                            case "bgn":$currency = "лв.";
                                echo $result . ' ' . $currency;
                                break;
                            default: break;
                        }
                    }
                ?>
            </form>
        </main>
    </body>
</html>