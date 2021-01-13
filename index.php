<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>php todo</title>
</head>
<body>

    <header>
        <h1>My daily todolist</h1>
        <h4>A php project</h4>

            <!-- database link -->
    <?php
        // $user = 'root';
        // $password = 'root';
        // $db = 'todolist_db';
        // $host = 'localhost';
        // $port = 3306;

        // $link = mysql_connect("$host:$port", $user, $password );
        // $db_selected = mysql_select_db($db, $link);
    ?>

    <!-- introducing the input form -->

    </header>
    <section>
        <form action="index.php" method="post" class = "input_form">
            <input type="text" name ="task_todo" class = "task_todo">
            <button type="submit" name = "submit" id = "add_button" class = "add_button">Add Task</button>
            
        </form>
    </section>
</body>
</html>