<?php
      require_once 'session.php';
      require_once 'dbconnect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project repair</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutme.html">About Us</a></li>
              <li><a href="service.html">Service</a></li>
              <li><a href="contact.html">contact</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="signup.php">Signup</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="bg1">
            <img src="images/bg1.jpg" alt="bg1" style="width: 100%; height: 800px;">
        </div>
        <div class="loginbox">
            <img src="images/logo.jpg" class="avatar">
                <h1>Login Here</h1>
                <form method='post'>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="signup.php">Signup</a>
                </form>

            </div>
    </section>
    <?php
    if(isset($_POST['submit'])) {

        $user = $_POST['username'];
        $password = $_POST['password'];

        try {
          $SQLQuery = "SELECT * FROM users WHERE username = :username";
          $statement = $conn->prepare($SQLQuery);
          $statement->execute(array(':username' => $user));

          while($row = $statement->fetch()) {
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];

            if(password_verify($password, $hashed_password)) {
              $_SESSION['id'] = $id;
              $_SESSION['username'] = $username;
              // echo "login successful";
              header('location: account.php');
            }
            else {
              echo "Error: Invalid username or password";
            }
          }
        }
        catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }

    }
 ?>
</body>
</html>
