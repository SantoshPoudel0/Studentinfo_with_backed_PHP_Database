<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable Info</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <!-- To edit the previous code and to edit -->
    <?php
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","everest");
        $rows = $conn -> query("select * from `students_table` where id = '$id' ");
        $data = mysqli_fetch_object($rows);

    ?>
    <div class="login-container">
        <h1>Editable Info</h1>
        <form action="" method="post">   <!-- if no name in action then it reload  -->
            <label for="rollno">Roll Number</label>
            <input type="text" id="rollno" name="rollno" value="<?php echo $data->roll;?>" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $data->name;?>" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $data->phone;?>" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $data->address;?>" required>

            <input type="submit" id="update" name="update" value="update" >
        </form>
        <?php

        // to submit the code . here is the code 

        if(isset($_POST['update'])){
            $n = $_POST['name'];
            $r = $_POST['rollno'];
            $p = $_POST['phone'];
            $a = $_POST['address'];
            $conn =mysqli_connect('localhost','root','','everest');
            // inserting the data into database as well as browser
            $sql = "UPDATE students_table SET name='$n',roll='$r',phone='$p',address='$a'where id='$id'";
            if($conn->query($sql) == TRUE){
                session_start();  /* putting the value of 1 page to another */
                $_SESSION['success_message'] = 'Updated from editing';
            
                header('location: studentlist.php');
        }
        else{ echo'Error';
        }
    }
    
        ?>

    </div>
</body>
</html>
