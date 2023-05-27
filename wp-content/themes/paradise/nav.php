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
