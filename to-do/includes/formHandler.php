<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $task = htmlspecialchars($_POST["task"]);

        if(empty($task) || trim($task) == ''){
            header("location: ../index.php");
            die(); 
        }

       include "config.php";

        $data = mysqli_query($connect, "SELECT * FROM tasks WHERE tasks= '$task' ");
        $exists = mysqli_fetch_array($data);

        if($tasks !== $exists['tasks']){
            header("location: ../index.php");
            die(); 
        }

        mysqli_query($connect, "INSERT INTO `tasks`(`tasks`) VALUES ('$task')");

        header("location: ../index.php");

    } 
    else{
        header("location: ../index.php");
    }