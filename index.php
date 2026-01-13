<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Sheets Form</title>
</head>
<body>
    <h2 style="text-align:center;">User Registration</h2>
    <form action="process.php" method="POST" style="max-width:300px; margin:auto;">
        <input type="text" name="first_name" placeholder="First Name" required style="width:100%; margin-bottom:10px;"><br>
        <input type="text" name="last_name" placeholder="Last Name" required style="width:100%; margin-bottom:10px;"><br>
        <input type="email" name="email" placeholder="Email" required style="width:100%; margin-bottom:10px;"><br>
        <input type="password" name="password" placeholder="Password" required style="width:100%; margin-bottom:10px;"><br>
        <button type="submit" style="width:100%;">Submit to Sheet</button>
    </form>
</body>
</html>