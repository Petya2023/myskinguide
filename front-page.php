<?php
get_header();
?>
<div class="row">
    <div class="hero-section__left col">
        <div class="hero-section__text">
            <h1>Заглавие</h1>
            <h2>Подзаглавие</h2>
            <a href="" class="btn btn--subscribe">Бутон</a>
        </div>
    </div>
    <div class="hero-section__right col">
        <img class="hero-section__img" src="<?php echo get_theme_file_uri('assets/src/images/hero-section-img.png'); ?>"
            alt="Жена, нанасяща продукт върху кожата си.">
    </div>
</div>
<div class="search-bar search-bar-js">
    <div class="search-bar-outter">
        <i class="fa-solid fa-magnifying-glass search-icon search-icon-js"></i>
        <input class="search-bar-input" type="text" placeholder="Какво търсиш? (напр. ретинол)">
    </div>
    <i class="cross-icon">&times;</i>
</div>
</header>