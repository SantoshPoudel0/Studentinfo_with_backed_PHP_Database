<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    if(isset($_POST['submit'])){
        $n = $_POST['name'];
        $r = $_POST['rollno'];
        $p = $_POST['phone'];
        $a = $_POST['address'];
        $conn =mysqli_connect('localhost','root','','everest');
        // inserting the data into database as well as browser
        $sql = "INSERT INTO `students_table` values('','$n','$r','$p','$a')";
        if($conn->query($sql) == TRUE){
            session_start();  /* putting the value of 1 page to another */
            $_SESSION['success_message'] = 'Adding Successfully';
        
            header('location: studentlist.php');
    }
    else{ echo'Error';
    }
}
?>

</body>
</html>