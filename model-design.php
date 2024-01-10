<!DOCTYPE html>
<html lang="en">

<head>

    <title>Model-Design | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center">Model Design | Fusion Art Gallery</h1>
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
                <div class="row px-2 px-md-4 px-lg-5 py-4">
                    <div class="col-12 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/interior/model-design-hero.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid model-content-hero-image">
                        <div class="image-description-text">Entrance of the Model</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Welcome to the heart of Fusion Art Gallery – the Model Design page. Immerse yourself in the intricate details of our meticulously crafted 3D model, where every element has been thoughtfully considered to create a space that transcends the ordinary.
                        Our design philosophy revolves around harmonizing artistic expression with cutting-edge architecture, resulting in a space that not only houses art but becomes a work of art itself. From the flowing lines of the Reception Area to the expansive openness of the Art Gallery, every aspect has been carefully curated to evoke a sense of wonder and appreciation.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Visual Showcase:
                            </div>
                            <div class="col-12 para-text">
                                Explore the gallery through vivid images that capture the essence of our design. Click on interactive elements to get a closer look at specific features. Marvel at the seamless integration of form and function, where aesthetics meet practicality, creating an environment that stimulates the senses.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/interior/visualShowcase.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Gallery Area | Art Exhibition</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-4">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/ground-floor.jpg" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">Ground Floor | Event Area, Auditorium</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Unique and Innovative Aspects:
                            </div>
                            <div class="col-12 para-text">
                                Discover the innovation embedded in every corner of Fusion Art Gallery. Our commitment to pushing boundaries is evident in the dynamic Event Area, adaptable to various occasions, and the Auditorium's Balcony, providing a unique perspective for attendees. The Helipad on the rooftop stands as a symbol of grandeur, offering not only exclusivity but also a breathtaking view of the surroundings.
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
                                <h6 class="next-page-text">Let's Explore more about Gallery Overview. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./overview.php" class="btn next-page-text next-page-btn py-2 px-4">Overview&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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

</body>

</html>