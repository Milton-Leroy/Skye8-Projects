<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
</head>
<body class="bg-primary">
    <form action="includes/formHandler.php" method="post">
        <div class="container">
                <div class="row justify-content-center m-auto col-md-8 py-3 mt-5 shadow bg-white">
                    <h3 class="text-center text-primary">TO DO</h3>
                    <div class="col-8 mb-3">
                        <input type="text" name="task" class="form-control" placeholder="Add a new task" required>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-primary">Add</button>
                    </div>
                </div>
        </div>   
    </form>

    <?php
         include "includes/config.php";
         $data = mysqli_query($connect, "SELECT * FROM tasks");
    ?>

    <div class="container">
        
        <div class="col-12 bg-white m-auto mt-3">

            <table  class="table">
                <tbody>

                    <?php
                       while($row = mysqli_fetch_array($data)) {
                    ?>

                    <tr>
                        <td><?php echo $row['tasks'] ?></td>
                        <td style="width: 10%;"><a href="includes/delete.php? Id= <?php echo $row['id'] ?>" >delete</a></td>
                        <td style="width: 10%;"><a href="includes/update.php?  Id= <?php echo $row['id'] ?>">Update</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html>