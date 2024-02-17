<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?  family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">SaiDa</a>
        <nav class="navbar">
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/home.html" class="font-effect-neon">Home</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/about.html" class="font-effect-neon">About</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/gallery.html" class="font-effect-neon">Gallery</a>
            <a href="#" class="font-effect-neon">Guests</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/resources.html" class="font-effect-neon">References</a>
        </nav>
    </header>

  <div class="polaroid-box">
    <h3 id="More">Angela's Dogs</h3>
    <div class="dogs">
      <img src="Toffee.jpg" alt="Brown Dachshund Dog Named Toffee" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Toffee "Chubibo"</p>
      </div>
    </div>
    <div class="dogs">
      <img src="Rockee.jpg" alt="Brown and White Jack Russel Dog Named Rockee" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Rockee "Rockipo"</p>
      </div>
    </div>
    <div class="dogs">
      <img src="Peewee.jpg" alt="Black Dachshund Dog Named Peewee" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Peewee "Piwit"</p>
      </div>
    </div>
    <div class="dogs">
      <img src="Shortcake.jpg" alt="Brown and Black Dachshund Dog Named Shortcake" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Shortcake "Shorty"</p>
      </div>
    </div>
  </div>

  <div class="polaroid-box">
    <h3 id="More"> Angela's Nature Photographs</h3>
    <div class="nature">
      <img src="Talon.jpg" alt="Road with Trees on the Side" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Crispina, Ilocos Norte</p>
      </div>
    </div>
    <div class="nature">
      <img src="Hugging Trees.jpg" alt="Tall Trees Bottom View" style="width:200px; height:300px;">
      <div class="container">
        <p class="polaroid">Tall Trees</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Solitary", "Profile", "Dump"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>
    <footer id="resfoot">
        <div class="row">
            <div class="column">
                    <button class="neon-button" onclick="showDateTime()">Date and Time</button>
                    <p id="dateTime"></p>
            </div>
    </footer>

    <script src="gallery.js"></script>
</body>
</html>