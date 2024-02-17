    <body>
        <header class="header">
            <a href="#" class="logo">SaiDa</a>
            <nav class="navbar">
              <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week8/home.php" class="font-effect-neon">Home</a>
              <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week8/about.php" class="font-effect-neon">About</a>
              <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/gallery.html" class="font-effect-neon">Gallery</a>
              <a href="#" class="font-effect-neon">Guests</a>
              <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/resources.html" class="font-effect-neon">References</a>
            </nav>
        </header>

    <div class="text-box">
        <h1> SaiDa's <span class="auto-input"></h1>
        <p> IT Student · Sporty · Once · Blink · MY </p>
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
    <script src="home.js"></script>

    <?php
        $imageProperties = [    
            'src'    => 'images/profile.jpg',    
            'alt'    => 'Portrait of Angela',
            'width' => '300',
            'position' => 'absolute',
            'top' => '38%',
            'left' => '50%',
            'transform' => 'translateX(-50%)',    
            'class'  => 'profile',    
        ];

        echo img($imageProperties);
        echo img('images/bg.jpeg');
        echo link_tag('css/home.css');
        echo script_tag('javascript/home.js');
    ?>