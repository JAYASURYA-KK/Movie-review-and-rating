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
        <img src="horror/Conjuring_2.jpg" alt="The Conjuring 2 Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">THE CONJURING 2</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Supernatural</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            Ed and Lorraine Warren travel to North London to help a single
            mother raising four children alone in a house plagued by a
            supernatural spirit.
          </div>
          <a class="review-button" href="review.php?movie=THE CONJURING 2"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/ready-not.jpg" alt="Ready or Not Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">READY OR NOT</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 5.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Comedy</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            A bride's wedding night takes a sinister turn when her eccentric new
            in-laws force her to take part in a terrifying game.
          </div>
          <a class="review-button" href="review.php?movie=READY OR NOT"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/scream.jpg" alt="Scream Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">SCREAM</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Mystery</span>
            <span class="genre-tag">Slasher</span>
          </div>
          <div class="movie-desc">
            A year after the murder of her mother, a teenage girl is terrorized
            by a new killer, who targets the girl and her friends by using
            horror films as part of a deadly game.
          </div>
          <a class="review-button" href="review.php?movie=SCREAM">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/the-boy.jpg" alt="The Boy Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">THE BOY</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Mystery</span>
            <span class="genre-tag">Thriller</span>
          </div>
          <div class="movie-desc">
            An American nanny is shocked that her new English family's boy is
            actually a life-sized doll. After she violates a list of strict
            rules, disturbing events make her believe that the doll is really
            alive.
          </div>
          <a class="review-button" href="review.php?movie=THE BOY">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/the-dark-knight.avif" alt="Dark Knight Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">DARK KNIGHT</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Thriller</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            A dark and twisted tale about a man driven to the edge of sanity by
            nightmarish visions and terrifying encounters with shadowy figures.
          </div>
          <a class="review-button" href="review.php?movie=DARK KNIGHT"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/the-conjuring.jpg" alt="The Conjuring Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">THE CONJURING PART-1</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Supernatural</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            Paranormal investigators Ed and Lorraine Warren work to help a
            family terrorized by a dark presence in their farmhouse.
          </div>
          <a class="review-button" href="review.php?movie=THE CONJURING PART-1"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="horror/the-exorsist.jpeg" alt="The Exorcist Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">THE EXORCIST</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Supernatural</span>
            <span class="genre-tag">Drama</span>
          </div>
          <div class="movie-desc">
            When a 12-year-old girl is possessed by a mysterious entity, her
            mother seeks the help of two priests to save her daughter.
          </div>
          <a class="review-button" href="review.php?movie=THE EXORCIST"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img
          src="horror/Hes-Out-There.webp"
          alt="He's Out There Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">HE'S OUT THERE</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6.6/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Thriller</span>
            <span class="genre-tag">Slasher</span>
          </div>
          <div class="movie-desc">
            On holiday at a remote lake house, a mother and her two young
            daughters must fight for survival after falling into a terrifying
            and bizarre nightmare.
          </div>
          <a class="review-button" href="review.php?movie=HE's OUT OF THERE"
            >My Review</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
