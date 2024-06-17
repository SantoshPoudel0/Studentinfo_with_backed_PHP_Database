<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $id = $_GET['id'];  // to receive the id of a value of studentlist
   $conn = mysqli_connect("localhost","root","","everest");    // for connecting the database 
   $sql = "DELETE FROM `students_table` WHERE id = '$id'";
   if($conn->query($sql) == TRUE){
    session_start();  /* putting the value of 1 page to another */
    $_SESSION['success_message'] = 'deleted Successfully';

    header('location: studentlist.php');
}
else{ echo'Error';
}


    ?>
</body>
</html>