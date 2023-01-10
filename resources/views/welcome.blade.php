@extends('layouts.base')
@section('welcome')
<!-- Шоукейс аля большой приветственный экран -->
<div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Начните изучать программирование прямо сейчас!</h1>
                <p class="header-showcase-text-descr">Портал IT-Rising - это навигатор в мире IT. Мы подобрали для вас
                    самые интересные и прорывные сайты, для отработки ваших теоретический и практических навыков
                    программирования. Для перехода к выбору языка нажмите кнопку ниже.</p>
                <a href="{{asset('/choose_lang#choose-prog-lang')}}" class="header-showcase-text-button">Начать</a>
            </div>
            <div class="header-showcase-link">
                <div class="header-showcase-link-image">
                    <img src="./public/img/header-images/navigation-showcase/navig-showcase-image.png" alt="Showcase Image">
                </div>
                <div class="header-showcase-link-icons">
                    <ul class="ul-header-showcase-icons">
                        <li><a href="#"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Telegram-icon.png"
                                    alt="Telegram icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/GitHub-icon.png"
                                    alt="GitHub icon"></a></li>
                        <li><a href="#"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Vkontakte-icon.png"
                                    alt="Vkontakte icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Instagram-icon.png"
                                    alt="Instagram icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
@section('content')
<!-- Блок с преимуществами -->
<div class="main-advantages container">
            <div class="main-advantages-text">
                <h1 class="h1-main-advantages-text">Наши Преимущества</h1>
                <p class="p-main-advantages-text">То, чем мы особо гордимся</p>
            </div>
            <div class="main-advantages-cards container">
                <div class="row">
                    <div class="col-md-4 main-advantages-cards-column">
                        <p class="image-main-advantage-column"><img
                                src="./public/img/main-images/advantages/monitoring-icon.png" alt="Monitoring-icon"></p>
                        <h2 class="h2-main-advantages-cards">Мониторинг 24/7</h2>
                        <p class="p-main-advantages-cards">Мы постоянно отслежиавем выходы новых и интересных тренингов,
                            так что вам всегда будет где отработать ваши навыки!</p>
                    </div>
                    <div class="col-md-4 main-advantages-cards-column">
                        <p class="image-main-advantage-column"><img
                                src="./public/img/main-images/advantages/uniqueness-icon.png" alt="Uniqueness-icon"></p>
                        <h2 class="h2-main-advantages-cards">Мы - первые!</h2>
                        <p class="p-main-advantages-cards">IT-Rising это первый проект в своем роде в мире! Мы
                            предоставляем вам список самых востребованых тренажеров со всего интернета!</p>
                    </div>
                    <div class="col-md-4 main-advantages-cards-column">
                        <p class="image-main-advantage-column"><img
                                src="./public/img/main-images/advantages/coding-language-icon.png" alt="Prog-lang-icon"></p>
                        <h2 class="h2-main-advantages-cards">Поддержка более 5 ЯП</h2>
                        <p class="p-main-advantages-cards">У нас уже имеется поддержка более 5 языков программирования:
                            JS, PHP, C++, PYTON, C#, HTML/CSS и мы не планируем останавливаться!</p>
                    </div>
                </div>
            </div>
            <div class="main-advantages-service">
                <!-- большие блоки с преимуществами-->
                <div class="main-advantages-service-time">
                    <div class="main-advantages-service-time-text">
                        <h3 class="h3-main-advantages-service-time-text__styles">Мы экономим ваше время!</h3>
                        <p class="p-main-advantages-service-time-text__styles">Благодаря проекту IT-Rising время,
                            которое вы бы потратили занимаять поиском IT-порталов с нужной вам информацией, теперь может
                            быть направлено непосредственно на изучение выбранного вами языка программирования, ведь мы
                            все нашли за вас!!</p>
                    </div>
                    <div class="main-advantages-graph">
                        <p class="p-main-advantages-first-graph">Затраты времени на поиск и изучение при использовании
                            IT-Rising:</p>
                        <div class="main-advantages-graph-details">

                            <img class="img-main-advantages-graph-details"
                                src="./public/img/main-images/advantages/first-graph.png" alt="Time graph 1" width="267px">

                            <div class="main-advantages-graph__presentage">
                                <div class="main-advantages-graph-learning main-advantages-graph__styles">
                                    <h4 class="h4-main-advantages-graph-learning">90%</h4>
                                    <p class="p-main-advantages-graph-learning">Изучение</p>
                                </div>
                                <div class="main-advantages-graph-searching main-advantages-graph__styles">
                                    <h4>10%</h4>
                                    <p>Поиск</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="main-advantages-quality">

                    <div class="main-advantages-quality-image">
                        <img class="img-main-advantages-quality" src="./public/img/main-images/advantages/second-graph.png"
                            alt="Quality graph">
                        <p class="p-main-advantages-quality">IT-Rising</p>
                    </div>

                    <div class="main-advantages-service-quality-text">
                        <h3 class="h3-main-advantages-quality-text">Мы предоставляем только высококачественные
                            тренажёры!</h3>
                        <p class="p-main-advantages-quality-text">У нас собраны только самые интересные и качественные
                            тренажёры. Тут вы не найдете бесполезной и совершенно ненужной информации!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Блок с переходом к тренажерам -->
        <div class="main-start-learning">
            <h3 class="h3-main-start-learning-title">Уже не терпится начать?</h3>
            <div class="main-start-learning-cards container">
                <div class="row">
                    <div class="col-md-3 start-learning-cards">
                        <p class="img-start-learning-cards">
                            <img src="./public/img/main-images/start-learning/Link-icon.png" alt="Cursor icon">
                        </p>
                        <h4 class="h4-start-learning-cards">Переходите к выбору яп по <span>ссылке</span> ниже</h4>
                    </div>
                    <div class="col-md-3 start-learning-cards">
                        <p class="img-start-learning-cards">
                            <img src="./public/img/main-images/start-learning/click-icon.png" alt="Click icon">
                        </p>
                        <h4 class="h4-start-learning-cards">Выбирайте нужный вам <span>тренажёр</span></h4>
                    </div>
                    <div class="col-md-3 start-learning-cards">
                        <p class="img-start-learning-cards">
                            <img src="./public/img/main-images/start-learning/selebration-icon.png" alt="Selebration Icon">
                        </p>
                        <h4 class="h4-start-learning-cards"><span>Наслаждайтесь</span> комфортным изучением</h4>
                    </div>
                </div>
            </div>
            <p class="button-main-start-learning"><a href="{{asset('/choose_lang#choose-prog-lang')}}">Начать</a></p>
        </div>
        <!-- Блок с часто задаваемыми вопросами -->
        <div class="main-faq container" id="faq">
            <div class="main-faq-title">
                <h4 class="h4-main-faq-title">FAQ</h4>
                <p class="p-main-faq-title">Часто задаваемые вопросы</p>
            </div>

            <div class="main-faq-questions">
                <button class="main-faq-accordion">Q: Как работает прокт IT-Rising?</button>
                <div class="main-faq-answers">
                    <p>A: Проект IT-Rising абсолютно бесплатный навигатор в мире IT. Мы для вас подобрали и подготовили
                        десятки тренажеров, статей, фреймворков и многого другого. Вам лишь нужно выбрать язык и
                        подходящий вам тренажёр и все, просторы для изучения языка программирвоания открыты перед вами!
                    </p>
                </div>

                <button class="main-faq-accordion">Q: Что делать если не нашли нужного языка программирования?</button>
                <div class="main-faq-answers">
                    <p>A: Если вы вдруг не нашли нужного языка программирования не беспокойтесь, если это один из
                        популярных языков, то в скорем времени он появится на нашем сайте. Если вы хотите ускорить этот
                        процесс, или же ваш язык не настолько популярен, то можете поспользоваться ответом на вопрос:
                        Хочу предложить новый тренажёр, куда писать?</p>
                </div>
                <!-- Аккордeон -->
                <button class="main-faq-accordion">Q: Хочу предложить новый тренажёр, куда писать?</button>
                <div class="main-faq-answers">
                    <p>A: Если вы знаете какой-то крутой и очень полезный IT тренажер, то в таком случае можете написать
                        нам на почту (Кнопка "Задать вопрос"). Вы будите переадресованы на почту Gmail, где вам
                        останется только написатть, какой тренажер вы хотели бы видеть на сайте, или же задать любой
                        интересующий вас вопрос.</p>
                </div>

                <button class="main-faq-accordion">Q: Какие языки программирования планируется добавить на
                    сайт?</button>
                <div class="main-faq-answers">
                    <p>A: В данный момент в планах находятся такие языки и фреймвоки как: Java, C ,ReactJS, TailwindCSS.
                        Но этот список будет постоянно расширяться, а тренажёры пополняться. Так что запасайтесь
                        терпением и ожидайте, ведь вдруг ваш любимый язык программирования появится совсем скоро? :)</p>
                </div>

                <button class="main-faq-accordion">Q: Планируется ли переводить сайт на другие языки?</button>
                <div class="main-faq-answers">
                    <p>A: Да, если наш проект окажется по истине полезным и как юные,так и продвинутые програмисты будут
                        пользоваться нашим ресурсом, то мы будем переводить наш сайт как минимум еще на Английский язык,
                        чтобы нашим порталом могли пользоваться люди со всего мира!</p>
                </div>
            </div>
        </div>
@endsection