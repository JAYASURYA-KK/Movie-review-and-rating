<?php
// Start session to access user data if needed
session_start();

// --- Database configuration ---
$host = "localhost"; // Change to your database host if needed
$dbname = "movie_reviews"; // Change to your database name
$dbuser = "root";
$dbpass ="";

// --- Connect to MySQL ---
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Fetch all reviews ---
$sql = "SELECT movie_title, rating, review, username, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Movie Reviews</title>
  <style>
    body {
        background-image: url("back.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: lightgreen;
    }

    .review-container {
      max-width: 900px;
      margin: 20px auto;
      background-color: #222;
      border-radius: 10px;
      padding: 20px;
    }

    .review {
      border-bottom: 1px solid #555;
      padding: 15px 0;
    }

    .review:last-child {
      border-bottom: none;
    }

    .movie-title {
      font-size: 22px;
      font-weight: bold;
      color: cyan;
    }

    .rating {
      color: orange;
      font-weight: bold;
    }

    .review-text {
      margin-top: 10px;
    }

    .username {
      color: lightblue;
      font-style: italic;
    }

    .timestamp {
      font-size: 12px;
      color: gray;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <h1 style="color:red">All Movie Reviews</h1>

  <div class="review-container">
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="review">
          <div class="movie-title"><?php echo htmlspecialchars($row['movie_title']); ?></div>
          <div class="rating">Rating: <?php echo $row['rating']; ?>/10</div>
          <div class="review-text"><?php echo nl2br(htmlspecialchars($row['review'])); ?></div>
          <div class="username">Reviewed by: <?php echo htmlspecialchars($row['username']); ?></div>
        
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p style="text-align: center;">No reviews have been posted yet.</p>
    <?php endif; ?>
  </div>

</body>
</html>

<?php
$conn->close();
?>
