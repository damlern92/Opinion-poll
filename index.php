<?php


require 'opinion_poll_model.php';
$model = new Opinion_poll_model();

if (count($_POST) == 1) {
    echo "<script>alert('You did not vote!');</script>";
}

if (count($_POST) > 1) {

    // Adding $option and $ts
    $ts = date("Y-m-d H:i:s");
    $option = $_POST['vote'][0];
    $sql_stmt = "INSERT INTO php_frameworks (`choice`,`ts`) VALUES ($option,'$ts')";
    $model->insert($sql_stmt);

    // Select result from php_frameworks
    $sql_stmt = "SELECT COUNT(choice) FROM php_frameworks";
    $choices_count = $model->select($sql_stmt);

    $libraries = array("", "Laravel", "Codeigniter", "Symfony", "CakePHP","CakePHP","Yii");
    $table_rows = '';

    for ($i = 1; $i < 5; $i++) {
        $sql_stmt = "SELECT COUNT(choice) FROM php_frameworks WHERE choice = $i";
        $result = $model->select($sql_stmt);
        $table_rows .= "<tr><td>" . $libraries[$i] . " Got:</td><td><b>" . $result[0] . "</b> votes</td></tr>";

    }

    require 'results.html.php';

    exit;

}

require 'opinion.html.php';

?>
