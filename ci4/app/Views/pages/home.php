    <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Introduction</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>

    <?php
      echo link_tag('css/home.css');

      $script = [
        'defer' => null,
        'src' => 'javascript/home.js', 
      ];

      echo script_tag($script);
    ?>

    <body>
        <header class="header">
            <a href="#" class="logo">SaiDa</a>
            <nav class="navbar">
              <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/home" class="font-effect-neon">Home</a>
              <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/about" class="font-effect-neon">About</a>
              <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/gallery" class="font-effect-neon">Gallery</a>
              <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/guest" class="font-effect-neon">Guests</a>
              <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/resources" class="font-effect-neon">References</a>
            </nav>
        </header>

    <div class="text-box">
        <h1> SaiDa's <span class="auto-input"></h1>
        <p> IT Student · Sporty · Once · Blink · MY </p>
    </div>
    <img src="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/images/Profile.jpg">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Solitary", "Profile", "Dump"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>
    <script src="home.js"></script>

    <?php
        $profile = [    
            'src'    => 'images/Profile.jpg',    
            'alt'    => 'Portrait of Angela',
            'width' => '300',
            'position' => 'absolute',
            'top' => '38%',
            'left' => '50%',
            'transform' => 'translateX(-50%)',    
            'class'  => 'profile',    
        ];

        echo img($profile);

        $background = [    
            'src'    => 'images/bg.jpeg',
            'background-size'    => '100%',    
            'background-attachment'    => 'fixed',
            'width' => '100%',
            'height' => '100%',
            'padding-top' => '80px',
        ];

        echo img($background);
    ?>