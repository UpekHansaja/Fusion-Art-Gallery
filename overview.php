<!DOCTYPE html>
<html lang="en">

<head>

    <title>Overview | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center">Overview | Fusion Art Gallery</h1>
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
                <div class="row px-1 px-md-2 py-4">
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/overview-front.png" alt="Fusion Art Gallery | Front Entrance" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Fusion Art Gallery Front View</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/overview-inner.jpg" alt="Fusion Art Gallery | Gallery Entrance" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Art Gallery Entrance</div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/overview-top.png" alt="Fusion Art Gallery | Ground Floor & Storage (1st floor)" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Ground Floor & Storage Area (1<sup>st</sup> Floor)</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        At Fusion Art Gallery, we embark on a journey beyond the conventional, redefining the very essence of artistic expression and architectural brilliance. Our project is not just a gallery; it's an immersive experience designed to challenge norms and captivate the imagination.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Overview of the Fusion Art Gallery Project:
                            </div>
                            <div class="col-12 para-text">
                                Imagine a space where art breathes, where each brushstroke and every contour tell a compelling story. Fusion Art Gallery is not just a physical space; it's a living canvas, an evolving masterpiece that unites diverse forms of art with state-of-the-art architecture. Here, creativity knows no bounds, and innovation takes center stage.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/working/final-plan.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Finalized Architectural 2D plan</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-4">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/working/building-base.jpg" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">In Progress | Ground-floor base of the Art Gallery</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Objectives and Goals:
                            </div>
                            <div class="col-12 para-text">
                                Our primary objective is to create a dynamic platform that transcends traditional gallery spaces. We aim to foster a collaborative environment for artists and enthusiasts alike, bridging the gap between imagination and reality. Fusion Art Gallery strives to be a catalyst for artistic exploration, encouraging the convergence of various mediums and styles.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Significance and Uniqueness of the Project:
                            </div>
                            <div class="col-12 para-text">
                                What sets Fusion Art Gallery apart is its commitment to pushing boundaries. The significance lies in the seamless integration of art and architecture, forming an unparalleled synergy. This space isn't just a destination for art lovers; it's a cultural landmark that challenges perceptions and invites everyone to be a part of a larger, artistic conversation.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/ground-floor.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Ground Floor | Fusion Art Gallery</div>
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
                                <h6 class="next-page-text">Let's Explore more about Our Roadmap. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./roadmap.php" class="btn next-page-text next-page-btn py-2 px-4">Roadmap&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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