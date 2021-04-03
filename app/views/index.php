<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/static/dist/styles.css">
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap"
      rel="stylesheet"
    />
    <title>Meet Our Team</title>
  </head>
  <body>
    <main class="home">
      <section class="info">
        <header class="info__header"> 
          <h1 class="info__title">Meet Our Team</h1>
          <span class="info__spacer"></span>
          <p class="info__subtext">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra
            faucibus vitae consectetur nunc. Fames justo, dignissim pretium leo
            eu ullamcorper tellus. Tellus ac bibendum eu facilisis cursus. Nisl
            aliquet sit.
          </p>
          <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?php echo URLROOT; ?>/users/log" class="info__cta">Log out</a>
          <?php else : ?>
            <a href="<?php echo URLROOT; ?>/users/login" class="info__cta">Log in</a>
          <?php endif; ?>
        </header>
      </section>
      <section class="cards">
        <div class="group-one">
          <div class="card card--square">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/jheave icon.jpg"
                alt="Marques Brownlee"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Jheave Jimenez</a>
              </h3>
            </header>
          </div>
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/darell.jpg"
                alt="Tech Me Out"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Darell Dumalay</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group-two">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/Lawrence icon.jpg"
                alt="Justine Ezarik"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Lawrence Perez</a>
              </h3>
            </header>
          </div>
          <div class="card card--square">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/donna icon.jpg"
                alt="Peter McKinnon"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Donna Macabugao</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/renzo.jpg"
                alt="Justine Ezarik"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Renzo Florendo</a>
              </h3>
            </header>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
