<?php get_header(); ?>

<main class="ebook-store-front">
    <section class="hero-ebook">
        <div class="container">
            <h1 class="hero-title">Twój sklep z eBookami</h1>
            <p class="hero-subtitle">Odkryj najlepsze eBooki w sieci – czytaj, ucz się, rozwijaj!</p>
            <a href="#bestsellers" class="cta-btn">Zobacz bestsellery</a>
        </div>
    </section>

    <section class="bestsellers" id="bestsellers">
        <div class="container">
            <h2>Bestsellery</h2>
            <div class="ebook-grid">
                <div class="ebook-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ja.jpg" alt="Ebook 1">
                    <h3>Jak zostać programistą?</h3>
                    <p>Praktyczny przewodnik dla początkujących.</p>
                    <span class="price">29,99 zł</span>
                    <a href="#" class="buy-btn">Kup teraz</a>
                </div>
                <div class="ebook-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ja2.jpg" alt="Ebook 2">
                    <h3>Design Thinking w praktyce</h3>
                    <p>Twórz innowacyjne projekty i produkty.</p>
                    <span class="price">24,99 zł</span>
                    <a href="#" class="buy-btn">Kup teraz</a>
                </div>
                <div class="ebook-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ja.jpg" alt="Ebook 3">
                    <h3>Marketing Internetowy</h3>
                    <p>Skuteczne strategie promocji online.</p>
                    <span class="price">19,99 zł</span>
                    <a href="#" class="buy-btn">Kup teraz</a>
                </div>
            </div>
        </div>
    </section>

    <section class="categories" id="categories">
        <div class="container">
            <h2>Kategorie</h2>
            <div class="category-list">
                <div class="category-card">Rozwój osobisty</div>
                <div class="category-card">Programowanie</div>
                <div class="category-card">Biznes</div>
                <div class="category-card">Marketing</div>
                <div class="category-card">Design</div>
            </div>
        </div>
    </section>

    <section class="about-ebook-store" id="about">
        <div class="container">
            <h2>O sklepie</h2>
            <p>Jesteśmy pasjonatami wiedzy i nowoczesnych technologii. W naszym sklepie znajdziesz starannie wyselekcjonowane eBooki, które pomogą Ci się rozwijać i osiągać cele. Dołącz do grona zadowolonych czytelników!</p>
        </div>
    </section>

    <section class="contact-ebook-store" id="contact">
        <div class="container">
            <h2>Kontakt</h2>
            <form class="contact-form">
                <input type="text" name="name" placeholder="Imię i nazwisko" required>
                <input type="email" name="email" placeholder="Adres e-mail" required>
                <textarea name="message" placeholder="Wiadomość" required></textarea>
                <button type="submit">Wyślij</button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
