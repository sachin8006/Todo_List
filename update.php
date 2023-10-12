<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
$id = $_GET["id"];
include "config.php";
$Rdata = mysqli_query($con, "select * from tbltodo where id = $id");
$data = mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
<form action="update1.php" method="post">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-5" >
            <h3 class="text-center text-primary font-monospace">Update</h3>
            <div class="col-5 mt-1">
                <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form_control" >
            </div>
            <div class="col-1" >
                <button class="btn btn-outline-primary">Update</button>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </div>
        </div>
    </div>
</form>
</body>
</html>