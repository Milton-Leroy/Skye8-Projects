<?php

require_once "config.php";
require_once "function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $task = htmlspecialchars($_POST["task"]);

    if(validateTask($task)){
        header("location: ../index.php");
        die();
    }

    if (task_exists($pdo, $task)) {
        header("location: ../index.php");
        die();
    }

    insertTask($pdo, $task);

    header("location: ../index.php");

    $pdo = null;
    $stmt = null;

    die();
} else {
    header('location: ../index.php');
    die();
}


