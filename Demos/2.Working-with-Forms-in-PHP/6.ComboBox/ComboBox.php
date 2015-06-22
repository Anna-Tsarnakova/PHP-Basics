<?php
session_start();
include('Countries.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Combo Box</title>
        <script></script>
    </head>
    <body>
        <form action="" method="get" id="form">
            <select name="continents" id="selectBox" autofocus required onchange="document.getElementById('form').submit()" >
                <option value=""  disabled></option>
                <option value="Europe">Europe</option>
                <option value="Asia">Asia</option>
                <option value="North America">North America</option>
                <option value="South America">South America</option>
                <option value="Australia and Oceania">Australia and Oceania</option>
                <option value="Africa">Africa</option>
            </select>
            <select name="countries" id="country" onchange="document.getElementById('form').submit()">
                <option value=""  disabled></option>
                <?php
                if (isset($_GET['continents'])) {
                    echo $_GET['continent'];
                    $continent = $_GET['continents'];
                    $_SESSION['continents'] = $continent;
                    $countries = $countryList[$continent];
                    foreach ($countries as $value) {
                        echo "<option value='$value'>$value</option>";
                    }
                }
                ?>
            </select>
        </form>
    </body>
</html>
