<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Info</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <div class="login-container">
        <h1>Create New Info</h1>
        <form action="submit_student.php" method="post">
            <label for="rollno">Roll Number</label>
            <input type="text" id="rollno" name="rollno" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <input type="submit" id="submit" name="submit">
        </form>
    </div>
</body>
</html>
