<!DOCTYPE html>
<html lang="en">

<head>

    <title>Roadmap | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center">The Roadmap of the Journey | Fusion Art Gallery</h1>
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
                        <img src="./assets/images/gallery-Images/working/roadmap-hero-image.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid model-roadmap-hero-image">
                        <div class="image-description-text">3D Model | Under Constructions</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Welcome to the Roadmap page of Fusion Art Gallery, where we unfold the steps that will breathe life into our vision. This isn't just a plan; it's a testament to our commitment to creating a space where art, innovation, and imagination converge in perfect harmony.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Step-by-Step Plan:
                            </div>
                            <div class="col-12 para-text">
                                Our journey begins with a meticulous step-by-step plan for the real-world implementation of our 3D model. Each phase is a brushstroke on the canvas of progress, bringing us closer to the realization of Fusion Art Gallery. From the conceptualization of spaces to the fine-tuning of details, every step is crafted with precision and passion.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/working/step-by-step.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">3D Model | Foundation Level</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-4">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/working/milestone.jpg" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">Art Gallery Model | Structural Design</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Milestones and Key Dates:
                            </div>
                            <div class="col-12 para-text">
                                As we navigate this artistic odyssey, milestones become the guideposts that mark our progress. Key dates punctuate our timeline, celebrating achievements and igniting anticipation for what lies ahead. From the unveiling of the Reception Area to the grandeur of the Helipad, each milestone is a testament to our dedication to excellence.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-1 px-md-2 py-4">
                    <div class="col-12 px-2 px-lg-4 py-4 roadmap-sub-heading text-center text-lg-start">Milestones :</div>
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/working/design-sketch.jpg" alt="Fusion Art Gallery | Conceptualization Construction - Milestone" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Conceptualization Construction</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/interior/model-design-hero.jpg" alt="Fusion Art Gallery | Artistic Collaborations - Milestone" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Artistic Collaborations</div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/ground-floor.jpg" alt="Fusion Art Gallery | Eventful Unveilings - Milestone" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Eventful Unveilings</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Breathing life into the design, ensuring every element aligns with our vision.
                        Breaking ground as Fusion Art Gallery takes shape in the physical realm.
                        Welcoming artists to contribute to the ever-evolving narrative of the gallery.
                        Showcasing the dynamic spaces, from the Art Gallery to the Auditorium.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-3">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Future Projections and Expansion Plans:
                            </div>
                            <div class="col-12 para-text">
                                The roadmap extends beyond the horizon, projecting into the future of Fusion Art Gallery. We envision a space that continually evolves, adapting to the ever-changing landscape of art and technology. Expansion plans unveil the potential for Fusion Art Gallery to become a global hub, transcending borders and becoming a destination for artists and enthusiasts worldwide.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/project-gallery.png" alt="Fusion Art Gallery | Roof-Top Area with Helipad" class="img-fluid home-content-image">
                        <div class="image-description-text">Art Gallery Model | Outer Front View</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-1 px-md-2 py-4">
                    <div class="col-12 px-2 px-lg-4 py-4 roadmap-sub-heading text-center text-lg-start">Expansion Plans :</div>
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/interior/visualShowcase.jpg" alt="Fusion Art Gallery | Global Exhibitions" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Global Exhibitions</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/virtual.png" alt="Fusion Art Gallery | Virtual Experiences" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Virtual Experiences</div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 pb-5 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/overview/art-school.jpg" alt="Fusion Art Gallery | Collaborations" class="img-fluid overview-hero-image">
                        <div class="image-description-text">Collaborations</div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 px-2 px-md-4 px-lg-5 para-text text-center d-flex align-items-center justify-content-center flex-column">
                        Taking Fusion Art Gallery beyond local boundaries, participating in international art events.
                        Expanding our reach through virtual platforms, ensuring accessibility for art lovers worldwide.
                        Partnering with global artists and institutions to create a diverse and inclusive artistic community.
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
                                <h6 class="next-page-text">Let's Meet our Team. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./team.php" class="btn next-page-text next-page-btn py-2 px-4">Team&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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