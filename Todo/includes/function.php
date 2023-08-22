<?php

    function validateTask($task) {
         if(empty($task) && trim($task) == ''){
            return true;
         }else{
            return false;
         }
    }

    function task_exists(object $pdo,string $task) {

        $query = "SELECT * FROM tasks WHERE tasks = :task;";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(':task',$task);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function insertTask(object $pdo, string $task) {
        $query = "INSERT INTO `tasks`(`tasks`) VALUES (:task);";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(':task',$task);
        $stmt->execute();
    }

    function get_all_tasks(object $pdo){
        $query = "SELECT * FROM tasks;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    function display_all_tasks($results) {
        foreach ($results as $result) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($result['tasks']) . "</td>";
            echo "<td style='width: 10%;'><a href='includes/update_delete.php?Id=" . $result['id'] . "'>delete</a></td>";
            echo "<td style='width: 10%;'><a href='includes/update.php?Id=" . $result['id'] . "'>Update</a></td>";
            echo "</tr>";
        }
    }

    function delete_task($pdo, $id) {
        $query = "DELETE FROM tasks WHERE id = $id;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    function update_task(object $pdo, string $update, $id){
        $query = "UPDATE `tasks` SET `tasks`= '$update' WHERE `id` = '$id';";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    function get_task_tobe_updated(object $pdo, string $id){
        $query = "SELECT * FROM tasks WHERE id = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }