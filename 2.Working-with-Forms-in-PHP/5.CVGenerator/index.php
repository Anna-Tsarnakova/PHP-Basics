<!DOCTYPE html>
<html>
    <head lang="en">
        <title>CV Generator</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="js/CVGenerator.js" defer></script>
    </head>
    <body>
        <main id="container">
            <form action="CVGenerator.php" method="post">
                <fieldset id="personal-info">
                    <legend>Personal Information</legend>
                    <input class="block" type="text" name="first-name" placeholder="First Name" title="Enter between 2 and 20 latin letters!" required="required" />
                    <input class="block" type="text" name="last-name" placeholder="Last Name" title="Enter between 2 and 20 latin letters!" required="required" />
                    <input class="block" type="email" name="email" placeholder="Email" title="Enter a valid email!" required="required" />
                    <input class="block" type="tel" name="tel" placeholder="Phone Number" title="Enter only digits, +, - and space!" required="required" />
                    <div id="gender">
                        <label for="Female">Female</label>
                        <input type="radio" name="gender" id="Female" value="Female" required="required"/>
                        <label for="Male">Male</label>
                        <input type="radio" name="gender" id="Male" value="Male" />
                    </div>
                    <label for="bdate">Birth Date</label>
                    <input class="block" type="date" name="bdate" placeholder="dd/mm/yyyy" title="Enter a valid date!" required="required" />

                    <label for="nationality">Nationality</label>
                    <select class="block" name="nationality" id="nationality" required ="required">
                        <option value="Bulgarian">Bulgarian</option>
                        <option value="English">English</option>
                        <option value="German">German</option>
                        <option value="Russian">Russian</option>
                    </select>
                </fieldset>

                <fieldset id="work-position">
                    <legend>Last Work Position</legend>
                    <div>
                        <label for="company">Company Name</label>
                        <input type="text" name="company" id="company" title="Enter letters and numbers between 2 and 20 symbols!" required="required"/>
                    </div>
                    <div>
                        <label for="work-from">From</label>
                        <input type="date" name="work-from" id="work-from" title="Enter a valid date!" placeholder="dd/mm/yyyy" required="required" />
                    </div>
                    <div>
                        <label for="work-to">To</label>
                        <input type="date" name="work-to" id="work-to" title="Enter a valid date!" placeholder="dd/mm/yyyy" required="required" />
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Computer Skills</legend>
                    <label for="programming-lang">Programming Languages</label>
                    <div id="parent-programming">
                        <input type="text" name="programming-lang[]" id="programming-lang" required="required">
                        <select name="levels[]">
                            <option value="Beginner">Beginner</option>
                            <option value="Programmer">Programmer</option>
                            <option value="Ninja">Ninja</option>
                        </select>
                    </div>
                    <button type="button" onclick="removeProgrammingLang()">Remove Language</button>
                    <button type="button" onclick="addProgrammingLang()">Add Language</button>
                </fieldset>

                <fieldset>
                    <legend>Other Skills</legend>
                    <label for="languages">Languages</label>
                    <div id="parent-languages">
                        <input type="text" name="languages[]" id="languages" required="required">
                        <select name="comprehension[]" required="required">
                            <option value="" selected>-Comprehension-</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Pre-Intermediate">Pre-Intermediate</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Upper-Intermediate">Upper-Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <select name="reading[]" required="required">
                            <option value="" selected>-Reading-</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Pre-Intermediate">Pre-Intermediate</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Upper-Intermediate">Upper-Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <select name="writing[]" required="required">
                            <option value="" selected>-Writing-</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Pre-Intermediate">Pre-Intermediate</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Upper-Intermediate">Upper-Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>

                    <button type="button" onclick="removeLang()">Remove Language</button>
                    <button type="button" onclick="addLang()">Add Language</button>

                    <div id="driver-license">
                        <label>Driver's License</label>
                        <div>
                            <label for="B">B</label>
                            <input type="checkbox" name="driver-license[]" id="B" value="B">
                            <label for="A">A</label>
                            <input type="checkbox" name="driver-license[]" id="A" value="A">
                            <label for="C">C</label>
                            <input type="checkbox" name="driver-license[]" id="C" value="C">
                        </div>
                    </div>
                </fieldset>
                <input type="submit" value="Generate CV" />
            </form>
        </main>
    </body>
</html>