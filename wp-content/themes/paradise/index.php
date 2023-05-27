<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url');?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url');?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo bloginfo('template_url');?>/assets/img/favicon/site.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Raleway:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
    <?php
        wp_head();
    ?>


</head>

<body>
<header>
    <nav class="nav">
      <div class="container d-flex j-cont a-items">
        <div class="nav__logo">
          <a class="nav__logo_link " href="index.php">
            <?php the_custom_logo(); ?>
          </a>
        </div>
        <div class="nav__navigation-items">
          <a href="#assortment" class="nav__navigation-item">Ассортимент</a>
          <a href="#about" class="nav__navigation-item">О нас</a>
          <a href="#reviews" class="nav__navigation-item">Отзывы</a>
          <a href="#contacts" class="nav__navigation-item">Контакты</a>
        </div>
        <div class="nav__contact">
          <div class="nav_contact-city">
          <?php the_field('nav_address') ?>
          </div>
          <a href="tel:79276156483" class="nav_contact-tel"><?php the_field('nav_tel') ?></a>
        </div>
        <div class="nav__icon">
        &#9776; 
        </div>
      </div>
    </nav>
  </header>



<div id="page-preloader" class="preloader">
    <img class="loader" src="<?php echo bloginfo('template_url');?>/assets/img/pre-load.svg" alt="Предзагрузка">
</div>

<div class="popup">
	<div class="popup__wrapper">
      <div class="popup__head d-flex j-cont">
          <div class="popup__old">
            18+
          </div>
          <div class="popup__logo">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/popup_logo.svg" alt="Логотип">
          </div>
      </div>
              <div class="popup__access">
                Для доступа к сайту необходимо подтвердить возраст
              </div>
                    <p class="popup__descr">
                    Сайт содержит информацию об электронных сигаретах, предназначенную только для лиц старше 18 лет, являющихся потребителями табака или иной никотиносодержащей продукции, которые в противном случае продолжат курить или употреблять иную никотиносодержающую продукцию.
                    </p>
                            <div class="popup__btns d-flex">
                            <button class="close">Мне есть 18 лет</button>
                            <a class="popup__cancel" href="#">Мне нет 18 лет</a>
                            </div>
                                <div class="popup__danger">
                                Продолжая использовать сайт, я подтверждаю, что мне уже исполнилось 18 лет, и я являюсь потребителем табака или иной никотиносодержащей продукции.
                                </div>
      
  </div>
</div>
<div class="overlay"></div>

<div class="popup__form">
    <div class="popup__form-wrapper">
    <div class="popup__head d-flex j-cont">
          <div class="popup__old">
            18+
          </div>
          <div class="popup__logo">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/popup_logo.svg" alt="Логотип">
          </div>
      </div>
      <form id="popup__form-acc" action="send-email.php" method="POST">
          <input required class="popup__form_tel" type="tel" name="phone" id="phone" placeholder="+7-(999)-999-99-99">
          <div class="popup__form-policy">
          Нажимая эти кнопки, соглашаюсь с<br> <a class="popup__form-policy-link" href="https://paradise-samara.ru/policy/">Политикой обработки персональных данных</a>
          </div>
          <button class="popup__form-btn" type="submit">Запросить звонок</button>
      </form>
      <a class="popup__form-btn-link" href="https://wa.me/79276156483?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82..."> Связаться по WhatsApp <img class="popup__form-wp-link" src="<?php echo bloginfo('template_url');?>/assets/img/social-links/watsapp.svg" alt="whatsapp"></a>
    </div>
	<button class="close__form">&times;</button>
</div>
<div class="overlay__form"></div>

<div class="popup__thx">
    <div class="popup__thx-wrapper">
    <div class="popup__head-thx d-flex j-cont">
          <div class="popup__old-thx">
            18+
          </div>
          <div class="popup__logo-thx">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/popup_logo.svg" alt="Логотип">
          </div>
      </div>
      <img class="popup__thx-img" src="<?php echo bloginfo('template_url');?>/assets/img/popup_thx.png" alt="Спасибо!">
      <p class="popup__thx-title">Спасибо!</p>
      <p class="popup__thx-descr">В ближайшее время с вами свяжутся!</p>
    </div>
	<button class="close__form-thx">&times;</button>
