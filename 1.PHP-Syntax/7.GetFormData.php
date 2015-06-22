<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Get Form Data</title>
        <style>
            input[type="text"], input[type="submit"]{
                display: block;
                margin: 5px;
            }

            form, p {
                margin: 20px auto;
                width: 500px;
            }
        </style>
    </head>

    <body>
        <form method="get" action="">
            <input type="text" name="name" id="name" placeholder="Name.." pattern="[A-Za-z]+" required="required"/>
            <input type="text" name="age" id="age" placeholder="Age.." pattern="[0-9]+" required="required"/>
            <input type="radio" name="gender" value="male" id="male" checked required="required"/>
            <label for="male">Male</label><br />
            <input type="radio" name="gender" value="female" id="female" required="required"/>
            <label for="female">Female</label>
            <input type="submit" name="submit" value="Submit" />
        </form>

        <?php
            if (isset($_GET["submit"])){
                $name = htmlentities($_GET['name']);
                $age = htmlentities($_GET['age']);
                $gender = $_GET['gender'];
                echo "<p>My name is $name. I'm $age years old. I am $gender.</p>";
            }
        ?>
    </body>
</html>