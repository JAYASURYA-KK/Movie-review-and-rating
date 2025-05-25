<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="styles.css">
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
      background-color: black;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      background-attachment: scroll;
      font-family: Arial, sans-serif;
      text-align: center;
    }
.marquee{
    color: white;
}
    header {
      background-color: black;
      color: aliceblue;
      padding: 20px 10px;
      position: relative;
    }

    header h1 {
      margin: 0;
      font-size: 2em;
    }

    nav.corner {
      position: fixed;
      top: 20px;
      right: 20px;
    }

    nav.corner button {
      margin-left: 10px;
      background-color: red;
      padding: 8px 16px;
      font-size: 14px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    nav.corner button a {
      text-decoration: none;
      color: rgb(255, 255, 255);
      font-weight: bold;
    }

    nav.corner button:hover {
      background-color: rgb(34, 180, 34);
    }

    nav.corner button a:hover {
      color: white;
    }

    .navi {
      background-color: #333;

      padding: 10px 0;
    }

    .navi a {
      color: white;
      text-decoration: none;
      padding: 14px 20px;
    }

    .navi a:hover {
      background-color: #575757;
      border-radius: 5px;
    }


.column {
  float: left;
  padding: 10px;
  box-sizing: border-box; /* ensures padding doesn't affect width */
  margin: 5px; /* adds space between columns */
}
.row {
    
  display: flex;
   /* space between columns */
}


.column.side {
  flex: 1;
  background-color: rgb(252, 0, 34);
  width: 50%;
  
}

.column.middle {
  flex: 2;
  width: 48%;
  background-color: aquamarine;
}

</style>
</head>
<body>

    <header>
        <h1>MOVIE REVIEW AND RATING</h1>
        <nav class="corner">
          <button><a href="login.html">Login</a></button>
          <button><a href="signup.html">Sign Up</a></button>
        </nav>
      </header>

      <div class="navi">
        <a href="index.html">Home</a>
        <a href="horror.html">Horror</a>
        <a href="action.html">Action</a>
        <a href="comedy.html">Comedy</a>
        <a href="fantasy.html">Fantasy</a>
        <a href="sci-fi.html">Sci-Fi</a>
      </div>
 <marquee><div class="marquee">
    <h1>WELCOME TO MOVIE REVIEW AND RATING WEBSITE</h1>
  </div></marquee>
<div class="row">
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
  
  <div class="column middle" style="background-image: url('img1.jpg'); background-size: cover; background-position: center; color: white; padding: 20px;">
<center><h2>Movie Details</h2>
  <table border="1">
    <th>
      <td>Movie Name</td>
      <td>Data</td>
      <td>Amount</td>
      <td>Duration</td>
    </th>
  </table></center>
</div>
  
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
</div>
<footer>
  <p style="background-color: aliceblue;">Footer</p></footer>


</body>
</html>

