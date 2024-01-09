<div class="col-12">
    <header class="row">
        <?php
        require "./assets/components/nav.php";
        ?>
        <?php
        require "./assets/components/header-menu.php";
        ?>
    </header>

    <main class="row px-2 py-2" id="home">
        <section class="col-12 hero py-3 border-bottom">
            <div class="row hero-content">
                <div class="col-11 text-center">
                    <h1 class="text-dark text-center">Welcome to <span class="hero-content-head">Fusion Art Gallery</span> - Where Creativity Takes Center Stage!</h1>
                </div>
                <div class="col-1 d-flex justify-content-end">
                    <label for="menu-check" class="menu-check" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" onclick="toggleMenu();">
                        <span id="menu-line1" class="position-relative"></span>
                        <span id="menu-line2" class="position-relative"></span>
                        <span id="menu-line3" class="position-relative"></span>
                    </label>
                    <input type="checkbox" id="menu-check" hidden>
                </div>
            </div>
        </section>

        <section class="featured-artists">
            <h2>Featured Artists</h2>
            <div class="artist-grid">
                <!-- Add your featured artists here -->
            </div>
        </section>

        <section class="artworks">
            <h2>Latest Artworks</h2>
            <div class="artwork-grid">
                <!-- Add your latest artworks here -->
            </div>
        </section>
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>

</div>