<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link type="text/css" href="/css/style.css" rel="stylesheet">
	  <link type="text/css" href="/css/header.css" rel="stylesheet">
	  <link type="text/css" href="/css/footer.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>
  </head>
  <body> 

    <header>
        <div class="container">
          <div class="header flex">
            <div class="header_left flex">
              <button class="burger" type="button">
                <span class="burger__item">Menu</span>
              </button>
              <img class="header__logo" src="img/logo.png">
              <a class="header__geolink" target="_blank" href="https://2gis.ru/rostov/search/%D0%BB%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0%202%D0%B1%20%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%B2/geo/3378335375716270/39.626596%2C47.286219?m=39.62661%2C47.286192%2F16.63">
                <img class="header__geoicon" src='img/vector-icon.svg'>
              </a>  
                <div class="header__geo flex">
                  <span class="header__geo_town">Ростов-на-Дону </span>
                  <span class="header__geo_street">ул. Ленина, 2Б</span>
                </div>
            </div>
            <div class="header_right flex">
              <img class="header__icon" src='img/whatsapp-icon.svg'>
              <span class="header__contacts">
                <a class="header__phone" href="tel:+7(863)0000000">+7 (863) 000 00 00</a>
                <p class="header__city">Ростов-на-Дону</p>
              </span>
              <button class="btn_custom">Записаться на прием</button>
            </div>
          </div>
        </div>
    </header>
    

    <section class="menu">
      <div class="container">
        <nav class="menu__nav">
          <ul class="menu__list flex">
            <li class="menu__item"><a class="menu__link" href="#">О клинике</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Услуги</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Специалисты</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Цены</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
          </ul>
        </nav>
      </div>
	  </section>

  <section class="about">
    <div class="container flex">

      <div class="about__body">
        <div class="about__title">Многопрофильная клиника для детей и взрослых</div>
        <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </div>
      </div>

      <div class="about__bg">  
        <img class="about__icon" src="img/about.jpg">
      </div>  
    </div>
    
  </section>

  <section class="check">
    <div class="container">
      <?php  require 'templates/check-ups.php'?>

    </div>
  </section>

  <section class="footer_custom">
    <div class="container flex">

      <img class="footer__logo" src="img/logo_footer.png">

      <div class="footer__menu">
        <nav class="menu__nav">
          <ul class="menu__list flex">
            <li class="menu__item"><a class="menu__link" href="#">О клинике</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Услуги</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Специалисты</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Цены</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
          </ul>
        </nav>
      </div>

      <ul class="footer__social social">
        <li class="social__item">
          <a class="social__link social__link--inst" href="#"></a>
        </li>
        <li class="social__item">
          <a class="social__link social__link--wtp" href="#"></a>
        </li>
        <li class="social__item">
          <a class="social__link social__link--telg" href="#"></a>
        </li>
      </ul>

    </div>

</section>

 
  </body>
</html>