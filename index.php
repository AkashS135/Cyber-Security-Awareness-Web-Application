<?php

include('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['upswd'];
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['upswd'])) {
                echo "Login successful! Welcome " . $user['username'] . ". <a href='view.html'>Go to your account</a>";
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "User not found.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="index.php">
            <label for="uname">Username</label>
            <input type="text" name="uname" required>

            <label for="upswd">Password</label>
            <input type="password" name="upswd" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
