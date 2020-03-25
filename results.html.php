<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Frameworks Poll Results</title>
</head>
<body>
    <h2>Opinion Poll Results</h2>
    <p><b>What is your favorite PHP Frameworks?</b></p>

    <p><b><?php echo $choices_count[0]; ?></b> people have thus far taken part in this poll:</p>

    <table>
        <?php echo($table_rows); ?>
    </table>

</body>
</html>
