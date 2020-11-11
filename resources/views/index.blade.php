@extends('layouts.custom')

@section('title', 'Веб-студия Gagarin | Разработка и продвижение сайтов')
@section('description', 'Заказать разработку сайта под ключ в Томске. Сайты, которые работают и проносят клиентов!')
@section('keywords', 'gagarin, web-studio, веб-студия, веб студия, гагарин, Томск')
@section('canonical', 'https://gagarin-digital.ru/')
@section('og:title', 'Веб-студия Gagarin | Разработка и продвижение сайтов')
@section('og:description', 'Заказать разработку сайта под ключ в Томске. Сайты, которые работают и проносят клиентов!')
@section('og:url', 'https://gagarin-digital.ru/')
@section('twitter:title', 'Веб-студия Gagarin | Разработка и продвижение сайтов')
@section('twitter:description', 'Заказать разработку сайта под ключ в Томске. Сайты, которые работают и проносят клиентов!')
@section('image', URL::asset('images/og.jpg'))
@section('image-mess', URL::asset('images/og-mess.jpg') )

@section('content')

    <section class="start">
        <div class="container">
            <div class="start__inner">

                <p class="start__suptitle">Веб-студия в Томске</p>
                <h1 class="start__title">Gagarin</h1>
                <a href="#" class="start__btn show__popup">Заказать проект</a>

            </div>
        </div>


        <div class="start__wrapper">
            <div class="start__item">
                <i class="fas fa-code"></i>
                <p class="start__text">Разработка сайтов</p>
            </div>
            <div class="start__item">
                <i class="fas fa-shopping-cart"></i>
                <p class="start__text">Интернет-магазины</p>
            </div>
            <div class="start__item">
                <i class="fas fa-poll-h"></i>
                <p class="start__text">Рекламные кампании</p>
            </div>
            <div class="start__item">
                <i class="fas fa-chart-line"></i>
                <p class="start__text">Продвижение сайтов</p>
            </div>
            <div class="start__item">
                <i class="far fa-image"></i>
                <p class="start__text">Social Media Marketing</p>
            </div>


        </div>

        <img src="{{ URL::asset('images/bg-2.jpg') }}" alt="Gagarin - агенство интернет маркетинга" class="start__img">
    </section>


    @component('components.title')
        @slot('title') Наша веб-студия @endslot
        @slot('subtitle') Кто мы такие & что мы делаем@endslot

    @endcomponent

    <div class="about" id="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__left">
                    <h3 class="about__title">Привет! Мы веб-студия Gagarin</h3>
                    <p class="about__subtitle">Мы находимся в Томске и занимаемся разработкой и продвижением сайтов.</p>
                    <p class="about__text">
                        Мы собрали команду молодых и энергичных людей и занимаемся любимым делом. Кто-то из нас любит "кодить" и целыми
                        днями доводить свой код до совершенства. Кто-то любит писать интересные тексты, наполняя их юмором и уникальной
                        подачей. А кто-то любит делать красивые и уникальные фотографии, разбавляя все это отличным дизайном.
                        Это все мы предлагаем нашим клиентам.

                    </p>
                    <p class="about__text">
                        За 1 год работы нашей команды мы создали больше <b>20</b> сайтов, <b>12</b> из которых прокачали в поиске Яндекс и Google. Преобразили <b>8</b> инстаграм аккаунтов, сделав их
                        привлекательными и настроили <b>целую кучу</b> рекламных кампаний в Яндекс, Google, Facebook и Instagram.
                    </p>


                </div>
                <div class="about__right">
                    <div class="about__item">
                        <p class="about__number">01.</p>
                        <h4 class="about__item-title">Качество</h4>
                        <p class="about__item-text">Мы следим за качеством сделанных нами сайтов не только с пользовательской стороны, но и внутри. Наши сайты
                        не содержат ошибок!</p>

                    </div>
                    <div class="about__item">
                        <p class="about__number">02.</p>
                        <h4 class="about__item-title">Нет шаблонам</h4>
                        <p class="about__item-text">
                            Мы не используем одинаковые шаблоны и не продаем уже готовые сайты с измененным дизайном. Каждый сайт написан нами от начала и до конца.
                        </p>

                    </div>
                    <div class="about__item">
                        <p class="about__number">03.</p>
                        <h4 class="about__item-title">Выгодные вложения</h4>
                        <p class="about__item-text">Сайты, которые мы разрабатываем, даже при минимальных вложениях, окупаются и приносят прибыль.</p>

                    </div>
                    <div class="about__item">
                        <p class="about__number">04.</p>
                        <h4 class="about__item-title">Уникальность</h4>
                        <p class="about__item-text">Даже самый простой сайт будет уникальным. Уникальный контент - лучший способ продвижения сайта. </p>

                    </div>

                </div>


            </div>
        </div>
    </div>


    @component('components.title')
        @slot('title') Наши работы @endslot
        @slot('subtitle') Некоторые наши кейсы @endslot

    @endcomponent

    <div class="portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="portfolio__inner">

                <div class="portfolio__item">
                    <a href="https://prorab70.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/1.png') }}" alt="разработка сайта по ремонту квартир" class="portfolio__img">
                </div>


                <div class="portfolio__item">
                    <a href="https://www.energym-tomsk.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/2.png') }}" alt="Разработка сайта тренажерного зала" class="portfolio__img">
                </div>


                <div class="portfolio__item">
                    <a href="https://jennyshowroom.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/3.png') }}" alt="Разработка интернет магазина" class="portfolio__img">
                </div>


                <div class="portfolio__item">
                    <a href="https://avtodrug70.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/4.png') }}" alt="Разработка сайта автомастерской" class="portfolio__img">
                </div>


                <div class="portfolio__item">
                    <a href="https://as70tomsk.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/5.png') }}" alt="Разработка сайта строительной компании" class="portfolio__img">
                </div>


                <div class="portfolio__item">
                    <a href="https://lombardvtomske.ru/" target="_blank">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    <img src="{{ URL::asset('images/portfolio/6.png') }}" alt="Разработка сайта ломбарда" class="portfolio__img">
                </div>

            </div>
        </div>
    </div>

    @component('components.title')
        @slot('title') Услуги @endslot
        @slot('subtitle') Как мы можем быть полезны для вас@endslot

    @endcomponent
    <div class="uslugi">
        <div class="container">
            <div class="uslugi__inner">
                <div class="uslugi__left">
                    <h3 class="uslugi__title">Разработка сайтов под ключ</h3>
                    <p class="uslugi__subtitle">Мы оказываем целый комплекс услуг, связанных с продвижением сайтов.</p>
                    <p class="uslugi__text-left">
                        Недостаточно просто сделать сайт и оставить его висеть в интернете в надежде что клиенты сами придут. Это главная ошибка всех предпринимателей,
                        которые задумались о разработке сайта. При таком подходе ваш сайт будет висеть балластом на последних страницах поисковой выдачи и ни один клиент не
                        найдет его. Для того, чтобы не терять деньги впустую, мы оказываем услуги по продвижению сайтов в поисковых системах и оптимизации скорости их
                        загрузки.
                    </p>
                    <div class="uslugi__row">

                        <div class="uslugi__item">
                            <i class="fas fa-code"></i>
                            <div class="uslugi__wrap">
                                <p class="uslugi__item-title">Разработка сайтов</p>
                                <p class="uslugi__item-description">Все наши сайты уже оптимизированы для SEO и имеют возможность дальнейшего расширения под нужды вашего бизнеса.</p>

                            </div>
                        </div>
                        <div class="uslugi__item">
                            <i class="fas fa-chart-line"></i>
                            <div class="uslugi__wrap">
                                <p class="uslugi__item-title">SEO</p>
                                <p class="uslugi__item-description">Продвижение сайта в поисковой выдаче это один из важнейших моментов при создании сайта. </p>

                            </div>
                        </div>
                        <div class="uslugi__item">
                            <i class="fas fa-chart-bar"></i>
                            <div class="uslugi__wrap">
                                <p class="uslugi__item-title">Рекламная кампания</p>
                                <p class="uslugi__item-description">Для того, чтобы привлечь первых клиентов из интернета, пока специалисты "прокачивают" сайт в органической выдаче.
                                Или можно сочетать два инструмента, SEO и рекламу.
                                </p>

                            </div>
                        </div>
                        <div class="uslugi__item">
                            <i class="fas fa-cogs"></i>
                            <div class="uslugi__wrap">
                                <p class="uslugi__item-title">Техническая поддержка</p>
                                <p class="uslugi__item-description">
                                    Каждый сайт нуждается в правках, ведь информация на нем устаревает или становится неактуальной. Мы вносим небольшие правки в
                                    сайт абсолютно бесплатно.
                                </p>

                            </div>
                        </div>


                    </div>
                    <div class="uslugi__btn-wrapper">
                        <a href="#" class="btn uslugi__btn show__popup">Заказать услугу</a>
                    </div>

                </div>
                <div class="uslugi__right">


                    <div class="uslugi__card">

                        <div class="uslugi__front">

                            <h3 class="uslugi__card-title">SEO аудит сайта</h3>

                            <p class="uslugi__text">Проверьте свой сайт бесплатно</p>

                        </div>

                        <div class="uslugi__back">
                            <p class="uslugi__text">
                                Если у вас уже есть готовый сайт, но он не приносит траффика - самое время заказать его бесплатный SEO-аудит. Наши
                                специалисты проверят его реализацию и возможность SEO настроек. Как показывает практика, любой сайт можно оптимизировать
                                для поисковых систем!

                            </p>


                        </div>
                        <img class="uslugi__img" src="{{ URL::asset('images/1.jpg') }}" alt="">
                    </div>
                    <div class="uslugi__card">

                        <div class="uslugi__front">

                            <h3 class="uslugi__card-title">Техический аудит сайта</h3>

                            <p class="uslugi__text">Сайт плохо работает?</p>

                        </div>

                        <div class="uslugi__back">
                            <p class="uslugi__text">
                                Это еще один повод воспользоваться бесплатной услугой наших специалистов и оценить насколько качественно был сделан ваш сайт
                                и соответствует ли он всем требованиям к современным сайтам. Ошибки в коде так же могут влиять и на выдачу сайта поисковыми
                                системами. Закажите бесплатный аудит!

                            </p>


                        </div>
                        <img class="uslugi__img" src="{{ URL::asset('images/2.jpg') }}" alt="">
                    </div>

                </div>

            </div>
        </div>
    </div>


    @component('components.title')
        @slot('title') Цены @endslot
        @slot('subtitle') Цены ниже. Сервис лучше.@endslot

    @endcomponent


    <div class="price" id="price">
        <div class="container">
            <div class="price__inner">

                <div class="price__item">
                    <h3 class="price__title">Сайты</h3>
                    <div class="price__wrapper">
                        <p class="price__price">от 5000 <i class="fas fa-ruble-sign"></i></p>
                        <div class="price__date">3-5 дней</div>
                    </div>
                    <p class="price__description">
                        Минимальная стоимость разработки статичного сайта без админ-панели.
                    </p>
                    <div class="price__list">
                        <p class="price__li">От 3 страниц</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Стандартный дизайн</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Хостинг и домен</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">СЕО настройки</p><i class="fas fa-check"></i>
                    </div>


                    <a href="#" class="btn price__btn show__popup">Заказать</a>

                </div>
                <div class="price__item">
                    <h3 class="price__title">СЕО</h3>
                    <div class="price__wrapper">
                        <p class="price__price">от 3000 <i class="fas fa-ruble-sign"></i></p>
                        <div class="price__date">3-7 дней</div>
                    </div>
                    <p class="price__description">
                        Сбор семантического ядра и углубленная настройка СЕО на вашем сайте.
                    </p>
                    <div class="price__list">
                        <p class="price__li">От 1 страницы</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Подбор фотографий</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Настройка сниппета</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Отображение в соцсетях</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Уникальные метатеги</p><i class="fas fa-check"></i>
                    </div>

                    <a href="#" class="btn price__btn show__popup">Заказать</a>

                </div>
                <div class="price__item">
                    <h3 class="price__title">Реклама</h3>
                    <div class="price__wrapper">
                        <p class="price__price">от 3000 <i class="fas fa-ruble-sign"></i></p>
                        <div class="price__date">1-3 дня</div>
                    </div>
                    <p class="price__description">
                        Сбор семантического ядра и настройка рекламной кампании по улючевым запросам.
                    </p>
                    <div class="price__list">
                        <p class="price__li">От одной рекламной кампании</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Сопровождение рекламы</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Навтройка рекламной выдачи</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Снижение цены клика</p><i class="fas fa-check"></i>
                    </div>
                    <div class="price__list">
                        <p class="price__li">Ретаргет и реклама в РСЯ</p><i class="fas fa-check"></i>
                    </div>

                    <a href="#" class="btn price__btn show__popup">Заказать</a>

                </div>

            </div>
        </div>
    </div>

    @component('components.title')
        @slot('title') Новости и акции @endslot
        @slot('subtitle')@endslot

    @endcomponent

    <div class="news">
        <div class="container">
            <div class="news__inner">
                


                <div class="news__row">

                    @foreach ($stocks as $stock)

                    <a href="{{  url('/shares').'/'.$stock->slug }}" class="news__item" target="_blank">
                        <div class="news__category" style="background-color: {{ $stock->color }}">{{ $stock->type }}</div>
                        <div class="news__wrap">
                            <img src="{{ Storage::url($stock->image) }}" alt="{{ $stock->title }}" class="news__img">    
                        </div>
                        
                        <h3 class="news__title">{{ $stock->title }}</h3>
                        <p class="news__desc">{{ $stock->description }}</p>
                    </a>
                    @endforeach
                    @foreach ($news as $new)

                    <a href="{{  url('/news').'/'.$new->slug }}" class="news__item" target="_blank">
                        <div class="news__category" style="background-color: {{ $new->color }}">{{ $new->type }}</div>
                        <div class="news__wrap">
                            <img src="{{ Storage::url($new->image) }}" alt="{{ $new->title }}" class="news__img">    
                        </div>
                        
                        <h3 class="news__title">{{ $new->title }}</h3>
                        <p class="news__desc">{{ $new->description }}</p>
                    </a>
                    @endforeach



                    


                    
                </div>

                <div class="news__btn-wrap">
                    <a href="{{ url('/news') }}" class="btn news__btn">Смотреть все новости</a>
                    <a href="{{ url('/shares') }}" class="btn news__btn">Смотреть все акции</a>

                </div>

            </div>
        </div>
    </div>


@endsection
