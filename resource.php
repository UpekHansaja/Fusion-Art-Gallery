<!DOCTYPE html>
<html lang="en">

<head>

    <title>Resource | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center">Unlock the Tapestry of Creativity | Functional Resource Links</h1>
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
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Welcome to our Functional Resource Links page, a treasure trove of resources that delve deeper into the practical applications and benefits of Fusion Art Gallery's unique business model. Here, we invite you to explore the multifaceted aspects of our vision, discover supporting multimedia elements, and access downloadable resources that weave a richer narrative around our artistic endeavor.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Practical Applications and Benefits of the Business Model:
                            </div>
                            <div class="col-12 para-text">
                                Dive into the practical applications that make Fusion Art Gallery a pioneering force in the art world. Our business model extends beyond traditional gallery frameworks, fostering a space where art, innovation, and cultural significance converge. Experience the benefits of our model, where creativity thrives, artists flourish, and visitors are immersed in an unparalleled journey of artistic exploration.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/canvas-draw.jpg" alt="Giraffe portrait - Canvas Drawing | Ms.Lisa Fotios" class="img-fluid home-content-image">
                        <div class="image-description-text">Giraffe portrait - Canvas Drawing | Ms.Lisa Fotios</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 ps-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/res/gallery.jpg" alt="Immersive Fusion Art Gallery" class="img-fluid home-content-image">
                        <div class="image-description-text">Immersive Fusion Art Gallery</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Multimedia Elements Supporting the Benefits:
                            </div>
                            <div class="col-12 para-text">
                                Witness the story unfold through captivating multimedia elements that breathe life into the benefits of our business model. From visually stunning images capturing the essence of our projects to videos that provide an immersive experience, these multimedia elements serve as a dynamic canvas illustrating the transformative power of Fusion Art Gallery.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text pb-4">
                                Links to Downloadable Resources:
                            </div>
                            <div class="col-12 col-md-6 col-lg-8 para-text px-3 px-lg-5">
                                For those seeking a deeper understanding, we offer downloadable resources that provide additional insights into our artistic philosophy, past projects, and the broader impact of Fusion Art Gallery. Download brochures, whitepapers, and more to enrich your understanding and share the narrative with others who share a passion for art and innovation.
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 para-heading-text">
                                <!-- <a href="" target="_blank">abc</a> -->
                                <div class="row py-2">
                                    <a href="./assets/downloads/fusion-art-gallery-brochure.pdf" target="_blank" class="col-12 btn next-page-text next-page-btn py-2 px-4">Brochure Download&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
                                </div>
                                <div class="row py-2">
                                    <?php
                                    require "./assets/components/res-logo-size-modal.php";
                                    ?>
                                    <a href="#" class="col-12 btn next-page-text next-page-btn py-2 px-4" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Logo Download&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-3 px-lg-5 py-3 py-lg-5 d-flex align-items-center justify-content-center">
                        <div class="row d-flex align-items-center justify-content-center">

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
                                <h6 class="next-page-text">Want to Explore again? -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./index.php" class="btn next-page-text next-page-btn py-2 px-4">Home&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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