<!DOCTYPE html>
<html lang="en">

<head>

    <title>Projects | Fusion Art Gallery</title>

    <?php
    require "./assets/components/head.php";
    ?>

</head>

<body>

    <?php
    require "./assets/components/preloader.php";
    ?>

    <div class="col-12">
        <header class="row">
            <?php
            require "./assets/components/header-menu.php";
            ?>
        </header>

        <main class="row py-2 container-fluid" id="home">
            <section class="col-12 hero py-3 border-bottom">
                <div class="row hero-content">
                    <div class="col-10 col-md-11 col-lg-11 text-center">
                        <h1 class="text-dark text-center">Artistic Legacy | Fusion Art Gallery's Project Showcase</h1>
                    </div>
                    <div class="col-2 col-md-1 col-lg-1 d-flex justify-content-end">
                        <label for="menu-check" class="menu-check" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" onclick="toggleMenu();">
                            <span id="menu-line1" class="position-relative"></span>
                            <span id="menu-line2" class="position-relative"></span>
                            <span id="menu-line3" class="position-relative"></span>
                        </label>
                        <input type="checkbox" id="menu-check" hidden>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-text">
                                Welcome to our Projects page, a curated exhibition of our past endeavors that blend creativity, innovation, and cultural significance. Each project is a canvas upon which Fusion Art Gallery has painted stories of success, collaboration, and a passion for pushing the boundaries of artistic expression.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/projects-welcome.jpg" alt="Fusion Art Gallery Artist | Lisa Fotios" class="img-fluid home-content-image">
                        <div class="image-description-text">Lisa Fotios | Artist - Fusion Art Gallery</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-4">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/project-overview.jpg" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">'The Greatist' Project | Fusion Art Gallery</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Overview of Past Projects:
                            </div>
                            <div class="col-12 para-text">
                                Step into the gallery of our history, where every project is a unique masterpiece. Fusion Art Gallery has had the privilege of contributing to both commercial and non-profitable initiatives, each reflecting our commitment to art's transformative power. From immersive art installations to collaborations with renowned artists, our projects have been a testament to the fusion of imagination and innovation.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-1 px-md-2 py-4">
                    <div class="col-12 col-md-4 col-lg-8 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/liquid-flow.jpg" alt="An art - Liquid brush Flow on canvas" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Liquid Flow Acrylic Paint | Mr.Lofie Davinci</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/brush-canvas.jpg" alt="Sunset drawing on a canvas" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Sunset Drawing | Mr.Upek</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-5 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/pencil-drawing.jpg" alt="Pencil drawing of a pot, plant & a box on a table" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Object Pencil Drawing | Mr.Upek</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-7 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/wood-art.jpg" alt="drawing of a crying side face on a Wooden Fence" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Wooden Fence Drawing | Ms.Senuri</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/abstract-art.jpg" alt="Some abstract arts" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Abstract Drawings | Mr.Sherlock</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/canvas-brush.jpg" alt="Fusion Art Gallery | Ground Floor & Storage (1st floor)" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Canvas Brush Flow | Ms.Lisa Fotios</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Highlights of Successful Projects:
                            </div>
                            <div class="col-12 para-text">
                                Explore the highlights of projects that have left an indelible mark on the artistic landscape. From transforming urban spaces into dynamic art installations to hosting events that captured the essence of cultural diversity, each success story is a brushstroke in our ongoing artistic journey. Join us in celebrating the moments that define Fusion Art Gallery's legacy of success.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/highlights.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Event Area Photography for Art Gallery</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Testimonials and Reviews:
                            </div>
                            <div class="col-12 para-text">
                                Words from those who have experienced our projects firsthand speak volumes. Here are some reflections from collaborators, artists, and visitors:
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-3 px-lg-5 text-center d-flex align-items-center justify-content-center">
                        <div class="row px-2 px-lg-3 pt-2 pt-lg-5">
                            <div class="col-12 px-2 px-lg-5 py-2 py-lg-5 img-fluid text-center">
                                <div class="row">
                                    <?php
                                    require "./assets/components/testimonials.php";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area transparent-bg-color">
                <div class="row py-4">
                    <div class="end-of-homepage col-12">
                        <div class="row px-5">
                            <div class="col-12 col-md-6 col-lg-8">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-8 text-center pt-2">
                                <h6 class="next-page-text">Interesting Our Portfolio?. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./contact.php" class="btn next-page-text next-page-btn py-2 px-4">Contact&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="futuristic-footer pt-2 pt-md-3 pt-lg-5">
            <?php
            require "./assets/components/footer.php";
            ?>
        </footer>

    </div>

    <?php
    require "./assets/components/foot.php";
    ?>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>