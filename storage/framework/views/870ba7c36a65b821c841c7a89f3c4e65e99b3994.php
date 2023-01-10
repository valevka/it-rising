
<?php $__env->startSection('welcome'); ?>
        <!-- Шоукейс аля большой приветственный экран -->
        <div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Тренажёры по HTML & CSS</h1>
                <p class="header-showcase-text-descr">HTML (Hypertext Markup Language) - это код, который используется
                    для структурирования и отображения веб-страницы и её контента. Например, контент может быть
                    структурирован внутри множества параграфов, маркированных списков или с использованием изображений и
                    таблиц данных. HTML не является языком программирования; это язык разметки, и используется, чтобы
                    сообщать вашему браузеру, как отображать веб-страницы, которые вы посещаете. Он может быть сложным
                    или простым, в зависимости от того, как хочет веб-дизайнер.
            </div>
            <div class="header-showcase-link">
                <div class="header-showcase-link-image">
                    <img src="<?php echo e(asset('/public/img/header-images/navigation-showcase/navig-showcase-image.png')); ?>"
                        alt="Showcase Image">
                </div>
                <div class="header-showcase-link-icons">
                    <ul class="ul-header-showcase-icons">
                        <li><a href="#"><img
                                    src="<?php echo e(asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Telegram-icon.png')); ?>"
                                    alt="Telegram icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="<?php echo e(asset('/public/img/header-images/navigation-showcase/sosial-media-icons/GitHub-icon.png')); ?>"
                                    alt="GitHub icon"></a></li>
                        <li><a href="#"><img
                                    src="<?php echo e(asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Vkontakte-icon.png')); ?>"
                                    alt="Vkontakte icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="<?php echo e(asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Instagram-icon.png')); ?>"
                                    alt="Instagram icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
         <div class="main-lang-pg__cards container">

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/codingame-logo.svg')); ?>" alt="CodinGame" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>CodinGame</h4>
                        <p>ENG</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Codingame — еще одна популярная браузерная игра, одним из главных преимуществ которой
                            является поддержка огромного количества языков (более 25), включая Java, C#, Python,
                            JavaScript, Lua, Go, Rust и другие. Предлагает достаточно разнообразные тематические задачи
                            и паззлы, решать которые, как раз благодаря их разнообразию, не надоедает. Еще одной сильной
                            стороной Codingame является мультиплеер — играть можно с друзьями и коллегами, по игре также
                            регулярно проводятся международные соревнования.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://www.codingame.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/flexfroggy-logo.png')); ?>" alt="FlexBoxFroggy"
                        width="300px" height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>FlexBox Froggy</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Добро пожаловать в Flexbox Froggy. Игра, в которой тебе нужно помочь лягушонку Фроги и его
                            друзьям написанием CSS кода! Эта игра имеет 24 уровня разной сложности и поможет вам
                            овладеть flex'ами на довольно высоком уровне. В игре присутствует Русский язык, что упростит
                            обучение для тех, кто не знает Английский язык.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://flexboxfroggy.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/cssdinner-logo.png')); ?>" alt="CSS Dinner" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>CSS Dinner</h4>
                        <p>ENG</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>CSS Diner — отличнейшая и нагляднейшая игра, обучающая работе с CSS-селекторами. Ваша задача
                            — с помощью подходящих селекторов выбрать либо тарелки, либо лежащие на них фрукты. В игре
                            26 уровней, в которых селекторы постепенно усложняются. Всё начинается с простых селекторов
                            по тeгам и по классам, а закачивается сложными структурными селекторами наподобие
                            :nth-last-of-type и их комбинациями. Очень крутая игра. Мы уже прошли, а вы сможете?</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://flukeout.github.io/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/htmlbook-logo.jpg')); ?>" alt="HTML BOOK" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>HTML Book</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Для начинающего, который только-только начал изучать программирование, сайт HTML Book очень
                            сильно облегчит задачу. Сайт интуитивно понятен и все рассортировано в алфавитном порядке,
                            найти тот или иной атрибут, тег о котором нужно получить информацию не составляет труда.
                            Также на Htmlbook есть раздел практики который может помочь новичкам в решение тех или иных
                            задач. Все расписано до мельчайших подробностей. Это действительно помогает изучать
                            начинающим веб-программистам языки не платя за различные курсы.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="http://htmlbook.ru/" target="_blank" uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/mdn-logo.png')); ?>" alt="MDN" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>MDN</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Сайт веб-документации MDN - это развивающаяся платформа для обучения Веб-технологиям и
                            программному обеспечению, на которых основан Веб, включая: Веб-стандарты, например, CSS,
                            HTML и JavaScript, а так же разработку открытых веб-приложений. Миссия MDN очень проста: это
                            предоставление законченной, точной и полезной документации для всего, что хоть как-то
                            относится к Открытому Интернету, и не важно является ли это программным обеспечением от
                            Mozilla или нет. Если есть открытая технология, относящаяся к Web, мы хотим
                            задокументировать её.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://developer.mozilla.org/ru/docs/Web" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="<?php echo e(asset('/public/img/main-images/training-previews/codebasics-logo.png')); ?>" alt="Code Basics"
                        width="300px" height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>Сode Basics</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Это полностью бесплатная платформа для изучения основ программирования с нуля. Code Basics
                            был создан разработчиками и сообществом Хекслет для того, чтобы любой желающий мог
                            попробовать себя в программировании и заложить правильный фундамент для новой профессии,
                            основанный не на запоминании специфики, а на понимании системы в целом. Вы можете
                            познакомиться с основами языков JavaScript, PHP, Java, Python, Ruby, Racket, в процессе
                            доработки – Elixir и Go. Также на Code Basics доступны курсы по HTML и CSS.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://ru.code-basics.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="main-cards__other-cards">
                <p>На данный момент это все, но вы можете посмотреть другие сайты-тренажёры перейдя по <a
                        href="<?php echo e(asset('/choose_lang#choose-prog-lang')); ?>">ссылке</a>.</p>

            </div>
        </div>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/html.blade.php ENDPATH**/ ?>