<!DOCTYPE html>
<html lang="en">

<head>

    <title>Fusion Art Gallery | Model Design</title>

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
            require "./assets/components/nav.php";
            ?>
            <?php
            require "./assets/components/header-menu.php";
            ?>
        </header>

        <main class="row py-2 container-fluid" id="home">
            <section class="col-12 hero py-3 border-bottom">
                <div class="row hero-content">
                    <div class="col-10 col-md-11 col-lg-11 text-center">
                        <h1 class="text-dark text-center">Fusion Art Gallery - Where Creativity Takes Center Stage!</h1>
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
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/home-1.png" alt="Fusion Art Gallery | Front-View" class="img-fluid home-content-image">
                        <div class="image-description-text">Front View of 3D model</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 p-4 para-text d-flex align-items-center justify-content-center flex-column">
                        Welcome to Fusion Art Gallery, where creativity and design unite in a symphony of innovation. Our meticulously crafted 3D model transforms traditional boundaries, offering an immersive blend of artistic expression and contemporary brilliance.
                        <br>
                        <br>
                        Explore captivating spaces from the dynamic Art Gallery to the enchanting Event Area. Feel the resonance of live performances in the Auditorium and savor delectable treats in our Cafeteria, a haven amidst creativity.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 p-4 para-text d-flex align-items-center justify-content-center flex-column">
                        Ascend to the 1st floor, where dedication thrives in the Office Area and precious artworks find sanctuary in the Storage Area. The Auditorium's Balcony offers a unique perspective on immersive experiences.
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/1st-floor.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Office Area & Storage-Room</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/2nd-floor.jpg" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">Roof-top with Helipad</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 p-4 para-text d-flex align-items-center justify-content-center flex-column">
                        Reach the 2nd floor, unveiling the pinnacle of design – the Helipad, a symbol of grandeur. Exclusive to VIPs, it offers a breathtaking view and a unique landing point for helicopters.
                    </div>
                </div>
            </section>

            <section class="home-content-area transparent-bg-color">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 p-4 para-text d-flex align-items-center justify-content-center flex-column">
                        At Fusion Art Gallery, we're not just curators; we're architects of unparalleled experiences, weaving creativity, innovation, and cultural significance beyond the canvas.
                        <br>
                        <br>
                        Join us in this extraordinary journey where imagination blurs with reality, and Fusion Art Gallery stands as a haven for those who appreciate the beauty of expression.
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/ground-floor.jpg" alt="Fusion Art Gallery | Gallery Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Ground-Floor | Art Gallery</div>
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
                                <h6 class="next-page-text">Let's Explore more about our 3D Model -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./assets/views/model-design.php" class="btn next-page-text next-page-btn py-2 px-4">Model Design&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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