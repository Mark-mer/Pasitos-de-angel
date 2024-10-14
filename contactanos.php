<!DOCTYPE html>
<html lang="en">
<?php include_once 'links.php' ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasitos de &aacute;ngeles | Principal</title>
  <link rel="icon" href="icon/brand_logo_circle.png" type="image/x-icon">
  <link rel="stylesheet" href="scss/css/main.css">
</head>

<body>

  <main class="main-container">
    <?php
    include 'navbar.php'
    ?>

    <section class="main-container-section3 container bg-light col-12 py-5 text-dark">
      <h3 class="text-center mb-4">Contáctanos</h3>
      <div class="text-center mb-4">
        <a href="https://www.facebook.com" target="_blank">
            <img src="icon/facebook.png" alt="Facebook" style="width: 40px; height: 40px;">
        </a>
        <a href="https://www.twitter.com" target="_blank">
          <img src="icon/twitter.png" alt="Twitter" style="width: 40px; height: 40px;">
        </a>
        <a href="https://www.instagram.com" target="_blank">
          <img src="icon/instagram.png" alt="Instagram" style="width: 40px; height: 40px;">
        </a>
      </div>
      <p class="text-center mb-4">Si tienes alguna pregunta o comentario, no dudes en contactarnos a través del siguiente formulario.</p>
    </section>

    <section class="main-container-section4 container bg-light col-12 py-5">
      <h3 class="text-center mb-4">Comentarios</h3>
      <form action="contact.php" method="post">
        <div class="form-group mb-3">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="message">Mensaje:</label>
          <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>

    <?php
    include 'footer.php'
    ?>
  </main>

</body>

</html>