<?php

    include "config.php";

    $id = $_POST['id'];
    $update = $_POST['task'];

    mysqli_query($connect, "UPDATE `tasks` SET `tasks`= '$update' WHERE id = $id");

    header("location: ../index.php");