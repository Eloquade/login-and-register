<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/static/dist/styles.css">
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/static/dist/tailwind.css">
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
            <a href="<?php echo URLROOT; ?>/users/logout" class="info__cta">Log out</a>
            <div class="w3-container">
              <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <div class="w3-container">
                    <h1 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
                      Please Complete Your Registration
                    </h1>
                    <p class="my-8 font-display font-bold text-3xl text-primarycolor text-center">
                      <a href="<?php echo URLROOT; ?>/registrationForm" >Registration Details</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
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
                src="<?php echo URLROOT ?>/static/dist/Assets/jheave icon.jpg"
              />
              <h3 class="card__title">
                <a class="card__link" href="https://www.facebook.com/jheavejimenez" target="blank">Jheave Jimenez</a>
              </h3>
            </header>
          </div>
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="<?php echo URLROOT ?>/static/dist/Assets/darell.jpg"
              />
              <h3 class="card__title">
                <a class="card__link" href="https://www.facebook.com/darell.dumalay.589/" target="blank">Darell Dumalay</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group-two">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="<?php echo URLROOT ?>/static/dist/Assets/Lawrence icon.jpg"
              />
              <h3 class="card__title">
                <a class="card__link" href="https://www.facebook.com/Perez.lawrence08" target="blank">Lawrence Perez</a>
              </h3>
            </header>
          </div>
          <div class="card card--square">
            <header class="card__header">
              <img
                class="card__profile"
                src="<?php echo URLROOT ?>/static/dist/Assets/donna icon.jpg"
              />
              <h3 class="card__title">
                <a class="card__link" href="https://www.facebook.com/donna.macabugao.21" target="blank">Donna Macabugao</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="<?php echo URLROOT ?>/static/dist/Assets/renzo.jpg"
              />
              <h3 class="card__title">
                <a class="card__link" href="https://www.facebook.com/groundrenzo"  target="blank">Renzo Florendo</a>
              </h3>
            </header>
          </div>
        </div>
      </section>
    </main>
    <script>
       var showModal = function() {
        document.getElementById('id01').style.display='block'
      }
      window.addEventListener('DOMContentLoaded', () => {
        setTimeout(showModal, 1000);
      });
    </script>
  </body>
</html>
