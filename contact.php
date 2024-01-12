<!DOCTYPE html>
<html lang="en">

<head>

    <title>Contact | Fusion Art Gallery</title>

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
                        <h1 class="text-dark text-center">Connect with us | Where Creativity Meets Conversation</h1>
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
                        Welcome to the Contact page, a portal to connect with Fusion Art Gallery and become a part of our artistic dialogue. Feel free to reach out, inquire, or simply share your thoughts. Your journey into the world of art and innovation begins here.
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-2 px-md-4 px-lg-5 pb-4">
                    <div class="col-12 pb-3 d-flex align-items-center justify-content-center flex-column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.6612759694979!2d79.99897305018953!3d7.088557601494642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbf24914cc25%3A0x74eb93547cdf06c1!2sGajaba%20Rd%2C%20Gampaha!5e0!3m2!1sen!2slk!4v1705066028766!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid contact-map"></iframe>
                        <div class="image-description-text">Fusion Art Gallery Location | Google Map</div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row pb-4">
                    <div class="col-12 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Contact Information:
                            </div>
                            <div class="col-12 py-3 py-lg-5">
                                <div class="row py-2 py-lg-4">
                                    <div class="col-12 col-md-12 col-lg-4 px-2 px-md-3 px-lg-3 text-center">
                                        <div class="row">
                                            <div class="col-12 para-text py-3">
                                                Visit us at our physical haven:
                                            </div>
                                            <div class="col-12 para-text">
                                                <i class="bi bi-geo-alt display-3 contact-icon-color"></i>
                                            </div>
                                            <div class="col-12 review-para-text py-3">
                                                Fusion Art Gallery, </br> Gajaba Rd, Gampaha, </br> Sri Lanka.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 px-2 px-md-3 px-lg-3 text-center">
                                        <div class="row">
                                            <div class="col-12 para-text py-3">
                                                Call us to discuss your inquiries:
                                            </div>
                                            <div class="col-12 para-text">
                                                <i class="bi bi-telephone-forward display-3 contact-icon-color"></i>
                                            </div>
                                            <div class="col-12 review-para-text py-3">
                                                <a href="tel:+94112951119" class="link-dark text-decoration-none">(+94) 112951119</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 px-2 px-md-3 px-lg-3 text-center">
                                        <div class="row">
                                            <div class="col-12 para-text py-3">
                                                For written correspondences:
                                            </div>
                                            <div class="col-12 para-text">
                                                <i class="bi bi-envelope-at display-3 contact-icon-color"></i>
                                            </div>
                                            <div class="col-12 review-para-text py-3">
                                                <a href="mailto:info@fusionartgallery.com" class="link-dark text-decoration-none">info@fusionartgallery.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-content-area">
                <div class="row px-4 py-4">
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 image-description-text pb-3">For any Inquiries,</div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="exampleFormControlInput1" class="col-12 form-label">Email address</label>
                                        <input type="email" class="col-12 form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="exampleFormControlInput1" class="col-6 form-label">First Name</label>
                                        <input type="text" class="col-6 form-control" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="exampleFormControlInput1" class="col-6 form-label">Last Name</label>
                                        <input type="text" class="col-6 form-control" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="exampleFormControlInput1" class="col-12 form-label">Subject</label>
                                        <input type="text" class="col-12 form-control" id="exampleFormControlInput1" placeholder="Enter Subject Here">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="exampleFormControlTextarea1" class="col-12 form-label">Inquiry</label>
                                        <textarea class="col-12 form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-md-6 col-lg-6 mb-3 text-center">
                                                <div class="row pt-3 pt-lg-5">
                                                    <div class="col-12">
                                                        <button class="col-12 btn btn-outline-dark px-3 py-2" type="submit">Submit Inquiry&nbsp;&nbsp;<i class="bi bi-send-check fs-6"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 mb-3 text-center">
                                                <div class="row pt-3 pt-lg-5">
                                                    <div class="col-12 image-description-text">Or Contact via,</div>
                                                    <div class="col-12 footer-social pt-2 text-center">
                                                        <ul class="col-12">
                                                            <li><a href="#" class="text-center"><i class="bi bi-facebook"></i></a></li>
                                                            <li><a href="#" class="text-center"><i class="bi bi-twitter-x"></i></a></li>
                                                            <li><a href="#" class="text-center"><i class="bi bi-instagram"></i></a></li>
                                                            <li><a href="#" class="text-center"><i class="bi bi-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-3 px-lg-5 d-flex align-items-center justify-content-center flex-column">
                        <div class="row">
                            <div class="col-12 para-heading-text">
                                Inquiry Form and Social Media Links:
                            </div>
                            <div class="col-12 para-text">
                                Engage with us seamlessly through our inquiry form or follow us on social media to stay updated with the latest in the world of Fusion Art Gallery. Your questions, collaborations, and thoughts are not just welcomed – they're celebrated.
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
                                Office Hours and Availability:
                            </div>
                            <div class="col-12 para-text py-2">
                                Our doors are open, and we're here to assist you during the following office hours:
                            </div>
                            <div class="col-12 para-text py-2 ps-3 ps-md-4 ps-lg-5">
                                Monday to Friday: 9:00 AM - 6:00 PM
                                <br>
                                Saturday: 10:00 AM - 3:00 PM
                                <br>
                                Sunday: Closed
                            </div>
                            <div class="col-12 para-text py-2">
                                Feel free to drop by during these hours or schedule an appointment to ensure personalized attention.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center flex-column">
                        <img src="./assets/images/gallery-Images/interior/visualShowcase.jpg" alt="Fusion Art Gallery | Office Area" class="img-fluid home-content-image">
                        <div class="image-description-text">Fusion Gallery Area</div>
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
                                <h6 class="next-page-text">Looking for any Resource?. -</h6>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <a href="./resource.php" class="btn next-page-text next-page-btn py-2 px-4">Resources&nbsp;&nbsp;<i class="bi bi-link-45deg"></i></a>
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