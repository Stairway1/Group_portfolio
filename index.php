<!DOCTYPE html>
<html lang="en">
<style>

</style>

<?php include "./includes/head.php" ?>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
           <?php include "./includes/navbar.php"?>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Advancing Through Technology</h1>
                            <p class="text-white pb-3 animated slideInDown">Empowering individuals and businesses to thrive in a connected world. Our team of experts delivers professional portfolios, e-commerce solutions, management systems, and SEO services tailored to your needs.
                            </p>
                            <a href="about.php" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="contact.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-solid fa-heart text-primary mb-4"></i>
                            <h5 class="mb-3">Our Vision</h5>
                            <p class="m-0">To be the leading force in the digital realm, forging the future through innovative hardware software integrated solutions</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-solid fa-pen-nib text-primary mb-4"></i>
                            <h5 class="mb-3">Our Mission</h5>
                            <p class="m-0">To revolutionize the digital landscape through innovative hardware and software solutions, empowering individuals and businesses to thrive in a connected world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-solid fa-handshake text-primary mb-4"></i>
                            <h5 class="mb-3">Our Core Values</h5>
                            <p class="m-0">God fearing, Integrity, Prudence, Innovative, Imaginative, Creative, Trustworthy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">Where Ideas and Innovation Come to Life</h1>
                        <p class="mb-4">At Stairway Tech, we believe in harnessing the power of technology to create impactful solutions for individuals and businesses. Our partnership is dedicated to providing innovative and integrated hardware and software solutions that drive success and transformation in the digital realm.</p>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Digital Marketing</p>
                                <p class="mb-2">85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">SEO & Backlinks</p>
                                <p class="mb-2">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Design & Development</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">3</h1>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">4</h1>
                        <p class="text-white mb-0">Team Members</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">14</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">21</h1>
                        <p class="text-white mb-0">Complete Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
                    <h1 class="text-center mb-5">What Solutions We Provide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">SEO Optimization</h5>
                            <p class="m-0">Improve your online visibility and attract more traffic with our expert SEO services. We implement advanced SEO strategies to enhance your search engine rankings, drive organic traffic, and increase your online presence.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Blog Websites</h5>
                            <p class="m-0">Engage your audience with dynamic, user-friendly blog websites. Our design and development services ensure your blog is visually appealing, easy to navigate, and optimized for performance, helping you share your ideas and stories effectively.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Personal Portfolios</h5>
                            <p class="m-0">Present your individual skills, experiences, and accomplishments with a custom personal portfolio. Whether you are a freelancer, artist, or professional, we create compelling digital portfolios that elevate your personal brand.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">E-commerce Solutions</h5>
                            <p class="m-0">Build a robust online store with our comprehensive e-commerce solutions. From seamless payment integrations to user-friendly interfaces, we provide everything you need to boost your sales and expand your customer reach.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Management Information Systems</h5>
                            <p class="m-0">Enhance your business operations with our Management Information Systems. We develop MIS solutions that streamline data management, improve decision-making, and increase operational efficiency, helping you achieve your business goals.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Learning Management Systems</h5>
                            <p class="m-0">Transform education and training with our innovative Learning Management Systems. Our LMS solutions offer interactive, engaging platforms that facilitate effective learning, whether for schools, corporate training, or online courses.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


      


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
                    <h1 class="text-center mb-5">Recently Completed Projects</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                            <li class="mx-2" data-filter=".first">Web Design</li>
                            <li class="mx-2" data-filter=".second">Graphic Design</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/1.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="http://christfellowshipchapel.org"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Christ Fellowship Chapel (CFC)</p>
                                <h5 class="lh-base mb-0">A lively platform that engages congregants with CFC</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/2.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://focdigitalacademy.org"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">FOC Digital Academy</p>
                                <h5 class="lh-base mb-0">A transformative and life changing platform for all who want success</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/3.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/3.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://chaddymissionschool.com/"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Chaddy Mission School</p>
                                <h5 class="lh-base mb-0">A school website encompassing the institutions charitable activities</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/7.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/7.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="http://ransemstudio.org"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Ransem Studios</p>
                                <h5 class="lh-base mb-0">A studios' dream website for showcasing its products</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/5.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/5.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://focdigitalacademy.org"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">FOC Digital academy</p>
                                <h5 class="lh-base mb-0">Transformative and life changing platform for all who want success</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/6.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/6.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Curious Answer</p>
                                <h5 class="lh-base mb-0">A blog website that engages the viewer with spiritual and mental insights</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
                <h1 class="text-center mb-5">What Say Our Clients!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>As the lead pastor of Christ Fellowship Chapel, I am extremely impressed with the dedication, creativity, and technical expertise demonstrated by this remarkable group of experts.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/test1.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Pst David Kituyi</h5>
                                <span>Lead Pastor, Christ Fellowship Chapel</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Stairway Tech  has done a great job with my website. They have been professional through and through and given me value for what I paid for. They are efficient, forthright and delivers on time.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/test2.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Dennis Mwangi</h5>
                                <span>Blogger</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>We're pleased with our website's new look. Stairway Tech did a solid job on the design. It's clean, functional, and represents our brand well. Good work on the user experience too.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/test3.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Force Caleb</h5>
                                <span>Content Creator</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" style = "width:250px; height:250px;" src="img/vincent.jpeg" alt="">
                                <h5>Vincent Bett</h5>
                                <span>Backend Engineer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                               
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class=" img-fluid rounded-circle mb-4" style = "width:250px; height:250px;"src="img/bryan.jpeg" alt="">
                                <h5>Bryan Ruiru</h5>
                                <span>Web developer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                               
                                <a class="btn btn-square mx-1" href="http://linkedin.com/in/bryanruiru/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" style = "width:250px; height:250px;" src="img/jay.jpeg" alt="">
                                <h5>Jacob Korir</h5>
                                <span>Cloud Practitioner</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                              
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/jacob-kipkerich-2237521b0/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" style = "width:250px; height:250px;" src="img/Manaseh.jpeg" alt="">
                                <h5>Manaseh</h5>
                                <span>Python developer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                              
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/manaseh-mbuthia-710a0b250/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
       <?php include "./includes/footer.php"?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>