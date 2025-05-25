<?php
// Handle form submission before any HTML output
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $host = "localhost";
    $dbname = "movie_reviews";
    $dbuser = "root";
    $dbpass = "";

    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        $message = "<h3 style='color:red;'>Connection failed: " . $conn->connect_error . "</h3>";
    } else {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';

        if ($password !== $confirm_password) {
            $message = "<h3 style='color:red;'>Passwords do not match.</h3>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $message = "<h3 style='color:red;'>Username already taken.</h3>";
            } else {
                $stmt->close();
                $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $username, $hashed_password);

                if ($stmt->execute()) {
                    $message = "<h3 style='color:green;'>Account created successfully. Redirecting...</h3>";
                    echo "<script>setTimeout(() => { window.location.href = 'main.php'; }, 2000);</script>";
                } else {
                    $message = "<h3 style='color:red;'>Something went wrong. Please try again.</h3>";
                }
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-image: url("back.jpeg");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0;
      font-family: Arial;
      text-align: center;
    }

    header {
      background-color: rgb(0, 0, 0);
      color: aliceblue;
      padding: 20px 10px;
    }

    .container-form {
      background-color: black;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 500px;
      border-radius: 15px;
      color: #ffffff;
      margin: auto;
      margin-top: 30px;
    }

    input,
    button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: red;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: rgb(34, 180, 34);
    }

    .logo-img {
      width: 60px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <header class="bg-dark text-white py-3">
    <div class="container d-flex align-items-center">
      <img src="index/3075825.jpg" alt="Logo" class="rounded-circle logo-img me-3" />
      <h1>MOVIE REVIEW AND RATING</h1>
    </div>
  </header>

  <div class="container-form">
    <form action="" method="post">
      <h1 style="color: rgb(18, 6, 248); border-radius: 5px">Create Account</h1>

      <?= $message; ?>

      <h3><label for="username">Username:</label></h3>
      <input type="text" id="username" name="username" required />

      <h3><label for="password">Password:</label></h3>
      <input type="password" id="password" name="password" required />

      <h3><label for="confirm_password">Confirm Password:</label></h3>
      <input type="password" id="confirm_password" name="confirm_password" required />

      <h4><button type="submit" name="submit">Sign Up</button></h4>
      Already have an account? <a href="index.php" style="text-decoration: none;">Login</a>
    </form>
  </div>

  <audio id="bg-audio" autoplay loop style="display: none">
    <source src="ReelAudio-86229.mp3" type="audio/mpeg" />
    <source src="ReelAudio-86229.ogg" type="audio/ogg" />
    Your browser does not support the audio element.
  </audio>

  <script>
    const audio = document.getElementById("bg-audio");
    audio.play().catch(() => {
      document.body.addEventListener("click", () => {
        audio.play();
      }, { once: true });
    });
  </script>
</body>
</html>
