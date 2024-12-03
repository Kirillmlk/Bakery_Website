<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Bakery</title>
</head>
<body>

<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">Bakery</a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__items">
                    <a href="#home" class="nav__link active-link ">Home</a>
                </li>

                <li class="nav__items">
                    <a href="#new" class="nav__link">News</a>
                </li>

                <li class="nav__items">
                    <a href="#about" class="nav__link">About us</a>
                </li>

                <li class="nav__items">
                    <a href="#favorite" class="nav__link">Favorites</a>
                </li>

                <li class="nav__items">
                    <a href="#visit" class="nav__link">Location</a>
                </li>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>

            <img src="assets/img/bread-4.png" alt="image" class="nav__img-1">
            <img src="assets/img/bread-1.png" alt="image" class="nav__img-2">
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </nav>
</header>

<!--==================== MAIN ====================-->
<main class="main">


    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <img src="assets/img/home-bg.jpg" alt="image" class="home__bg">
        <div class="home__shadow"></div>

        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Select The Best <br> Quality Breads
                </h1>
                <a href="#" class="button">Select Breads</a>

                <img src="assets/img/bread-1.png" alt="image" class="home__bread">
            </div>

            <div class="home__image">
                <img src="assets/img/home-bread.png" alt="image" class="home__img">
            </div>
            <footer class="home__footer">
                <div class="home__location">
                    <i class="ri-map-pin-line"></i>
                    <span>AV. The Sun #321 <br> Lima Peru</span>
                </div>
                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="ri-facebook-circle-line"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>
            </footer>
        </div>
    </section>


    <section class="new section" id="new">
        <h2 class="section__title">New Breads</h2>

        <div class="new__container container grid">
            <div class="new__content grid">
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Rye Bread</h2>
                        <p class="new__description">
                            Baked with healthy, gluten-free
                            sourdough for good nutrition.
                        </p>
                    </div>

                    <img src="assets/img/new-bread-1.png" alt="img" class="new__img">
                </article>
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Whole Grain Bread</h2>
                        <p class="new__description">
                            Crispy and homemade prepared
                            from organic yeast-free flour.
                        </p>
                    </div>

                    <img src="assets/img/new-bread-2.png" alt="img" class="new__img">
                </article>
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Multigrain Bread</h2>
                        <p class="new__description">
                            Tasty and made with different
                            natural grains from the countryside.
                        </p>
                    </div>

                    <img src="assets/img/new-bread-3.png" alt="img" class="new__img">
                </article>
            </div>
            <a href="#" class="new__button button">See More Breads</a>
        </div>
    </section>


    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data ">
                <h2 class="section__title">About Us</h2>
                <p class="about__description">
                    We prepare all types of bread that are made at home,
                    maintaining the tradition of using only the best
                    ingredients made with local products whenever possible.
                    We have an extensive line of freshly prepared bakery
                    and coffee products.
                </p>

                <a href="" class="button">Know More</a>

                <img src="assets/img/bread-2.png" alt="image" class="about__bread">
            </div>

            <img src="assets/img/about-bread.png" alt="image" class="about__img">
        </div>
    </section>


    <section class="favorite section" id="favorite">
        <h2 class="section__title">Customer Favorites</h2>

        <div class="favorite__container container grid">
            <article class="favorite__card">
                <img src="assets/img/favorite-bread-1.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Whole Grain</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$6.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img src="assets/img/favorite-bread-2.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Rye</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$8.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img src="assets/img/favorite-bread-3.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">White</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$3.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img src="assets/img/favorite-bread-4.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Multigrain</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$5.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img src="assets/img/favorite-bread-5.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Sourdough</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$7.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>

            <article class="favorite__card">
                <img src="assets/img/favorite-bread-6.png" alt="image" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">French</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$3.00</h3>
                </div>

                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
        </div>

    </section>


    <section class="visit section" id="visit">
        <div class="visit__container">
            <img src="assets/img/visit-bg.jpg" alt="image" class="visit__bg">
            <div class="visit__shadow"></div>

            <div class="visit__content container grid">
                <div class="visit__data">
                    <h2 class="section__title">Visit Us</h2>

                    <p class="visit__description">
                        Discover the best bread, we look forward
                        to your visit.
                    </p>

                    <a href="#" class="button">See Location</a>
                </div>
            </div>
        </div>
    </section>
</main>


<footer class="footer">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="footer__logo">Bakery</a>
            <p class="footer__description">
                We make the best dread <br> in the city
            </p>
        </div>

        <div class="footer__content grid">
            <div>
                <h3 class="footer__title">Address</h3>
                <ul class="footer__list">
                    <li>
                        <address class="footer__info">AV. The Sun #312 <br> Lima Peru</address>
                    </li>
                    <li>
                        <address class="footer__info">9AM - 11PM</address>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Contact Me</h3>
                <ul class="footer__list">
                    <li>
                        <address class="footer__info">bakery@email.com</address>
                    </li>
                    <li>
                        <address class="footer__info">+51 986 562 332</address>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Follow Us</h3>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="ri-facebook-circle-line"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <img src="assets/img/bread-4.png" alt="image" class="footer__img-1">
        <img src="assets/img/bread-3.png" alt="image" class="footer__img-2">
    </div>

    <span class="footer__copy">
        &#169; All Rights Reserved By Kirill
    </span>
</footer>

<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
</a>


<!--=============== SCROLLREVEAL ===============-->
<script src="assets/js/scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>
</body>
</html>