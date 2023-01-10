<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicon/favicon.png">
  <link rel="stylesheet" href="./public/styles/css/styles.css?time=<?php echo e(time()); ?>">
    <link rel="stylesheet" href="./public/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/styles/css/scrollbar.css">
    <link rel="stylesheet" href="./public/styles/css/my.css"> 
     
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>IT-Rising Reworked</title>
</head>

<body>
    <!-- Начало Хэдэра -->
    <header class="header header-background">
        <!-- Навигация -->
        <div class="header-navigation container">
            <nav>
                <ul class="ul-navigation-logo">
                    <li><a href="./index.html">
                            <img src="./public/img/header-images/logo.png" alt="Logo">
                        </a></li>
                </ul>
                <ul class="ul-navigation-list">
                    <li><a href="<?php echo e(asset('/')); ?>">Главная</a></li>
                    <li><a href="<?php echo e(asset('/choose_lang')); ?>">Сайты-тренажёры</a></li>
                    <li><a href="<?php echo e(asset('/#faq')); ?>">FAQ</a></li>
                    <li><a href="<?php echo e(asset('/login')); ?>">Вход</a></li>
                </ul>
                <ul class="ul-navigation-button">
                    <li><a href="mailto: wshystko@mail.ru" target="_blank">Задать вопрос</a></li>
                </ul>
            </nav>
        </div>
        <?php echo $__env->yieldContent('welcome'); ?>
    </header>
    <!-- Начало Мэйна -->
    <main class="main main-choose-language container" id="choose-prog-lang">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- Футер -->
    <footer class="footer footer-background">
        <div class="footer-splitter">
            <p style="visibility: hidden">hidden btw :D</p>
        </div>
        <div class="footer-navigation">
            <nav>
                <ul class="ul-footer-navigation-logo">
                    <li><a href="./index.html">
                            <!-- <img src="./img/header-images/logo.png" alt="Logo"> -->
                            <img class="image-logo__styles" src="./public/img/footer-images/logo.png" alt="Logo" width="30px" height="32px">
                            <div class="logo__styles-text">
                                <h1 class="h1-logo__styles">IT<span>-</span>Rising</h1>
                                <h2 class="h2-logo__styles">Learn <span>IT</span> at ease</h2>
                            </div>
                        </a></li>
                </ul>
                <ul class="ul-footer-navigation-list">
                    <li><a href="<?php echo e(asset('/')); ?>">Главная</a></li>
                    <li><a href="<?php echo e(asset('/choose_lang')); ?>">Сайты-тренажёры</a></li>
                    <li><a href="<?php echo e(asset('/#faq')); ?>">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="./public/scripts/accordion.js"></script>
</body>

</html><?php /**PATH C:\OSPanel\domains\laravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>