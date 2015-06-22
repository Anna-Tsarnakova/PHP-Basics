<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Information Table</title>
        <style>
            table{
                margin: 10px auto;
            }
            table, tr, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th {
                background-color: orange;
                text-align: left;
                padding: 5px;
            }
            td {
                text-align: right;
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <?php
        function person($name, $phone, $age, $address) {
            echo "<table>";
            echo "<tr><th>Name</th><td>$name</td></tr>";
            echo "<tr><th>Phone number</th><td>$phone</td></tr>";
            echo "<tr><th>Age</th><td>$age</td></tr>";
            echo "<tr><th>Address</th><td>$address</td></tr>";
            echo "</table><br/>";
        }

        person("Gosho", "0882-321-423", 24, "Hadji Dimitar");
        person("Pesho", "0884-888-888", 67, "Suhata Reka");
        ?>
    </body>
</html>