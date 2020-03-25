<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Frameworks - Opinion poll</title>
</head>
<body>
    <h2>PHP Frameworks Opinion Poll</h2>
    <p><b>What is your favorite PHP frameworks?</b></p>

    <form method="post" action="index.php">
        <p><input type="radio" name="vote" value="1" />Laravel
        <br /><input type="radio" name="vote" value="2" />Codeigniter
        <br /><input type="radio" name="vote" value="3" />Symfony
        <br /><input type="radio" name="vote" value="4" />CakePHP
		<br /><input type="radio" name="vote" value="5" />Yii
        </p>

        <p><input type="submit" name="submitbutton" value="OK" /></p>
    </form>

</body>
</html>
