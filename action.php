<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Review Website</title>
    <link href="style1.css" rel="stylesheet" />
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
        <img src="action/211-poster.jpg" alt="211 Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">211</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Crime</span>
          </div>
          <div class="movie-desc">
            Bank heist movie inspired by one of the most violent bank robberies
            in American history.
          </div>
          <a class="review-button" href="review.php?movie=211">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="action/fearless.jpg" alt="Fearless Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">FEARLESS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 5.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Biography</span>
            <span class="genre-tag">Drama</span>
          </div>
          <div class="movie-desc">
            A biography of Chinese Martial Arts Master Huo Yuanjia, who became a
            hero during the late Qing Dynasty era.
          </div>
          <a class="review-button" href="review.php?movie=FEARLESS"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="action/iam leagent.jpg" alt="I Am Legend Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">I AM LEGEND</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Sci-Fi</span>
          </div>
          <div class="movie-desc">
            Years after a plague kills most of humanity and transforms the rest
            into monsters, the sole survivor in New York City struggles to find
            a cure.
          </div>
          <a class="review-button" href="review.php?movie=I AM LEGEND"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="action/jhon-wick.jpg" alt="John Wick Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">JOHN WICK</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Crime</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            An ex-hitman comes out of retirement to track down the gangsters
            that took everything from him.
          </div>
          <a class="review-button" href="review.php?movie=JOHN WICK"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="action/looper.jpg" alt="Looper Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">LOOPER</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Sci-Fi</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            In 2074, when the mob wants to get rid of someone, they send their
            target into the past, where a hired gun awaits - someone like Joe.
          </div>
          <a class="review-button" href="review.php?movie=LOOPER">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="action/mad max.jpg" alt="Mad Max Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">MAD MAX</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Post-Apocalyptic</span>
          </div>
          <div class="movie-desc">
            In a post-apocalyptic wasteland, a woman rebels against a tyrannical
            ruler in search for her homeland with the aid of a group of female
            prisoners and a drifter named Max.
          </div>
          <a class="review-button" href="review.php?movie=MAD MAX">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="action/sniper.jpg" alt="Sniper Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">SNIPER</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.3/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">War</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            A master sniper is paired with a rookie to take out rebel leaders in
            the jungles of Panama.
          </div>
          <a class="review-button" href="review.php?movie=SNIPER">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="action/th.jpg" alt="Deadpool Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">DEADPOOL</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Superhero</span>
          </div>
          <div class="movie-desc">
            A wisecracking mercenary gets experimented on and becomes immortal
            but ugly, and sets out to track down the man who ruined his looks.
          </div>
          <a class="review-button" href="review.php?movie=DEADPOOL"
            >My Review</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
