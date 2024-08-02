<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Department | Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .hero-sectiona {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
        }

        .hero-sectiona h1 {
            font-size: 2.5rem;
        }

        .hero-sectiona p {
            font-size: 1.2rem;
        }

        .sectiona-title1 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #343a40;
        }

        .card1 {
            margin-bottom: 30px;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .sectiona {
            padding: 60px 0;
        }
    </style>

</head>

<body>

    <!-- Header -->
    <?php
    include "header.php"
    ?>

    <!-- Hero Section -->
    <div class="hero-sectiona text-center" style="background-image: url(assets/img/ssimshospital1.png);">
        <div class="container">
            <h1>Welcome to Our Departments</h1>
            <p style="display: inline-block; text-align: center; background-color: #2C4964; color: white; padding: 4px 10px; border-radius: 5px ;">Your Health is Our Priority</p>
            <!-- <a href="#" class="btn btn-primary btn-lg mt-3">Learn More</a> -->
        </div>
    </div>

    <!-- Diagnostic Facility Section -->
    <div class="sectiona bg-light">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Diagnostic Facility</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="fas fa-vials icon"></i>
                    <h5>Pathology</h5>
                    <p>Providing high-quality diagnostic care with comprehensive pathology services.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-x-ray icon"></i>
                    <h5>Radiology</h5>
                    <p>Advanced imaging technologies for accurate diagnosis and treatment planning.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-flask icon"></i>
                    <h5>Biochemistry</h5>
                    <p>State-of-the-art biochemistry labs for detailed analysis and results.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-dna icon"></i>
                    <h5>Biomarker Testing</h5>
                    <p>Innovative biomarker testing to identify and track diseases at the molecular level.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Medical Oncology Section -->
    <div class="sectiona">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Medical Oncology</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Personalized Treatment Plans</h5>
                            <p class="card1-text">Our oncologists work closely with patients to create tailored chemotherapy regimens to fight cancer effectively.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Close Monitoring & Support</h5>
                            <p class="card1-text">We provide continuous monitoring and support to ensure the best outcomes during your cancer treatment journey.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Surgical Oncology Section -->
    <div class="sectiona bg-light">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Surgical Oncology</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Expert Surgical Care</h5>
                            <p class="card1-text">Our surgical oncology team specializes in removing tumors and cancerous tissues with precision.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Innovative Techniques</h5>
                            <p class="card1-text">Utilizing the latest surgical techniques to improve recovery and outcomes for cancer patients.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Radiation Oncology Section -->
    <div class="sectiona">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Radiation Oncology</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Precision Radiation Therapy</h5>
                            <p class="card1-text">Using advanced radiation technology to target and treat cancerous tissues with high accuracy.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Minimizing Side Effects</h5>
                            <p class="card1-text">We aim to minimize side effects by carefully planning and delivering radiation treatment.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Palliative Care Section -->
    <div class="sectiona bg-light">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Palliative Care</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Comprehensive Support</h5>
                            <p class="card1-text">Providing holistic care and support for patients with serious illnesses, focusing on quality of life.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Hospice Services</h5>
                            <p class="card1-text">Our hospice services offer comfort and dignity to patients in their final stages of life, with compassionate care and support for families.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bio Medical Research Section -->
    <div class="sectiona">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Bio Medical Research</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="card1">
                        <div class="card1-body">
                            <h5 class="card1-title">Pioneering Research</h5>
                            <p class="card1-text">Our hospital is at the forefront of biomedical research, advancing knowledge in basic sciences and cancer treatment.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Departments Section -->
    <div class="sectiona bg-light">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Support Departments</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="fas fa-user-md icon"></i>
                    <h5>General Medicine</h5>
                    <p>Comprehensive medical care for patients across all age groups.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-tooth icon"></i>
                    <h5>Dentistry</h5>
                    <p>Full range of dental services for all your oral health needs.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-bone icon"></i>
                    <h5>Orthopedics</h5>
                    <p>Specialized care for musculoskeletal conditions and injuries.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-dumbbell icon"></i>
                    <h5>Rehabilitation</h5>
                    <p>Comprehensive rehab services to support recovery and enhance mobility.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-walking icon"></i>
                    <h5>Physiotherapy</h5>
                    <p>Personalized physiotherapy programs to help you regain strength and function.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-spa icon"></i>
                    <h5>Yoga</h5>
                    <p>Integrating yoga practices into treatment plans for holistic well-being.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Services Section -->
    <div class="sectiona">
        <div class="container">
            <h2 class="sectiona-title1 text-center">Other Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-pills icon"></i>
                    <h5>Pharmacy</h5>
                    <p>Providing a full range of medications and consultations to support your treatment.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-ambulance icon"></i>
                    <h5>Ambulance Services</h5>
                    <p>Emergency and non-emergency ambulance services available 24/7.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-utensils icon"></i>
                    <h5>Canteen Services</h5>
                    <p>Nutritious and tasty meals served to patients and visitors throughout the day.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-procedures icon"></i>
                    <h5>Emergency Care</h5>
                    <p>Round-the-clock emergency services to handle all critical situations promptly.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include "footer.php"
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>