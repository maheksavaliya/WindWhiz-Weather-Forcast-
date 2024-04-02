<!DOCTYPE html>
<html>
<head>
    <title>Signup/Login Example</title>
</head>
<body>
    <?php
    // Check if the signup form was submitted
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Perform signup logic (e.g., database insertion) here
        echo "Signup successful for $username with email $email!";
    }

    // Check if the login form was submitted
    if (isset($_POST['login'])) {
        $loginEmail = $_POST['login_email'];
        $loginPassword = $_POST['login_password'];

        // Perform login logic (e.g., check credentials) here
        echo "Login attempted with email $loginEmail and password $loginPassword!";
    }
    ?>

    <h2>Signup</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="signup" value="Signup">
    </form>

    <h2>Login</h2>
    <form action="" method="post">
        <input type="email" name="login_email" placeholder="Email" required><br>
        <input type="password" name="login_password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
