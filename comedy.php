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
        <img
          src="comedy/the-hangover-movie-poster.jpg"
          alt="The Hangover Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">HANGOVER</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            Three buddies wake up from a bachelor party with no memory of the
            previous night and the bachelor missing.
          </div>
          <a class="review-button" href="review.php?movie=HANGOVER"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/3-idiots.webp" alt="3 Idiots Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">3 IDIOTS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Coming-of-age</span>
          </div>
          <div class="movie-desc">
            Two friends search for their long lost companion who inspired them
            to think differently, while rediscovering themselves in the process.
          </div>
          <a class="review-button" href="review.php?movie=3 IDIOTS"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/17again-poster.jpg" alt="17 Again Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">17 AGAIN</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Drama</span>
          </div>
          <div class="movie-desc">
            A middle-aged man finds himself magically transformed back into his
            17-year-old self and gets a chance to rewrite his life.
          </div>
          <a class="review-button" href="review.php?movie=17 AGAIN"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/little-man.jpg" alt="Little Man Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">LITTLE MAN</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Crime</span>
            <span class="genre-tag">Family</span>
          </div>
          <div class="movie-desc">
            A wannabe dad mistakes a vertically challenged criminal on the run
            as the son he and his wife have been expecting to adopt.
          </div>
          <a class="review-button" href="review.php?movie=LITTLE MAN"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/megamind.jpg" alt="Megamind Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">MEGAMIND</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Animation</span>
            <span class="genre-tag">Action</span>
          </div>
          <div class="movie-desc">
            The supervillain Megamind finally defeats his nemesis, but finds his
            life pointless without a hero to fight.
          </div>
          <a class="review-button" href="review.php?movie=MEGAMIND"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/major-panie.jpg" alt="Major Payne Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">MAJOR PAYNE</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 5.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Family</span>
            <span class="genre-tag">Military</span>
          </div>
          <div class="movie-desc">
            A tough-as-nails major is assigned to train a group of misfits to
            become cadets at a military academy.
          </div>
          <a class="review-button" href="review.php?movie=MAJOR PAYNE"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="comedy/shrek.jpg" alt="Shrek Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">SHREK</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Animation</span>
            <span class="genre-tag">Adventure</span>
          </div>
          <div class="movie-desc">
            An ogre, with the help of a donkey, sets out to rescue a princess
            from a dragon to reclaim his swamp.
          </div>
          <a class="review-button" href="review.php?movie=SHREKS">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img
          src="comedy/we-have-goust.jpg"
          alt="We Have a Ghost Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">WE HAVE A GHOST</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Supernatural</span>
            <span class="genre-tag">Family</span>
          </div>
          <div class="movie-desc">
            Finding a ghost named Ernest haunting their new home turns the
            family into overnight social media sensations.
          </div>
          <a class="review-button" href="review.php?movie=WE HAVE A GHOST"
            >My Review</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
