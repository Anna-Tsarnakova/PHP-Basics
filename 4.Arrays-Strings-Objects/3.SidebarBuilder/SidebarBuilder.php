<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sidebar Builder</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            form{
                width: 320px;
            }
            input[type="text"]{
                width: 70%;
                margin-bottom: 10px;
            }
            label {
                display: inline-block;
            }
            aside {
                border: 1px solid #3e5559;
                border-radius: 20px;
                background: linear-gradient(lightblue 50%, #68b6ba 100%);
                width: 140px;
                margin-bottom: 10px;
                padding: 5px;
            }
            aside a {
                color: black;
            }
            h1 {
                margin-bottom: 0px;
                margin-left: 5px;
            }
            hr {
                margin: 3px;
            }
            li {
                list-style: circle;
                padding-bottom: 3px;

            }
        </style>
    </head>
    <body>
        <form action="" method="POST" >
            <label for="categories">Categories: </label>
            <input type="text" name="categories" id="categories" required />
            <label for="tags">Tags: </label>
            <input type="text" name="tags" id="tags" required>
            <label for="months">Months: </label>
            <input type="text" name="months" id="months" required>
            <input type="submit" name="submit" value="Generate">
        </form>
        <br>
        <?php
        if (isset($_POST['submit'])):
            $categories = explode(', ', $_POST['categories']);
            $tags = explode(', ', $_POST['tags']);
            $months = explode(', ', $_POST['months']);
            ?>
            <aside>
                <h1>Categories</h1>
                <hr />
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
            <aside>
                <h1>Tags</h1>
                <hr />
                <ul>
                    <?php foreach ($tags as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
            <aside>
                <h1>Months</h1>
                <hr />
                <ul>
                    <?php foreach ($months as $month): ?>
                        <li><a href="#"><?= $month ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        <?php endif; ?>
    </body>
</html>