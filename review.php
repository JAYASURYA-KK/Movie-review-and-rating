<?php
// Start the session to access session variables
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['username']);
$username = $loggedIn ? $_SESSION['username'] : '';
?>
<?php
// --- Database configuration ---
$host = "localhost"; // Change to your database host if needed
$dbname = "movie_reviews";
$dbuser = "root";
$dbpass = "";

// --- Connect to MySQL ---
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Handle form submission ---
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST['movie'] ?? '';
    $rating = $_POST['rating'] ?? '';
    $review = $_POST['review'] ?? '';
    $user = $loggedIn ? $_SESSION['username'] : 'Anonymous'; // Default if not logged in

    // Basic validation
    if (!empty($movie) && !empty($rating) && !empty($review)) {
        $stmt = $conn->prepare("INSERT INTO reviews (movie_title, rating, review, username) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sdss", $movie, $rating, $review, $user);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: finall.html"); // Redirect after successful submission
            exit();
        } else {
            $errorMessage = "Error: Could not submit review.";
        }

        $stmt->close();
    } else {
        $errorMessage = "Please fill in all fields.";
    }
}

$movieName = isset($_GET['movie']) ? htmlspecialchars($_GET['movie']) : '';

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Submit Your Review</title>
  <style>
    body {
      background-image: url("back.jpeg");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0;
      text-align: center;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: black;
      color: aliceblue;
      padding: 20px 10px;
      position: relative;
    }



    .username-display {
      font-size: 20px;
      color: lightgreen;
      margin-top: 10px;
    }

    form {
      max-width: 500px;
      margin: 20px auto;
      background: #222;
      padding: 20px;
      border-radius: 10px;
    }

    label {
      color: green;
      font-size: 20px;
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input, textarea, button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: none;
      font-size: 16px;
    }

    button {
      background-color: red;
      color: white;
      font-weight: bold;
      cursor: pointer;
      margin-top: 20px;
    }

    button:hover {
      background-color: green;
    }

    .message {
      margin-top: 15px;
      font-weight: bold;
      font-size: 18px;
    }

    .success { color: lightgreen; }
    .error { color: red; }

    h1.title {
      color: blue;
      background-color: rgba(236, 225, 225, 0.5);
      width: fit-content;
      padding: 20px;
      border-radius: 10px;
      margin: 20px auto;
    }
  </style>
</head>
<body>
  <header>
   
    <h1>MOVIE REVIEW AND RATING</h1>
    <?php if ($loggedIn): ?>
      <div class="username-display">Welcome, <?php echo htmlspecialchars($username); ?>!</div>
    <?php endif; ?>
  </header>

  <h1 class="title">Submit Your Movie Review</h1>

  <?php if ($errorMessage): ?>
    <div class="message error"><?php echo $errorMessage; ?></div>
  <?php endif; ?>

  <form method="post" action="">
    <label for="movie">Movie Title:</label>
    <input type="text" id="movie" name="movie" value="<?php echo $movieName; ?>" readonly />

    <label for="rating">Give your Rating (out of 10):</label>
    <input type="number" id="rating" name="rating" min="0" max="10" step="0.1" required />

    <label for="review">Your Review:</label>
    <textarea id="review" name="review" rows="5" required></textarea>

    <button type="submit">Submit Review</button>
  </form>
</body>
</html>
