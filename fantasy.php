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
        <img src="fantasy/fanta.jpg" alt="Stardust Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">STAR DUST</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Romance</span>
          </div>
          <div class="movie-desc">
            In a countryside town bordering on a magical land, a young man makes
            a promise to his beloved that he'll retrieve a fallen star by
            venturing into the magical realm.
          </div>
          <a class="review-button" href="review.php?movie=STAR DUST"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img
          src="fantasy/a8bf8a7353eb4497c0d35a0150fb9405.jpg"
          alt="The Huntsman: Winter's War Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">CHASSEUR ET LA REINE DES GLACES</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Action</span>
            <span class="genre-tag">Adventure</span>
          </div>
          <div class="movie-desc">
            Eric and fellow warrior Sara, raised as members of ice Queen Freya's
            army, try to conceal their forbidden love as they fight to survive
            the wicked intentions of both Freya and her sister Ravenna.
          </div>
          <a
            class="review-button"
            href="review.php?movie=CHASSEUR ET LA REINE DES GLACES"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="fantasy/OIP (1).jpeg" alt="Fantasy Island Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">FANTACY ISLAND</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Horror</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            When the owner of a popular fantasy island resort promises to make
            the secret dreams of his guests come true, things take a turn for
            the worse when these fantasies start turning into nightmares.
          </div>
          <a class="review-button" href="review.php?movie=FANTACY ISLAND"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img
          src="fantasy/HP_Deadly_hallow-2.jpg"
          alt="Harry Potter and the Deathly Hallows Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">HARRY POTTER AND THE DEADLY HALLOWS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            Harry, Ron, and Hermione search for Voldemort's remaining Horcruxes
            in their effort to destroy the Dark Lord as the final battle rages
            on at Hogwarts.
          </div>
          <a
            class="review-button"
            href="review.php?movie=HARRY POTTER AND THE DEADLY HALLOWS"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="fantasy/OIP.jpeg" alt="Pan's Labyrinth Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">PAN'S LABYRINTH</div>
          <div class="movie-rating">
            <span class="star-rating">★★★☆☆</span> 6/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">War</span>
          </div>
          <div class="movie-desc">
            In the Falangist Spain of 1944, the bookish young stepdaughter of a
            sadistic army officer escapes into an eerie but captivating fantasy
            world.
          </div>
          <a class="review-button" href="review.php?movie=PAN'S LABYRINTH"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img src="fantasy/Xlcii0l.webp" alt="Journey Movie Poster" />
        <div class="movie-info">
          <div class="movie-title">JOUEERY</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 7.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Family</span>
          </div>
          <div class="movie-desc">
            A scientist and his nephew embark on a journey into the depths of
            the earth, where they discover a world filled with incredible
            creatures and breathtaking landscapes.
          </div>
          <a class="review-button" href="review.php?movie=JOUEERY">My Review</a>
        </div>
      </div>

      <div class="movie-card">
        <img
          src="fantasy/PC-5.jpg"
          alt="Pirates of the Caribbean 5 Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">PIRATES OF THE CARIBIAN -PART 5</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★★</span> 9/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Adventure</span>
            <span class="genre-tag">Action</span>
          </div>
          <div class="movie-desc">
            Captain Jack Sparrow searches for the trident of Poseidon while
            being pursued by an undead sea captain and his crew.
          </div>
          <a
            class="review-button"
            href="review.php?movie=PIRATES OF THE CARIBIAN -PART 5"
            >My Review</a
          >
        </div>
      </div>

      <div class="movie-card">
        <img
          src="fantasy/511171_6815617_1316243_22ab8c6d_image.jpg"
          alt="Queen of Puppets Movie Poster"
        />
        <div class="movie-info">
          <div class="movie-title">QUEEN OF PUPPETS</div>
          <div class="movie-rating">
            <span class="star-rating">★★★★☆</span> 8.5/10
          </div>
          <div class="movie-genre">
            <span class="genre-tag">Fantasy</span>
            <span class="genre-tag">Drama</span>
            <span class="genre-tag">Mystery</span>
          </div>
          <div class="movie-desc">
            In a magical realm where puppets come to life, a young girl
            discovers she has the power to control them and must use her
            abilities to save her kingdom from an evil force.
          </div>
          <a class="review-button" href="review.php?movie=QUEEN OF PUPPETS"
            >My Review</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
