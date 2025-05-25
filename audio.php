<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autoplay Audio</title>
  </head>
  <body>
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
  </body>
</html>
