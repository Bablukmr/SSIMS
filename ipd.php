<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPD Services - SSIMS Hajipur</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> -->
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
   <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
            background-size: cover;
            background-position: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-top: 20px;
            display: inline-block;
            text-align: center;
            background-color: #2C4964;
            color: white;
            padding: 4px 10px;
            border-radius: 5px;
        }

        .content-section, .faq-section, .contact-section {
            padding: 80px 0;
        }

        .content-section .icon-box i {
            font-size: 2rem;
            margin-right: 15px;
            color: #007bff;
        }

        .faq-section .faq-item {
            margin-bottom: 30px;
        }

        .faq-section .faq-item h5 {
            font-weight: 500;
            font-size: 1.2rem;
        }

        .faq-section .faq-item p {
            margin-top: 10px;
        }

        .contact-section .contact-info {
            margin-bottom: 30px;
        }

        .contact-section .contact-info i {
            font-size: 2rem;
            margin-right: 15px;
            color: #007bff;
        }

        .contact-section a {
            color: #007bff;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }

        .footer a {
            color: #ffc107;
        }

        .footer a:hover {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:hajipur@gmail.com">hajipur@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>9431021001</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.php" class="">
                    <img src="assets/img/ssimshajipur.png" width="220" />
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <!-- <li><a href="#hero" class="active">Home<br></a></li> -->
                        <li><a href="index.php">Home</a></li>

                        <li class="dropdown"><a href="#"><span>About us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="about.php">About us </a></li>
                                <li><a href="#">Our Logo</a></li>
                                <li><a href="#">Journey so far</a></li>
                                <li><a href="#">Know the Campus</a></li>
                            </ul>
                        </li>

                        <li><a href="departments.php">Departments</a></li>
                        <li class="dropdown"><a href="#departments"><span>Administration</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Organizational Structure</a></li>
                                <li><a href="#"> President’s desk </a></li>
                                <li><a href="#">Director’s desk</a></li>
                                <li><a href="#"> Medical Superintendent</a></li>
                                <li><a href="#">Deputy Director Administration</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#departments"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="opd.php">OPD</a></li>
                                <li><a href="ipd.php">IPD</a></li>
                                <li><a href="icu.php"> ICUs </a></li>
                                <li><a href="yellowfever.php"> Yellow Fever Treatment</a></li>
                                <li><a href="#">Blood Bank</a></li>
                                <li><a href="#">Physiotherapy</a></li>
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Laboratories</a></li>
                                <li><a href="#">Pharmacy</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#departments"><span>Research</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Parents</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="appointment.php">Make an Appointment</a>

            </div>

        </div>

    </header>

    <!-- Hero Section -->
    <div class="hero-section" style="background-image: url(assets/img/ssimshospital1.png);">
        <div class="container">
            <h1>IPD Services at SSIMS Hajipur</h1>
            <p>Exceptional Inpatient Care for Cancer Patients</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="container">
            <h2>Welcome to SSIMS Hajipur IPD Services</h2>
            <p>Welcome to SSIMS Hajipur, a leading cancer hospital known for its exceptional inpatient department (IPD) services. We are dedicated to providing top-notch care for cancer patients, ensuring they receive the best treatment in a comfortable setting.</p>

            <h3>What is IPD?</h3>
            <p>The Inpatient Department (IPD) is where patients stay in the hospital for more intensive care and treatment. At SSIMS Hajipur, we offer specialized IPD services for those undergoing cancer treatment.</p>

            <h3 style="margin: 40px 0px;">Why Choose Our Cancer IPD Services?</h3>
            <div class="row">
                <div class="col-md-6 icon-box" style="padding: 20px;">
                    <i class="fas fa-stethoscope"></i>
                    <div>
                        <h4>Expert Care</h4>
                        <p>Our cancer hospital IPD services are designed to provide comprehensive care for cancer patients. We have a team of skilled doctors and specialists who focus on delivering the best cancer treatment hospital IPD services.</p>
                    </div>
                </div>
                <div class="col-md-6 icon-box" style="padding: 20px;">
                    <i class="fas fa-bed"></i>
                    <div>
                        <h4>Comfortable Facilities</h4>
                        <p>Our IPD facilities for cancer patients in Hajipur are equipped to ensure comfort and support throughout your stay. We strive to make your experience as pleasant as possible.</p>
                    </div>
                </div>
                <div class="col-md-6 icon-box " style="padding: 20px;">
                    <i class="fas fa-cogs"></i>
                    <div>
                        <h4>Comprehensive Treatment</h4>
                        <p>From initial diagnosis to ongoing treatment, our cancer care IPD Hajipur offers a full range of services. We are committed to providing the best cancer care with our top cancer IPD in Hajipur.</p>
                    </div>
                </div>
                <div class="col-md-6 icon-box" style="padding: 20px;">
                    <i class="fas fa-hands-helping"></i>
                    <div>
                        <h4>Supportive Environment</h4>
                        <p>We understand that cancer treatment can be challenging. Our inpatient cancer department in Hajipur is designed to offer a supportive environment to help you through your treatment journey.</p>
                    </div>
                </div>
                <div class="col-md-6 icon-box" style="padding: 20px;">
                    <i class="fas fa-laptop-medical"></i>
                    <div>
                        <h4>Advanced Technology</h4>
                        <p>As the best cancer hospital with IPD facilities, we use the latest technology and treatments to ensure you receive the most effective care available.</p>
                    </div>
                </div>
            </div>

            <h3>How to Access Our IPD Services?</h3>
            <p>If you or a loved one needs cancer treatment and is looking for IPD service in Hajipur, contact us to schedule a consultation. Our team will guide you through the process and ensure you receive the best care possible.</p>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common queries about our services, appointment procedures, and patient care policies.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the cancer hospital IPD services provided at SSIMS Hajipur?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Our cancer hospital IPD services include specialized care for cancer patients, comprehensive treatment, and support throughout their stay. We focus on delivering high-quality care tailored to each individual’s needs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How does SSIMS Hajipur ensure comprehensive cancer IPD services?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We offer comprehensive cancer IPD services by providing a full range of treatments and support. Our team of experts uses advanced technology and personalized care to manage all aspects of cancer treatment.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What can I expect during my stay for inpatient cancer treatment in Hajipur?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        During your stay for inpatient cancer treatment in Hajipur, you can expect a comfortable environment, attentive care from experienced professionals, and access to all necessary treatments and support.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Are there any special facilities for cancer patients in your IPD?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, our IPD is equipped with specialized facilities to ensure the comfort and well-being of cancer patients. We focus on providing a supportive environment to make your treatment experience as smooth as possible.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How can I get more information about your cancer IPD services?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        For more information about our cancer hospital IPD services, including details on inpatient cancer treatment in Hajipur, please contact us directly. Our team will be happy to answer your questions and guide you through the process.
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="margin-top: 40px;"></div>
    <!-- Footer -->
    <?php include "footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
