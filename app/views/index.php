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
           Our group consists of 5 people, Our leader Lawrence perez,  jheave jimenez,  Donna Macabugao, 
           Renzo Florendo,  Darell Dumalay. Our group created this for our Quiz in Integrative Programming and Technologies. 
           This site is for Log in and Quiz Registration.
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
