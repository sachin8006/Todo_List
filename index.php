<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-primary">
<form action="insert.php" method="post">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-5  " >
            <h3 class="text-center text-primary font-monospace">Todo list</h3>
            <div class="col-5 mt-1">
                <input type="text" name="list" class="form_control" >
            </div>
            <div class="col-1" >
                <button class="btn btn-outline-primary">Add</button>
            </div>
        </div>
    </div>
</form>

<?php
include "config.php";
$rawData = mysqli_query($con, "select * from tbltodo");
?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-3">
        <table class="table">
            <tbody>
                <?php
                while($row = mysqli_fetch_array($rawData)){
                ?>
                <tr>
                <div class="todo-item">
                <td>
                    <input type="checkbox" name="completed" value="<?php echo $row['id']; ?>">
                    <small>Created: <?php echo date("Y.m.d"); ?></small>
                    
                </td> 
                    <td><?php echo $row['list'] ?></td>
                    <td style="width: 10%;" ><a href="delete.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">delete</a></td>
                    <td style="width: 10%;" ><a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-success">update</a></td>
                </div>
                
                <?php
                }
                ?>

                
            </tbody>
        </table>
    </div>
</div>
</body>
</html>