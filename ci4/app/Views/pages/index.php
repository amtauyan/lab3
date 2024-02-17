<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Page</title>

    <style>
        body {
            margin: 0;
            overflow: hidden; 
        }

        video {
            width: 100vw; 
            height: 100vh; 
            object-fit: cover; 
        }
    </style>
</head>
<body>
    <video id="logoVideo" muted autoplay>
        <source src="logo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <script>
        var video = document.getElementById("logoVideo");

        video.addEventListener("canplaythrough", function() {
            video.play();
        });

        video.addEventListener("ended", function() {
            window.location.href = "home.php";
        });
    </script>

</body>
</html>