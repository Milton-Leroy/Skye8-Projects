<?php

    include "config.php";

    $id = $_GET['Id'];

    mysqli_query($connect, "DELETE FROM tasks WHERE id = $id");

    header("location: ../index.php");