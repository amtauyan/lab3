<link rel="stylesheet" type="text/css" href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/css/style.css">
<body>
  <header class="header">
    <a href="#" class="logo">SaiDa</a>
    <nav class="navbar">
      <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/home" class="font-effect-neon">Home</a>
      <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/about" class="font-effect-neon">About</a>
      <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/gallery" class="font-effect-neon">Gallery</a>
      <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/guests" class="font-effect-neon">Guests</a>
      <a href="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/resources" class="font-effect-neon">References</a>
    </nav>
  </header>
  <h2 class="Subtitle">Create a Guest Item</h2>
  <div class="section-box">
    <?= session()->getFlashdata('error') ?>
	<?= validation_list_errors() ?>
	<form action="<?php echo site_url('guests'); ?>" method="post">
	<?= csrf_field() ?>
	<label for="name">Name</label>
	<input type="input" name="name" value="<?= set_value('name') ?>">
	<br>
	<label for="email">Email</label>
	<input type="input" name="email" value="<?= set_value('email') ?>">
	<br>
	<label for="comment">Comment</label>
	<textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
	<br>
	<input type="submit" name="submit" value="Create guest item">
	</form>
  </div>

  <script src="https://verbose-robot-6995g7vp6qppc49gp-8080.app.github.dev/lab3/ci4/public/javascript/about.js"></script><h2><?= esc($title) ?></h2>