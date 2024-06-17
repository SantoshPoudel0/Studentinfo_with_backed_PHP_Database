<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="studentlist.css">

        <script>  
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('studentForm');
    
    form.addEventListener('submit', (event) => {
        const rollno = document.getElementById('rollno').value;
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;

        if (!rollno || !name || !phone || !address) {
            alert('Please fill out all fields.');
            event.preventDefault();
        }
    });
});

</script> 
    
</head>
<body>
 <h1>Students list </h1>
 <!-- by showing the database successfully in the next page -->
 <?php 
 session_start();
 if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message']; 
    // if we need popup alert then we used javascript code inside it
    
    unset($_SESSION['success_message']);
 }
 ?>

     <a href="create_student.php"> <button>Add button</button></a>
    <br><br>
    
    <table cellspacing="0" border="1">
        
        <thead>
            <th>S.N</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
</thead>
<tbody>

    <!-- it thas 4 argument to the database while data fetching -->
<!--      
     1. server name -- local host
     2. username -- Root
     3. password-- 
     4. database name-- everest  -->


     <?php
     
    // for connecting the database 
    $conn = mysqli_connect("localhost","root","","everest");
    // for fetching data
    $rows = $conn -> query("select * from `students_table` ");
    // fetching data as array using loop
    $x=0;
while($data = mysqli_fetch_array($rows))
{  

    ?> 
    <tr>
        <td><?php echo ++$x; ?></td>
        </td><td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["roll"]; ?>
        <td><?php echo $data["phone"]; ?></td>
        <td><?php echo $data["address"]; ?></td>
       <td>
        <a href="edit_student.php? id=<?php echo $data['id']; ?>"><button>Edit</button></a>
        <a href="delete_student.php? id=<?php echo $data['id']; ?>"><button>delete</button></a>
       </td>   
</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>