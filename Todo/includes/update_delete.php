<?php
    
    require_once "./config.php";
    require_once "./function.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $update = $_POST['task'];

        update_task($pdo, $update, $id);

        Header("location: ../index.php");
        $pdo = null;
        $stmt = null;
        die();
    }

    
 
    $id = $_GET["Id"];
    delete_task($pdo, $id);
    Header("location: ../index.php");
