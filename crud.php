<?php
include_once('db.php');

if(isset($_POST['save'])){

    $name = $mySQLiconn -> real_escape_string($_POST['name']);
    $last_name =$mySQLiconn ->  real_escape_string($_POST['last_name']);

    $SQL = $mySQLiconn->query("INSERT INTO data(name, last_name) VALUES ('$name', '$last_name')");

    if(!$SQL){
        echo $mySQLiconn -> error;
    }
}


if(isset($_GET['del'])){
    $id = $_GET['del'];
    $SQL = $mySQLiconn->query("DELETE FROM data WHERE id= '$id'");
    header('Location: index.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $SQL = $mySQLiconn->query("SELECT * FROM data WHERE id= '$id'");
    $getRow = $SQL->fetch_array();
}

if(isset($_POST['update'])){
    $id = $_GET['edit'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $SQL = $mySQLiconn->query("UPDATE data  SET name = '$name', last_name = '$last_name' WHERE id='$id'" );
    header('Location: index.php');
}

?>