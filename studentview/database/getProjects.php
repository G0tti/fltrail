<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 26.02.2018
 * Time: 10:09
 */
include_once 'config.php';

if (isset($_GET['project'])){
    $project = $_GET['project'];
if(isset($_GET['password'])){
    $password = $_GET['password'];
}else $password = "";
$userToken = $_GET['token'];


    if (!$db) {
        die('Could not connect: ' . mysqli_error($db));
    }

    mysqli_select_db($db,"fltrail");
    $sql="SELECT * FROM projects WHERE id = '".$project."'";
    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result);
    if (count($row) < 1){
        echo 'project missing';
    }else {
        if ($row['password'] === $password) {
            echo $userToken." ".$row['token'];
            //header("Location: ../pages/preferences.php?token=".$userToken."&projectToken=".$row['token']);
        } else {
            echo 'wrong password';
        }
    }
    mysqli_close($db);
}
?>