<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Introduction</title>
  <link rel="stylesheet" type="text/css" href="guest.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>
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

  <h2 class="Subtitle">PHP Form Validation Example</h2>
  <div class="section-box">
    <?php
      // define variables and set to empty values
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }
          
        if (empty($_POST["website"])) {
          $website = "";
        } else {
          $website = test_input($_POST["website"]);
          // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
          }
        }

        if (empty($_POST["comment"])) {
          $comment = "";
        } else {
          $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <span class="error">* required field</span>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Name: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Website: <input type="text" name="website" value="<?php echo $website;?>">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>
      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form>
  </div>

  <h2 class="Subtitle">The Input</h2>
  <div class="section-box">
    <?php
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $website;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
    ?>

    <?php
//for XAMPP
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

//for Socitcloud
$servername = "localhost";
$username = "webprogmi221";
$password = "g_6bCitLu.ljMK*m";
$dbname = "webprogmi221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO amtauyan_myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
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

    <script src="about.js"></script>

</body>
</html>
