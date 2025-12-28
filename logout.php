<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Awareness</title>
    <link rel="stylesheet" href="hbg.css">
</head>
<body>
    <div class="navbar">
        <a href='home.html'>Home</a>
        <a href='introduction.html'>Introduction</a>
        <a href='awareness.html'>Awareness</a>
        <a href='about.html'>About Us</a>
        <a href='learn.html'>Learn</a>
        <a href='door.html'>Game</a>
        <a href='logout.html'>Logout</a>
    </div>
    <div id="content" class="container">
        <h2>Logout</h2>
        
        <button id="logoutBtn" onclick="logout()">Logout</button>
<script>
    function logout() {
        alert("You have successfully logged out!");
        window.location.href = "index.php";  
    }
</script>

    </div>
</body>
</html>
