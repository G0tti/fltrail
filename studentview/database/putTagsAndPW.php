<?php
/**
 * Created by IntelliJ IDEA.
 * User: dehne
 * Date: 23.02.2018
 * Time: 12:39
 */
include_once 'config.php';



// get the user data from the GET

// write it to the db

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $name = $_GET['project'];
    $password = $_GET['password'];
    $activ = $_GET['activ'];
    $_POST = json_decode(file_get_contents('php://input'), true);
    $tags = $_POST;

    var_dump($tags);
    $db->query("use fltrail;");

    mysqli_select_db($db, "fltrail");
// is user does not exist create
    $db->query("INSERT INTO `projects`(`id`, `password`, `activ`) VALUES ('" . $name . "','" . $password . "', '".$activ."');");
    foreach ($tags as $tag) {
        $db->query("INSERT INTO `tags`(`projectId`, `tag`) VALUES ('" . $name . "','" . $tag . "');");
    }
    $db->commit();
}
die();
?>