<?php
get_header();
?>
<div class="row">
    <div class="hero-section__left col">
        <div class="hero-section__text">
            <h1>Заглавие</h1>
            <h2 class="mt-1">Подзаглавие</h2>
            <a type="button" href="" class="btn btn--subscribe mt-3">Бутон</a>
        </div>
    </div>
    <div class="hero-section__right col">
        <img class="hero-section__img" src="<?php echo get_theme_file_uri('assets/src/images/hero-section-img.png'); ?>"
            alt="Жена, нанасяща продукт върху кожата си.">
    </div>
</div>
<div class="overlay-box">
    <div class="overlay"></div>
</div>
<div class="search-bar search-bar-js">
    <div class="search-bar-outter">
        <i class="fa-solid fa-magnifying-glass search-icon search-icon-js"></i>
        <input class="search-bar-input" type="text" placeholder="Какво търсиш? (напр. ретинол)">
    </div>
    <i class="cross-icon">&times;</i>
</div>
</header>
<section>
    <div class="newsletter py-5 ">
        <div class="container">
            <div class="newsletter__box py-5">
                <div class="newsletter__left">
                    <h3> Да, искам да знам за всички актуални новини, свързани с My Skin Guide.</h3>
                </div>
                <div class="newsletter__right">
                    <form action="https://formsubmit.co/9a9274b8804fb31f31fa316e3e002ac7" method="POST" class="d-flex">
                        <input class="newsletter-input" type="email" name="email" placeholder="Имейл" required>
                        <input type="submit" class="btn btn--subscribe btn--subscribe-2" value="Изпрати">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>