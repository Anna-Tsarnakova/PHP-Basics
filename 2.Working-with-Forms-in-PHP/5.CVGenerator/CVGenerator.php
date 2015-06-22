<html>
    <head>
        <title>Generated CV</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>CV</h1>
        <?php
        $name_matcher = "/^[a-zA-Z]{2,20}$/";
        $company_matcher = "/^[a-zA-Z0-9]{2,20}$/";
        $email_matcher = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z0-9]+$/";
        $phone_matcher = "/^[0-9+\\-\\s]+$/";

        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $phone = $_POST['tel'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['bdate'];
        $nationality = $_POST['nationality'];
        $companyName = $_POST['company'];
        $from = $_POST['work-from'];
        $to = $_POST['work-to'];
        $programmingLangs = $_POST['programming-lang'];
        $levels = $_POST['levels'];
        $languages = $_POST['languages'];
        $comprehension = $_POST['comprehension'];
        $reading = $_POST['reading'];
        $writing = $_POST['writing'];

        if (!preg_match($name_matcher, $firstName)) {
            echo "Invalid first name! Only letters between 2 and 20 symbols are allowed for First Name.";
            return;
        }
        if (!preg_match($name_matcher, $lastName)) {
            echo "Invalid last name! Only letters between 2 and 20 symbols are allowed for Last Name.";
            return;
        }

        if (!preg_match($email_matcher, $email)) {
            echo "Invalid email! Only letters, numbers, one '@' and one '.' are allowed for Email.";
            return;
        }

        if (!preg_match($phone_matcher, $phone)) {
            echo "Invalid phone number! Only numbers, +, - and space are allowed for Phone Number.";
            return;
        }

        if (!preg_match($company_matcher, $companyName)) {
            echo "Invalid company name! Only letters and numbers between 2 and 20 symbols are allowed for Company Name.";
            return;
        }


        // Personal Information
        echo '<table>' . "\n" .
            '<tr><th colspan="2">Personal Information</th></tr>' . "\n" .
            '<tr><td>First Name</td>' . "<td>$firstName</td></tr>" . "\n" .
            '<tr><td>Last Name</td>' . "<td>$lastName</td></tr>" . "\n" .
            '<tr><td>Email</td>' . "<td>$email</td></tr>" . "\n" .
            '<tr><td>Phone Number</td>' . "<td>$phone</td></tr>" . "\n" .
            '<tr><td>Gender</td>' . "<td>$gender</td></tr>" . "\n" .
            '<tr><td>Birth Date</td>' . "<td>$birthDate</td></tr>" . "\n" .
            '<tr><td>Nationality</td>' . "<td>$nationality</td></tr>" . "\n" .
            '</table>' . "\n";

        // Last Work Position
        echo '<table>' . "\n" .
            '<tr><th colspan="2">Last Work Position</th></tr>' . "\n" .
            '<tr><td>Company Name</td>' . "<td>$companyName</td></tr>" . "\n" .
            '<tr><td>From</td>' . "<td>$from</td></tr>" . "\n" .
            '<tr><td>To</td>' . "<td>$to</td></tr>" . "\n" .
            '</table>' . "\n";

        // Computer Skills
        echo '<table>' . "\n" .
            '<tr><th colspan="2">Computer Skills</th></tr>' . "\n" .
            '<tr><td>Programming Languages</td>' . "<td>" . "\n";

        echo '<table>' . "\n" .
            '<tr><th>Language</th><th>Skill Level</th></tr>' . "\n";

        for ($index = 0; $index < count($programmingLangs); $index++) {
            $programmingLang = htmlspecialchars($programmingLangs[$index]);
            $level = htmlspecialchars($levels[$index]);
            echo "<tr><td>$programmingLang</td><td>$level</td></tr>" . "\n";
        }

        echo '</table>' . "\n" .
            '</td></tr>' . "\n" .
            '</table>' . "\n";

        // Other Skills
        echo '<table>' . "\n" .
            '<tr><th colspan="2">Other Skills</th></tr>' . "\n" .
            '<tr><td>Languages</td>' . "<td>" . "\n";

        echo '<table>' . "\n" .
            '<tr><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>' . "\n";

        for ($index = 0; $index < count($languages); $index++) {
            $language = htmlspecialchars($languages[$index]);
            $currentComprehension = htmlspecialchars($comprehension[$index]);
            $currentReading = htmlspecialchars($reading[$index]);
            $currentWriting = htmlspecialchars($writing[$index]);
            echo "<tr><td>$language</td><td>$currentComprehension</td>" .
                "<td>$currentReading</td><td>$currentWriting</td></tr>" . "\n";
        }

        echo '</table>' . "\n" .
            '</td></tr>' . "\n";

        //Driver's license
        if(isset($_POST['driver-license'])){
            $license = implode(', ', $_POST['driver-license']);
            echo '<tr><td>Driver\'s license</td>' . "<td>$license</td></tr>" . "\n" .
                '</table>' . "\n";
        } else{
            echo '<tr><td>Driver\'s license</td>' . "<td> - </td></tr>" . "\n" .
                '</table>' . "\n";
        }

        ?>
    </body>
</html>