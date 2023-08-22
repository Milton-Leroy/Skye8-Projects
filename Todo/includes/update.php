<?php 
    require_once 'function.php';
    require_once 'config.php';


     $id = $_GET['Id'];
    $task = get_task_tobe_updated($pdo, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form action="update_delete.php" method="post">
        <div class="container">
                <div class="row justify-content-center m-auto col-md-8 py-3 mt-5 shadow bg-white">
                    <h3 class="text-center text-primary">Update</h3>
                    <div class="col-8 mb-3">
                        <input type="text" value="<?php echo $task['tasks'] ?>" name="task" class="form-control">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-primary">Update</button>
                        <input type="hidden" value="<?php echo $task['id'] ?>" name="id" class="form-control">
                    </div>
                </div>
        </div>   
    </form>
    
</body>
</html>