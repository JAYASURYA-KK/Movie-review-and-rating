<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Review Website</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        background-image: url("back2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        font-family: Arial, sans-serif;
        text-align: center;
        color: white;
      }

      header {
        background: #000000;
        padding: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
      }

      header h1 {
        color: #ffffff;
        margin: 0;
      }

      /* Optional: class for positioning a button in the corner */
      .corner {
        position: absolute;
        top: 1rem;
        right: 1rem;
      }

      .corner button {
        background: #e50914;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s ease;
      }

      .corner button:hover {
        background: rgb(34, 180, 34);
      }

      .corner a {
        color: white;
        text-decoration: none;
      }

      .navi {
        background: #252525;
        padding: 1rem;
        display: flex;
        justify-content: center;
        gap: 1.5rem;
      }

      .navi a {
        color: #fff;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        transition: all 0.3s;
      }

      .navi a:hover {
        background: #e50914;
      }

      .image-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        padding: 30px;
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto;
      }

      .movie-card {
        position: relative;
        width: calc(25% - 10px);
        min-width: 200px;
        max-width: 250px;
        margin-bottom: 15px;
        box-sizing: border-box;
      }

      .movie-card img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 8px;
        display: block;
      }
      .movie-card:hover img {
        filter: brightness(20%);
      }
      .over {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 20px 0;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
      }

      .movie-card:hover .over {
        opacity: 1;
      }

      .review-button {
        display: inline-block;
        margin-top: 8px;
        padding: 6px 12px;
        background-color: rgb(34, 180, 34);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
      }

      .review-button:hover {
        background-color: #b71c1c;
      }

      .movie-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;

        padding: 1rem;
        text-align: center;
      }

      .movie-card:hover .movie-info {
        opacity: 1;
      }

      .movie-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #ffffff;
      }

      .movie-rating {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        color: #ffcc00;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }

      .movie-desc {
        margin-bottom: 1rem;
        line-height: 1.4;
        overflow: hidden;
        display: -webkit-box;
      }

      .movie-genre {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 1rem;
      }

      .genre-tag {
        background: rgba(229, 9, 20, 0.8);
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
      }

      .star-rating {
        color: #ffcc00;
        font-size: 1.2rem;
      }
    </style>
  </head>

  <body>
    <header>
      <h1>MOVIE REVIEW AND RATING</h1>
      <nav class="corner">
        <button><a href="index.php">Logout</a></button>
      </nav>
    </header>
    <div class="navi">
      <a href="main.php">Home</a>
      <a href="horror.php">Horror</a>
      <a href="action.php">Action</a>
      <a href="comedy.php">Comedy</a>
      <a href="fantasy.php">Fantasy</a>
      <a href="sci-fi.php">Sci-Fi</a>
    </div>
    <div class="image-grid">
      <div class="movie-card">
        <img src="sci-fi/65-English-2.jpg" alt="65 Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">65</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            An astronaut crash lands on a mysterious planet only to discover
            he's not alone. Stranded 65 million years in the past, he must fight
            to survive in a world of prehistoric dangers.
          </div>
          <a class="review-button" href="review.php?movie=65">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img
          src="sci-fi/another-earth-2011.webp"
          alt="Another Earth Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">ANOTHER EARTH</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 5.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            On the night of the discovery of a duplicate Earth in the Solar
            system, an ambitious young student and an accomplished composer
            cross paths in a tragic accident.
          </div>
          <a class="review-button" href="review.php?movie=ANOTHER EARTH"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi/passengers.webp" alt="Passengers Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">PASSENGERS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Romance</span>
            <span class="genre-tag">Adventure</span>
          </div>
          <div class="movie-desc">
            A spacecraft traveling to a distant colony planet and transporting
            thousands of people has a malfunction in its sleep chambers. As a
            result, two passengers are awakened 90 years early.
          </div>
          <a class="review-button" href="review.php?movie=PASSENGERS"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi/control.jpg" alt="Control Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">CONTROL</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Thriller</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            A woman is forced to participate in a deadly game where an unseen
            voice controls her every move. With no memory of how she got there,
            she must uncover the truth to survive.
          </div>
          <a class="review-button" href="review.php?movie=CONTROL">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi/goodone.webp" alt="Good One Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">GOOD ONE</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            In a future where artificial intelligence has evolved to mimic
            humans perfectly, a detective must determine which of his suspects
            is human and which is not.
          </div>
          <a class="review-button" href="review.php?movie=GOOD ONE"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi/portal.webp" alt="Portal Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">PORTAL</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            A group of scientists create a portal to another dimension, but when
            they open it, they discover something terrifying on the other side.
          </div>
          <a class="review-button" href="review.php?movie=PORTAL">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi/pometh.webp" alt="Prometheus Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">PROMETHEUS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            Following clues to the origin of mankind, a team finds a structure
            on a distant moon, but they soon realize they are not alone in
            exploring the mysterious ancient edifice.
          </div>
          <a class="review-button" href="review.php?movie=PROMETHEUS"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="sci-fi\stardust.jpg" alt="Stardust Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">STARDUST</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Adventure</span>
          </div>
          <div class="movie-desc">
            In a galaxy where stardust can grant immortality, a young scientist
            embarks on a dangerous mission to collect a sample from a newly
            fallen star to save his dying world.
          </div>
          <a class="review-button" href="review.php?movie=STARDUST"
            >My Review</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
