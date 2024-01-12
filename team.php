<!DOCTYPE html>
<html lang="en">

<head>

    <title>Team | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center"> Visionaries Behind Fusion Art Gallery | Our Exceptional Team</h1>
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
                        <img src="./assets/images/team/team.png" alt="Fusion Art Gallery Staff | Team Members' group photo" class="img-fluid model-roadmap-hero-image">
                        <div class="image-description-text">Fusion Art Gallery | Staff-Team Members</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Welcome to the Team page, where the heart and soul of Fusion Art Gallery come to life through the faces and stories of our dedicated team members. From the Gallery Director to the Visitor Services Coordinator, each member contributes a unique brushstroke to the canvas of our artistic endeavor.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-1 px-md-2 py-4">
                    <div class="col-12 px-2 px-lg-4 py-4 roadmap-sub-heading text-center text-lg-start">Staff Team :</div>
                    <div class="col-12 px-2 px-md-4 px-lg-5 pb-2 pb-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Explore the faces behind Fusion Art Gallery below, where passion, expertise, and creativity converge in a harmonious celebration of art and innovation.
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/oshan.jpeg" alt="Fusion Art Gallery Director | Mr.Oshan Jayasiri" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Gallery Director | <a href="https://www.linkedin.com/in/oshan-j-r-17b201235/" target="_blank" class="link-dark text-decoration-none">Mr.Oshan</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/upek.jpg" alt="Fusion Art Gallery Director | Mr.Upek Hansaja" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Sales Associate | <a href="https://www.linkedin.com/in/upek-hansaja/" target="_blank" class="link-dark text-decoration-none">Mr.Upek</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/sachintha.jpeg" alt="Fusion Art Gallery Curator | Mr.Sachintha Dilshan" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Curator | <a href="https://www.linkedin.com/in/sachintha-d-dilshan-6423ba24b/" target="_blank" class="link-dark text-decoration-none">Mr.Sachintha</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/sachin.jpg" alt="Fusion Art Gallery Marketing Coordinator | Mr.Sachin Anuradha" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Marketing Coordinator | <a href="#" target="_blank" class="link-dark text-decoration-none">Mr.Sachin</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/neranjen.png" alt="Fusion Art Gallery Art Handler | Mr.Neranjen Rathnayake" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Art Handler | <a href="#" target="_blank" class="link-dark text-decoration-none">Mr.Neranjen</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/tharushi.jpg" alt="Fusion Art Gallery Registrar | Ms.Tharushi Jayawardana" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Registrar | <a href="https://www.linkedin.com/in/sewmini-jayawardana-585265261/" target="_blank" class="link-dark text-decoration-none">Ms.Tharushi</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/prabuddhi.png" alt="Fusion Art Gallery Event Coordinator | Ms.Prabuddhi Rathnayake" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Event Coordinator | <a href="https://www.linkedin.com/in/prabuddhi-rathnayake-72169729a/" target="_blank" class="link-dark text-decoration-none">Ms.Prabuddhi</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/team/vibodha.png" alt="Fusion Art Gallery Visitor Services Coordinator | Ms.Vibodha Jayasinghe" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Visitor Services Coordinator | <a href="https://www.linkedin.com/in/vibodha-jayasinghe-1a354423a/" target="_blank" class="link-dark text-decoration-none">Ms.Vibodha</a></div>
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
                                <h6 class="next-page-text">Let's Explore more about our Projects. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./projects.php" class="btn next-page-text next-page-btn py-2 px-4">Projects&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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