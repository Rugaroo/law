<?php 
	require 'db.php';
?>

<?php if ( isset ($_SESSION['logged_user']) ) : ?>
	<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <title>Арс Банкрот - принудительное банкротство</title>
</head>

<body>
  <header class="header">
    <div class="wide-container">
      <a href="index.html" class="logo">

        <img src="img/Group_3_1.png" class="logo-img" alt="logo">
      </a>
      <div class="menu">
        <div class="subheader">
          <nav class="nav">
            <ul class="nav-list">

              <li class="nav-item"><a href="index.html" class="nav-link">Банкротство</a></li>
              <li class="nav-item"><a href="prinuditelnoe.html" class="nav-link">Принудительное банкротство</a></li>
              <li class="nav-item"><a href="team.html" class="nav-link">О нас</a></li>
              <li class="nav-item"><a href="info.html" class="nav-link">Полезная информация</a></li>
              <li class="nav-item"><a href="#contacts" class="nav-link">Контакты</a></li>
            </ul>
          </nav>
          <button class="subheader-btn">Заказать звонок <br> <span>+7(800)444-15-46</span></button>
        </div>
        <div class="header-adress">
          <div class="header-adress-branch">г.Москва, ул. Льва Толстого 19/2</div>
          <div class="header-adress-zip">
            <div class="header-adress-branch">Санкт-Петербург, пр. Юрия Гагарина, дом 1, офис 334Б</div>
          </div>

        </div>

      </div>

      <div class="burger">
        <button class="hamburger hamburger--slider" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <div class="burger-overlay"></div>
      
      <div class="custom-model-main">
        <div class="custom-model-inner">
          <div class="close-btn">×</div>
          <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
              <form class="popup" enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
                <input class="input" type="text" name="name" placeholder="Ваше имя">
                <input class="input" type="text" name="email" placeholder="Номер телефона">
                <input class="input-btn popup-btn" value="Получить консультацию" type="submit">
              </form>
            </div>
          </div>
        </div>
        <div class="bg-overlay"></div>
      </div>

    </div>
  </header>
  <main>
    <section class="law">
      <div class="container">
        <div class="half-container">
          <div class="law-descr">

            <h2 class="section-heading">Принудительное банкротство</h2>


            <p class="law-text-spec">СПЕЦИАЛИЗИРУЕМСЯ ТОЛЬКО НА СПИСАНИИ ДОЛГОВ</p>

            <form action="#">
              <input class="input" type="text" name="input" placeholder="Ваше имя">
              <input class="input" type="text" name="input" placeholder="Номер телефона">
              <button class="input-btn">Получить консультацию</button>
            </form>
          </div>

        </div>

      </div>

    </section>
    <!-- <section class="stages">
      <div class="container">
        <h2 class="section-heading">При каких условиях кредитор может подать на банкротство должника</h2>
        <div class="bankrot-text">Требовать возбуждения банкротного дела может кредитор, долг перед которым превышает
          500 тыс. руб., а период просрочки составляет от 3 месяцев. При этом в указанную сумму долга не включаются
          различные виды штрафных санкций (например, пени, штрафы и неустойки).</div>
        <div class="bankrot-text">Размер долга и период просрочки подтверждаются судебными решениями. По некоторым видам
          обязательств можно подать на банкротство даже при отсутствии судебного акта о взыскании задолженности.</div>
        <div class="bankrot-text">Такие исключения применяются:</div>
        <ul class="reason-list">
          <li>для налоговых обязательств;</li>
          <li>для требований, подтвержденных кредитными договорами;</li>
          <li>для обязательств по нотариально заверенным сделкам;</li>
          <li>для требований, подтвержденных исполнительной нотариальной надписью;</li>
          <li>для ряда других обязательств, перечисленных в ст. 213.5 Закона № 127-ФЗ.</li>
        </ul>

      </div>
    </section> -->
    <!-- <section class="bankrot">
      <div class="container">
        <h2 class="section-heading">Могут ли кредиторы банкротить должника через МФЦ</h2>
        <div class="bankrot-text">Одна из основных особенностей банкротства через МФЦ — право на подачу заявления есть
          только у должника. У кредиторов есть возможность подавать свои возражения в тот период, когда сотрудники МФЦ
          опубликуют данные о долгах физ лица на Федресурсе, и требовать передачи дела в арбитраж.</div>
        <div class="bankrot-text">Например, такое требование будет обоснованным, если на стадии исполнительного
          производства неплательщик скрыл от приставов свое имущество.</div>
      </div>
    </section> -->

    <!-- <section class="views">
      <div class="container">
        <h2 class="section-heading">Преимущества для кредитора</h2>

        <div class="views-list">
          <div class="view-card">
            <div class="card-number">01</div>
            <div class="card-title">Намерение упредить должника и получить ряд преимуществ в банкротном деле.</div>
            <div class="card-text">Например, при подаче заявления кредитор сможет указать СРО, из состава которой суд
              выберет и назначит управляющего. Это не гарантирует, что назначенные таким способом управляющий добьется
              взыскания всей суммы долга. Но от активности этого специалиста зависит достаточно много.

              Управляющий будет досконально проверять имущественное и финансовое положение должника, анализировать его
              сделки за прошлые годы.
            </div>
          </div>

          <div class="view-card">
            <div class="card-number">02</div>
            <div class="card-title">Дополнительные возможности по выявлению активов должника.</div>
            <div class="card-text"> Пока долги взыскиваются через суды и приставов, у кредитора не так много полномочий
              по проверке имущественного положения должника.

              Например, можно получить данные из открытых источников по недвижимости, запросив выписку ЕГРН. Но на
              письменные запросы взыскателя должник может не реагировать.</div>
          </div>

          <div class="view-card">
            <div class="card-number">03</div>
            <div class="card-title">Возможность оспорить сделки должника, повлекшие ущерб интересам кредитора. </div>
            <div class="card-text">Это можно сделать и без возбуждения банкротного дела. Однако получить информацию о
              сделках и проверить ее вне банкротства достаточно сложно.

              Также в рамках банкротных процедур действуют специальные нормы об оспаривании сделок. Это может дать
              дополнительные преимущества для кредитора.
            </div>
          </div>

          <div class="view-card">
            <div class="card-number">04</div>
            <div class="card-title">Розыск активов</div>
            <div class="card-text">В ходе банкротства можно вести розыск активов должника не только на территории
              России, но и заграницей. Повторимся, многое зависит от активности кредиторов и управляющего.</div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="noservice">
      <div class="container">
        <h2 class="section-heading">Минусы банкротства для кредиторов</h2>
        <div class="bankrot-text">Если кредитор подает на банкротство физического лица, он заранее учитывает риски
          списания долгов. Если у банкрота отсутствуют активы и средства на счетах, конкурсной массы для реализации не
          будет. Решение суда об освобождении от обязательств автоматически лишит кредитора права на взыскание.</div>
        <div class="bankrot-text">При подаче заявления кредитору нужно нести расходы на госпошлину, оплатить
          вознаграждение управляющему. Учитывая большой размер задолженности, расходы за ведение банкротного дела можно
          считать незначительным минусом.</div>

      </div>
    </section> -->
    <section class="company">
      <div class="container">
        <h2 class="section-heading">Наша команда</h2>
        <div class="company-grid">
          <img src="img/DSC_5582.jpg" alt="company" class="company-img">
          <div class="company-descr">
            <div class="company-title">Наша команда</div>
            <div class="company-text">За более чем за 20 лет работы мы смогли объединить уникальный коллектив
              профессиональных юристов и антикризисных управляющих, что позволяет гарантировать высокое качество
              предоставляемых услуг нашего юридического центра. </div>
          </div>
        </div>
      </div>
    </section>
   
  
    <section class="certificates">
      <div class="container">
        <h2 class="section-heading">Сертификаты</h2>
        <div class="c-carousel">
          <img src="img/docs/02f43323cb1e484fa333cd34e41c6ba1-0001.jpg" alt="">
          <img src="img/docs/489d61d8d1fd43ffad397046359b66df-0001.jpg" alt="">
          <img src="img/docs/595cd2edfabe4416ad672a3dc9bb322c-0001.jpg" alt="">
          <img src="img/docs/333053f1bf454d57bd41081b12a45c9d-0001.jpg" alt="">
          <img src="img/docs/00013.jpg" alt="">

        </div>
      </div>
    </section>
    <section id="contacts" class="contacts">
      <div class="container">
        <h2 class="section-heading">Контакты</h2>
        <div class="contacts-zipper">
          <div class="contacts-descr">
            <div class="contacts-title">Для получения бесплатной консультации и анализу Вашей ситуации по процедуре
              банкротства вы можете обратиться к нам в офис по адресу</div>
            <div class="contacts-line"></div>
            <div class="adress">ул. Льва Толстого, д. 19/2, офис 32
              метро «Парк Культуры», «Фрунзенская»</div>
            <div class="contacts-phone">+7(800)444-15-46</div>
          </div>
          <iframe class="map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A6b9f16b7321fe47c41757613bc3d9ba82f2d0a7908a874976cd5747e32769271&amp;source=constructor"
            width="100%" height="400" frameborder="0"></iframe>
        </div>

      </div>
    </section>

  </main>
  <footer class="footer">
    <div class="container footer-container">
      <div class="links-menu">
        <div class="links-title">О компании</div>
        <a href="#" class="footer-link"></a>
        <a href="index.html#results" class="footer-link">Отзывы</a>
        <a href="index.html#contacts" class="footer-link">Контакты</a>
        <div class="copyright">Все права защищены</div>
      </div>

      <div class="links-menu">
        <div class="links-title">Услуги</div>
        <a href="index.html" class="footer-link">Банкротство физических лиц</a>
        <a href="prinuditelnoe.php" class="footer-link">Принудительное банкротство</a>

      </div>

      <div class="links-menu">
        <div class="links-title">Мы в соцсетях</div>
        <a href="https://vk.com/arsbankrot" class="footer-link">Вконтакте</a>
        <a href="#" class="footer-link">Instagram</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>

<?php else : ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <title>Арс Банкрот - авторизация</title>
</head>

<body>
  
  <main>
    <section class="signup">
      <div class="container">
          <h2 class="section-heading">Вы не авторизованы</h2>
          <a class="auth-btn" href="/login.php">Авторизация</a>
          
      </div>

    </section>
  </main>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>


<?php endif; ?>