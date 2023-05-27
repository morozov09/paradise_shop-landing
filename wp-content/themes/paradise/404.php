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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Ошибка 404</title>
    <?php
        wp_head();
    ?>
</head>
<body>
<?php
  require_once "nav.php";
  ?>

<section class="error">
    <div class="error__wrapper">
        <div class="error__text">
            Что-то пошло не так <br> ошибка 404
        </div>
        <div class="error__btn">
            <a class="error__btn-link" href="index.php">Вернуться на главную</a>
        </div>
    </div>
</section>
</body>
</html>