
<!DOCTYPE html>
<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        background-image: url("back.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        font-family: Arial, sans-serif;
        text-align: center;
      }

      header {
        background-color: black;
        color: aliceblue;
        padding: 20px 10px;
        position: relative;
      }

      .container {
        background-color: black;
        padding: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 500px;
        border-radius: 15px;
        color: #ffffff;
      }

      input,
      button {
        width: 100%;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      button {
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
      }
      .logo-img {
  width: 60px; 
  object-fit: cover;
}
      button:hover {
        background-color: rgb(34, 180, 34);
      }
    </style>
  </head>
  <body>
    <header class="bg-dark text-white py-3">
      <div class="container d-flex align-items-center">
        <img src="index/3075825.jpg"  alt="Logo" class="rounded-circle logo-img me-3">
      <h1>MOVIE REVIEW AND RATING</h1>
    </header>
      <!-- Hidden audio that autoplays and loops -->
      <audio id="bg-audio" autoplay loop style="display: none">
        <source src="ReelAudio-86229.mp3" type="audio/mpeg" />
        <source src="ReelAudio-86229.ogg" type="audio/ogg" />
        Your browser does not support the audio element.
      </audio>
  
      <script>
        // Attempt to play immediately
        const audio = document.getElementById("bg-audio");
        audio.play().catch(() => {
          // If autoplay fails, wait for a user interaction
          document.body.addEventListener(
            "click",
            () => {
              audio.play();
            },
            { once: true }
          );
        });
      </script>
    <div class="container">
      <form action="login.php" method="post">
        <h1 style="color: rgb(18, 6, 248); border-radius: 5px">Login</h1>
        <h3><label>Username:</label></h3>
        <input type="text" id="username" name="username" required />
        <br />
        <h3><label>Password:</label></h3>
        <input type="password" id="password" name="password" required />
        <br />
        <h4><button type="submit">Login</button></h4>
        new register? <a href="signup.php">Sign Up</a>
       
        
      </form>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          const form = document.querySelector("form");
          if (form) {
              form.addEventListener("submit", function (e) {
                  const username = document.querySelector("input[name='username']").value.trim();
                  const password = document.querySelector("input[name='password']").value.trim();
      
                  if (!username || !password) {
                      e.preventDefault();
                      alert("Both username and password are required.");
                  }
              });
          }
      });
      </script>
  </body>
</html>
