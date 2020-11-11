<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">

                <a href="{{ url('/') }}" class="footer__logo-link">
                    <p class="footer__logo">Gagarin</p>
                </a>

                <p class="footer__text-left">
                    Разработка сайтов в Томске
                </p>

                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-phone"></i>
                    <a href="tel:83822300386" class="footer__contacts-link">+7 (952) 150 70-46</a>
                </div>
                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-clock-o"></i>
                    <p class="footer__contacts-text">Пн-Вс: 08:00 - 20:00</p>
                </div>
                {{--                <div class="footer__contacts-wrapper">--}}
                {{--                    <i class="icon fa fa-location-arrow"></i>--}}
                {{--                    <a href="#" class="footer__contacts-link">4730 Crystal Springs Dr, Los Angeles, CA 90027</a>--}}
                {{--                </div>--}}

            </div>
            <div class="footer__column">
                <p class="footer__title">Оставить заявку</p>
                <p class="footer__subtitle">Оставьте Ваш номер телефона и мы Вам перезвоним</p>
                <form action="{{ url('/sendemail/send') }}" method="post">
                    {{ csrf_field() }}
                    <input type="tel" class="footer__input" name="tel" placeholder="+7 999 999 99-99" required>
                    <button class="footer__btn">Отправить</button>
                </form>

                <div class="footer__follow">
                    <p class="footer__follow-text">Мы в соцсетях:</p>

                    <a href="#" class="footer__follow-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-vk"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-facebook-f"></i></a>




                </div>


            </div>
            <div class="footer__column footer__column-menu">
                <p class="footer__title">Меню</p>
                <div class="footer__link-wrapper">

                    <div>
                        <a href="{{ url('/') }}" class="footer__menu-link">Главная</a>
                    </div>
                    <div>
                        <a href="{{ url('/stroitelstvo/doma-iz-brusa') }}" class="footer__menu-link">Сайты</a>
                    </div>
                    <div>
                        <a href="{{ url('/stroitelstvo/karkasnye-doma') }}" class="footer__menu-link">SEO</a>
                    </div>
                    <div>
                        <a href="{{ url('/stroitelstvo/derevyannye-bani') }}" class="footer__menu-link">Реклама</a>
                    </div>


                    <div>
                        <a href="{{ url('/stolyarnaya-masterskaya') }}" class="footer__menu-link">Контакты</a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</footer>

