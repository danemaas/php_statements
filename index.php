<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_statements</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    main {
        min-height: 100vh;
        width: 100%;
        background-color: black;
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        padding-top: 5rem;
        padding-left: 10rem;
    }
    h2 {
        margin-bottom: 1.5rem;
    }

    table {
        border: 1px solid white;
        padding: 5px;
    }

    table > * {
        border: 1px solid white;
    }
</style>
<body>
    <main>
        <h2>PHP STATEMENTS EXERCISE - ANSWERS</h2>
        <ol>
        <li>
            <?php include "php_statements_1.php" ?>
        </li>
        <li>
            <?php include "php_statements_2.php" ?>
        </li>
        <li>
            <?php include "php_statements_3.php" ?>
        </li>
        <li>
            <?php include "php_statements_4.php" ?>
        </li>
        <li>
            <table>
                <?php include "php_statements_5.php" ?>
            </table>
        </li>
        </ol>
    </main>
</body>
</html>