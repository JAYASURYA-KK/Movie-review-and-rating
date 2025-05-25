<?php
// Start the session to access session variables
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['username']);
$username = $loggedIn ? $_SESSION['username'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Movie Review and Rating</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .logo-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
    }

    .corner-nav {
      margin-left: auto;
      text-align: right;
    }

    .corner-nav h1 {
      font-size: 18px;
      margin: 0;
    }

    .corner-nav button {
      background-color: red;
      border: none;
      padding: 8px 12px;
      margin-bottom: 5px;
      border-radius: 5px;
    }

    .corner-nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav.navi {
      background-color: #444;
      padding: 10px;
      display: flex;
      justify-content: center;
      gap: 15px;
    }

    nav.navi a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav.navi a:hover {
      color: yellow;
    }

    .content-row {
      display: flex;
      justify-content: space-around;
      margin: 30px;
    }

    table {
      width: 100%;
      color: white;
      background-color: #222;
      border-collapse: collapse;
    }

    table th, table td {
      border: 1px solid #555;
      padding: 10px;
    }

    footer {
      background-color: #222;
      color: #ccc;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>

<body>
  <header class="bg-dark text-white py-3">
    <div class="container d-flex align-items-center">
      <img src="index/3075825.jpg" alt="Logo" class="rounded-circle logo-img me-3">
      <h1 class="mb-0">MOVIE REVIEW AND RATING</h1>
      <nav class="corner-nav ms-auto">
        <button><a href="logout.php">Logout</a></button>
        <?php if ($loggedIn): ?>
          <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <?php endif; ?>
      </nav>
    </div>
  </header>

  <nav class="navi">
    <a href="main.php">Home</a>
    <a href="horror.php">Horror</a>
    <a href="action.php">Action</a>
    <a href="comedy.php">Comedy</a>
    <a href="fantasy.php">Fantasy</a>
    <a href="sci-fi.php">Sci-Fi</a>
    <a href="redrive.php">Public Reviews</a> <
  </nav>

  <marquee behavior="scroll" direction="left">
    <h2 class="marquee">WELCOME TO MOVIE REVIEW AND RATING WEBSITE</h2>
  </marquee>

  <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 800px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"class="active"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="d-block w-100" autoplay muted loop>
          <source src="video/videoplayback.mp4" type="video/mp4">
        </video>
      </div>
      <div class="carousel-item">
        <video class="d-block w-100" autoplay muted loop>
          <source src="video/video3.mp4" type="video/mp4">
        </video>
      </div>
      <div class="carousel-item">
        <video class="d-block w-100" autoplay muted loop>
          <source src="video/video4.mp4" type="video/mp4">
        </video>
      </div>
      <div class="carousel-item">
        <video class="d-block w-100" autoplay muted loop>
          <source src="video/video2.mp4" type="video/mp4">
        </video>
      </div>
    <div class="carousel-item">
        <video class="d-block w-100" autoplay muted loop>
          <source src="video\video5.webm"type="video/webm">
        </video>
      </div>
</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="content-row">
    <div class="side">
      <h1 style="color: bisque;">Quick Links</h1>
      <h2>Explore our latest movie reviews and ratings.</h2>
    </div>

    <div class="middle-column">
      <table>
        <thead>
          <tr>
            <th style="color: bisque;"><h2>Movie Types</h2></th>
            <th style="color: bisque;"><h2>Movie Count</h2></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Action</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Comedy</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Horror</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Sci-Fi</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Fantasy</td>
            <td>8</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="side">
      <h1 style="color: bisque;">Popular Reviews</h1>
      <h2>Check out our most recent and trending movie reviews.</h2>
    </div>
  </div>

  <footer>
    <h3>Contact Us</h3>
    <p>Jayasurya K - <a href="tel:9080418085">9080418085</a></p>
    <p>Dinesh E - <a href="tel:9677819192">9677819192</a></p>
    <p>Email - <a href="mailto:moviereview@gmail.com">moviereview@gmail.com</a></p>
  </footer>
</body>
</html>