</div>
<div class="overlay__form-thx"></div>

  <section class="main__slider">
    <div class="slider__item promo-vape active" style="background: url(<?php the_field('background_first')?>) center no-repeat; 
    background-size: cover;">
      <div class="container">
        <div class="slider">
          <h1 class="promo__head">Более 25 брендов <span class="promo__head-exclusive">эксклюзивного</span> <br>
            ассортимента</h1>
          <div class="promo__wrapper d-flex j-cont">
            <h4 class="promo__descr"><?php the_field('promo_descr') ?></h4>
              <div class="promo__slider_nav-first">
            <button class="promo__slide_btn-next"> <img class="promo__slide_btn-next-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-next.svg"
                alt="далее"> </button>
                </div>
          </div>
          <div class="promo__nav-btns">
            <a href="#assortment" class="promo__btn-catalog">Каталог</a>
            <button class="btn_modal__form promo__btn-contact">Связаться</button>
          </div>
          <img class="promo__img-vape" src="<?php the_field('Promo_first_img') ?>" alt="Вейпы">
          <img class="promo__img-vape-small" src="<?php echo bloginfo('template_url');?>/assets/img/promo-vape-small.webp" alt="Вейпы">
        </div>
      </div>
    </div>

    <div class="slider__item promo-vape-twice pos-rlt" style="background: url(<?php the_field('background_second')?>) center no-repeat; 
    background-size: cover;">
      <div class="container">
        <div class="slider__twice ">
          <h1 class="promo__head">Более <span class="promo__head-exclusive">30</span> брендов <br> российских <br>
            производителей!</h1>

          <div class="promo__wrapper d-flex j-cont">
            <h4 class="promo__descr"><?php the_field('promo_descr_second') ?></h4>
            <div class="promo__slider_nav">
              <button class="promo__slide_btn-back"> <img class="promo__slide_btn-back-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-back.svg"
                  alt="назад"> </button>
              <button class="promo__slide_btn-next"> <img class="promo__slide_btn-next-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-next.svg"
                  alt="далее"> </button>
            </div>
          </div>
          <div class="promo__nav-btns">
            <a href="#assortment" class="promo__btn-catalog">Каталог</a>
            <button class="btn_modal__form promo__btn-contact">Связаться</button>
          </div>

        </div>
      </div>
    </div>

    <div class="slider__item promo-vape-third" style="background: url(<?php the_field('background_third')?>) center no-repeat; 
    background-size: cover;">
      <div class="container">
        <div class="slider__third">
          <h1 class="promo__head"><?php the_field('promo__head_third') ?></h1>
          <div class="promo__wrapper d-flex j-cont">
            <h4 class="promo__descr-third"><?php the_field('promo_descr_third') ?></h4>
            <div class="promo__slider_nav">
              <button class="promo__slide_btn-back"> <img class="promo__slide_btn-back-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-back.svg"
                  alt="назад"> </button>
              <button class="promo__slide_btn-next"> <img class="promo__slide_btn-next-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-next.svg"
                  alt="далее"> </button>
            </div>
          </div>
          <div class="promo__nav-btns">
            <a href="#assortment" class="promo__btn-catalog">Каталог</a>
            <button class="btn_modal__form promo__btn-contact">Связаться</button>
          </div>
        </div>
      </div>
    </div>

    <div class="slider__item promo-vape-four" style="background: url(<?php the_field('background_four')?>) center no-repeat; 
    background-size: cover;">
      <div class="container">
        <div class="slider__four">
          <h1 class="promo__head"><?php the_field('promo_head_four') ?></h1>
          <div class="promo__wrapper d-flex j-cont">
            <h4 class="promo__descr-third"><?php the_field('promo_descr_four') ?></h4>
            <div class="promo__slider_nav-last">
              <button class="promo__slide_btn-back"> <img class="promo__slide_btn-back-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-back.svg"
                  alt="назад"> </button>
            </div>
          </div>
          <div class="promo__nav-btns">
            <a href="#assortment" class="promo__btn-catalog">Каталог</a>
            <button class="btn_modal__form promo__btn-contact">Связаться</button>
          </div>
        </div>
      </div>

    </div>

  </section>

  <section>
    <div class="container">
      <h2 class="adventages-head"> Наши преимущества </h2>
      <div class="avdentages-items d-flex j-cont f-wrap ">
        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/tasty.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"><?php the_field('adventages_head') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('adventages_descr') ?>
          </div>
        </div>

        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/assortiment.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"> <?php the_field('adventages_head_second') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('adventages_descr_second') ?>
          </div>
        </div>

        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/quality.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"><?php the_field('adventages_head_third') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('adventages_descr_third') ?>
          </div>
        </div>

        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/recommendations.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"><?php the_field('adventages_head_four') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('advenatges_descr_four') ?>
          </div>
        </div>

        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/pod-system.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"><?php the_field('adventages_head_five') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('advenatges_descr_five') ?>
          </div>
        </div>

        <div class="avdentages-item">
          <div class="adventages__item-head d-flex">
            <img class="adventages__item-img" src="<?php echo bloginfo('template_url');?>/assets/img/adventages/tasty.svg" alt="Вкусовая палитра">
            <h4 class="adventages__item-tittle d-flex a-items"><?php the_field('adventages_head_six') ?></h4>
          </div>
          <div class="adventages__item-descr">
          <?php the_field('advenatges_descr_six') ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="tabs__main" id="assortment">
    <div class="container">
      <h2 class="adventages-head"> Ассортимент </h2>

      <div class="tabs">
        <div class="tabs__nav">
          <button class="tabs__nav-btn" type="button" data-tab="#tab_1"><?php the_field('btn_text') ?></button>
          <button class="tabs__nav-btn" type="button" data-tab="#tab_2"><?php the_field('btn_text_second') ?></button>
        </div>
        <div class="tabs__content">
          <div class="tabs__item" id="tab_1">
            <h4 class="tabs__tittle"><?php the_field('card_head') ?></h4>
            <div class="tabs__catalog d-flex j-cont">
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img" src="<?php the_field('card-1-1') ?>" alt="Табак с шоколадом">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img" src="<?php the_field('card-1-2') ?>" alt="Смесь">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img" src="<?php the_field('card-1-3') ?>" alt="Табак с ванилью">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img" src="<?php the_field('card-1-4') ?>" alt="Кокосово-миндальное молоко">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img" src="<?php the_field('card-1-5') ?>" alt="Лимонное пироженное с заварным кремом">
              </div>
            </div>
            <div class="line-with-circles"></div>

            <h4 class="tabs__tittle"><?php the_field('card_head_second') ?></h4>
            <div class="tabs__catalog d-flex j-cont">
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-2-1') ?>" alt="Виноград">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-2-2') ?>" alt="Дыня Лёд">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-2-3') ?>" alt="Маракуйа">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-2-4') ?>" alt="Клубника">
              </div>
              <div class="tabs__catalog-item">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-2-5') ?>" alt="Яблоко">
              </div>
            </div>
            <div class="line-with-circles"></div>

            <div class="mahorka__wrapper">
              <h4 class="tabs__tittle">Mahorka tobacco for man</h4>
              <div class="tabs__catalog-mahorka d-flex">
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-1') ?>" alt="Табак со вкусом крафтового табака">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-2') ?>"
                    alt="Табак со вкусом трубочного табака и вишнёвого сока">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-3') ?>"
                    alt="Табак со вкусом классического табака">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-4') ?>" alt="Табак со вкусом орехового табака">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-5') ?>"
                    alt="Табак со вкусом элитных кубинских сигар">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-6') ?>" alt="Табак со вкусом ванильного табака">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-7') ?>" alt="Табак со вкусом орехового табака">
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img" src="<?php the_field('card-3-8') ?>"
                    alt="Табак со вкусом элитных кубинских сигар">
                </div>
                <div class="tabs__catalog_item-mahorka-hidden">
                  <img class="tabs__catalog-img" src="<?php echo bloginfo('template_url');?>/assets/img/mahorka/smoke5.webp"
                    alt="Табак со вкусом элитных кубинских сигар">
                </div>

              </div>
            </div>
            <div class="line-with-circles"></div>

            <h4 class="tabs__tittle"><?php the_field('card_head_four') ?></h4>
            <div class="tabs__catalog-massons d-flex j-cont">
              <div class="tabs__catalog_item-masons">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-4-1') ?>" alt="Арбуз">
              </div>
              <div class="tabs__catalog_item-masons">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-4-2') ?>" alt="Дыня">
              </div>
              <div class="tabs__catalog_item-masons">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-4-3') ?>" alt="Лавандовый виноград">
              </div>
              <div class="tabs__catalog_item-masons">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-4-4') ?>" alt="Черника">
              </div>
              <div class="tabs__catalog_item-masons">
                <img class="tabs__catalog-img-others" src="<?php the_field('card-4-5') ?>" alt="Яблоко Груша">
              </div>
            </div>

          </div>
        </div>
        <div class="tabs__content-secondtab">
          <div class="tabs__item-second" id="tab_2">
            <div class="mahorka__wrapper">
              <h4 class="tabs__tittle"><?php the_field('card_head_five') ?></h4>
              <div class="tabs__catalog-chillax d-flex">
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-1') ?>"
                    alt="Ледяная голубая малина">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>

                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-2') ?>"
                    alt="Черничный лимонад">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>

                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-3') ?>"
                    alt="Клубника киви">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-4') ?>"
                    alt="Ледяной виноград">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-5') ?>"
                    alt="Ледяной банан">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-6') ?>"
                    alt="Ледяной арбуз">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-5-7') ?>"
                    alt="Энергетик">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax o-hid" src="<?php echo bloginfo('template_url');?>/assets/img/chillax/smoke5.webp"
                    alt="Табак со вкусом элитных кубинских сигар">
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-1') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-1') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-2') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-2') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-3') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-3') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-4') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-4') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-5') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-5') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-6') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-6') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-5-7') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-1-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-1-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-1-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-1-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-1-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-1-7') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="line-with-circles"></div>

            <div class="mahorka__wrapper">
              <h4 class="tabs__tittle"><?php the_field('card_head_six') ?></h4>
              <div class="tabs__catalog-chillax d-flex">
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-1') ?>"
                    alt="Конфета">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-2') ?>"
                    alt="Лимон конфета лёд">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>

                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-3') ?>"
                    alt="манго арбуз">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-4') ?>"
                    alt="Манго лёд">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-5') ?>"
                    alt="Виноград лёд">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-6') ?>"
                    alt="Ежевика">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax" src="<?php the_field('card-6-7') ?>"
                    alt="Клубничный дайкири">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item-mahorka">
                  <img class="tabs__catalog-img-chillax o-hid" src="<?php echo bloginfo('template_url');?>/assets/img/chillax/smoke5.webp"
                    alt="Табак со вкусом элитных кубинских сигар">
                </div>


              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-1') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-1') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-2') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-2') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-3') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-3') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-4') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-4') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-4') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-5') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-5') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-5') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-6') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-6') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-6') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-6-7') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-2-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-2-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-2-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-2-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-2-7') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-2-7') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="line-with-circles"></div>

            <div class="mahorka__wrapper">
              <h4 class="tabs__tittle"><?php the_field('card_head_seven') ?></h4>
              <div class="tabs__catalog-third d-flex j-cont">
                <div class="tabs__catalog_item">
                  <img class="tabs__catalog-img-others" src="<?php the_field('card-7-1') ?>" alt="Арбуз">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item">
                  <img class="tabs__catalog-img-others" src="<?php the_field('card-7-2') ?>" alt="Вишня лайм яблоко">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
                <div class="tabs__catalog_item">
                  <img class="tabs__catalog-img-others" src="<?php the_field('card-7-3') ?>" alt="Лайм Мохито">
                  <div class="tabs__catalog-more">
                    Подробнее
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-7-1') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-3-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-3-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-3-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-3-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-3-1') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-3-1') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-7-2') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-3-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-3-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-3-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-3-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-3-2') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-3-2') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabs__catalog-more-window">
                <div class="tabs__catalog-more-content">
                  <img class="tabs__catalog-more-img-chillax" src="<?php the_field('card-7-3') ?>"
                    alt="Табак со вкусом крафтового табака">
                  <div class="tabs__catalog-more-info">
                    <div class="tabs__catalog-more-text">
                      <p>Способ активации:</p>
                      <p><?php the_field('activ-3-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Ёмкость аккумулятора:</p>
                      <p><?php the_field('accum-3-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Регулировка мощности:</p>
                      <p><?php the_field('power-3-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Доступна RBA база:</p>
                      <p><?php the_field('access-3-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <p>Тип аккумулятора:</p>
                      <p><?php the_field('battery-3-3') ?></p>
                    </div>
                    <div class="tabs__catalog-more-text">
                      <svg width="10" height="10">
                        <path d="M5 0 A5 5 0 0 0 5 10 A5 5 0 0 0 5 0" fill="#AA3399"></path>
                      </svg>
                      <p><?php the_field('have-3-3') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>

    </div>
  </main>

  <section class="new__section" style="background: url(<?php the_field('background_gif')?>) center no-repeat; 
    background-size: cover;" id="promotions">
    <div class="container">
      <div class="new__promo">
        <h2 class="new__promo-title">Хотите попробовать что-то новое?</h2>
        <p class="new__promo-descr">Мы предлагаем широкий выбор <span class="new__promo-span">эксклюзивных <br>
            товаров</span>, которые невозможно найти в других магазинах.</p>
        <button class="btn_modal__form new__promo_btn">Связаться</button>
      </div>
    </div>
  </section>

  <section id="reviews">
    <div class="container-review">
      <div class="feedback__wrapper pos-rlt">
        <h2 class="adventages-head-review"> Отзывы </h2>
        <div class="feedback__reviews">
          <div class="feedback__review"> <img class="feedback__review-img-1" src="<?php the_field('review-1') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-2" src="<?php the_field('review-2') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-3" src="<?php the_field('review-3') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-4" src="<?php the_field('review-4') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-5" src="<?php the_field('review-5') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-6" src="<?php the_field('review-6') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-7" src="<?php the_field('review-7') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-8" src="<?php the_field('review-8') ?>" alt="Отзыв">
          </div>
          <div class="feedback__review"> <img class="feedback__review-img-9" src="<?php the_field('review-9') ?>" alt="Отзыв">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container">
      <h2 class="about-head"> О нас </h2>
      <div class="about__exclusive-wrapper d-flex j-cont ">
        <div class="about__exclusive-brands d-flex f-wrap ">
          <div class="about__exclusive-brand">
            <span class="about__exclusive-num"><?php the_field('num_brand') ?></span>
            <br> <?php the_field('brand_text') ?>
          </div>
          <div class="about__exclusive-brand-twice">
            <span class="about__exclusive-num-twice"><?php the_field('num_system') ?></span>
            <br> <?php the_field('system_text') ?>
          </div>
          <div class="about__exclusive-brand-third">
            <span class="about__exclusive-num-third"><?php the_field('num_count') ?></span>
            <br> <?php the_field('system_text') ?>
          </div>
        </div>
        <div class="about__exclusive-descr">
          <div class="about__exclusive-choose">
            Огромный выбор эксклюзивных, оригинальных испарителей более 25 брендов, которых <span
              class="about__exclusive-span">нет ни у кого на нашем рынке</span>, разработанных и поставляемых на рынки
            Европы, США, Австралии, Канады и ОАЭ. Мы сами выкупаем товар напрямую с фабрики производителя.

          </div>
          <div class="about__exclusive-can">
            С нашими электронными испарителями вы <span class="about__exclusive-span">сможете бросить</span> употреблять
            обычные сигареты и перестать травить себя вредными смолами и продуктами горения, которыми сопровождается
            курение обычных сигарет!
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="contacts">
    <div class="container">
      <h2 class="adventages-head-contact"> Контакты </h2>
      <div class="contacts__wrapper d-flex j-cont">
        <div class="contacts__address d-flex a-items">
          <div class="contacts__addres-social d-flex">
            <a href="<?php the_field('vk-link') ?>"><img class="contacts__addres-social-vk" src="<?php echo bloginfo('template_url');?>/assets/img/social-links/vk.svg" alt="Вконтакте"></a>
            <a href="<?php the_field('wp-link') ?>"><img class="contacts__addres-social-wp" src="<?php echo bloginfo('template_url');?>/assets/img/social-links/watsapp.svg" alt="ВатсАпп"></a>
          </div>
          <div class="contacts__address-contact">
            <a href="tel:79276156483" class="nav_contact-tel"><?php the_field('nav_tel') ?></a>
            <div class="contacts__addres-contact-address">
            <?php the_field('contact_address') ?>
            </div>
          </div>
        </div>
        <div class="contacts__address-work">
          <div class="contacts__address-work-text">Режим работы</div>
          <div class="contacts__address-work-wrapper d-flex ">
            <div class="contacts__address-work-time-day"> <span class="contacts__address-work-time-span">Пн-сб</span>
            <?php the_field('work-time-md') ?> </div>
            <div class="contacts__address-work-time-day"> <span class="contacts__address-work-time-span">Вс</span> <?php the_field('work-time-wk') ?> </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <map name="shop__position">
    <div class="container">
      <div class="shop__position-style">
        <iframe class="shop__position-style"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1194.988236969888!2d50.10071068265199!3d53.20033812643215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41661f918d4136d7%3A0xae10dbfff02064c8!2sParadise!5e0!3m2!1sru!2sru!4v1683629062069!5m2!1sru!2sru"
          width="100%" height="403" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </map>

  <footer class="footer">
    <div class="container">
      <div class="footer__social-links d-flex j-cont">
        <div class="footer__logo">
          <a class="footer__logo-img" href="#">
            <img src="<?php the_field('footer_logo') ?>" alt="Логотип">
          </a>
        </div>
        <div class="footer__addres-social d-flex">
          <a href="<?php the_field('vk-link') ?>"><img class="footer__addres-social-vk" src="<?php echo bloginfo('template_url');?>/assets/img/social-links/vk.svg" alt="Вконтакте"></a>
          <a href="<?php the_field('wp-link') ?>"><img class="footer__addres-social-wp" src="<?php echo bloginfo('template_url');?>/assets/img/social-links/watsapp.svg" alt="ВатсАпп"></a>
        </div>
      </div>
      <div class="footer__text-wrapper d-flex j-cont pos-rlt">
        <div class="footer__text-leftside">
          <div class="footer__text-copyright">
          <?php the_field('author') ?>
          </div>
          <div class="footer__text-div">
            <a class="footer__text-politics" href="https://paradise-samara.ru/policy/">Политика персональных данных</a> <br>
            <div class="footer__text-politics">Не является публичной офертой</div>
          </div>
        </div>
        <div class="footer__text-rightside d-flex">
          <div class="footer__text-descr">
          <?php the_field('danger_text') ?>
          </div>
          <div class="footer__text-age" style="background:<?php the_field('color-circle') ?>;">
            18+
          </div>
          <button class="footer__btn-up"><img class="footer__btn-up-img" src="<?php echo bloginfo('template_url');?>/assets/img/promo-next.svg"
              alt="Кнопка ввёрх"></button>

        </div>
      </div>
      <div class="footer__text-under-wrapper d-flex">
        <div class="footer__text-year">
        <?php the_field('footer_date') ?><sup>&copy;</sup>
        </div>
        <div class="footer__text-danger">
        <?php the_field('danger_textarea') ?>
        </div>
      </div>
    </div>
  </footer>
        
        <?php
            wp_footer();
        ?>
  
</body>

</html>