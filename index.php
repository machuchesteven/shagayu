<?php
if (!empty($_SESSION['message'])) {
    echo '<script type="text/javascript">';
    echo ' alert(' . $_SESSION['message'] . ')';  //not showing an alert box.
    echo '</script>';
}
?>
<?php require_once('./models/connect_db.php'); ?>
<?php require_once 'header.php';
?>
<div>
    <!-- Hero div the heart of the website goes here -->
    <div class="hero-section" data-aos="zoom-in" data-aos-duration="1000">
        <div class="hero-content">
            <h1 class="primary-text">Building, Construction &amp; Electrical Engineering Solutions</h1>
            <p class="hero-paragraph">
                Welcome, We are Shagayu Company Ltd - A Determined<br /> Company Made of Professional Experienced Engineers Dedicated in <br />Delivering Quality Service To the Tanzanian Client Base
            </p>
            <div class="button-group space-btn m-2">
                <button class="btn btn-outline primary-text b-shagayu" id="hero-btn">
                    View Profile
                </button>
                <button class="btn bg-shagayu text-white" id="hero-btn-2">
                    Call Us
                </button>
            </div>
        </div>
    </div>

    <div id="verified-by" class="m-md- container " data-aos="fade-in-up" data-aos-duration="1000">
        <h4 class="primary-text text-center mb-3">Registered and Verified By</h4>
        <div class="row px-md-5 gy-4">
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <img src="./resources/crb logo.png" class="mx-auto img-fluid" alt="CRB">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <img class="mx-auto img-fluid" src="./resources/cata logo.png" alt="CRB">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <img class="mx-auto img-fluid" src="./resources/TRA logo.png" alt="TRA">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <img class="mx-auto img-fluid" src="./resources/united republic of tz logo.png" alt="BRELA">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- the nav showing the links for individual service ;groups -->

<div class="container-fluid " id="under-hero-navbar">
    <ul class="nav nav-dark bg-shagayu justify-content-center my-3">
        <li class="nav-item">
            <a class="nav-link text-light" href="construction.php">Construction Department</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="electrical.php">Electrical Department</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="contacts.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="worked_with.php">Partners and Customers</a>
        </li>
    </ul>
</div>

<!-- company profile -->
<div class="container-fluid" data-aos="zoom-in" data-aos-duration="600">
    <div class="container ">
        <h2 class="my-md-5 text-center primary-text">Our Company</h2>

        <!-- company history goes here -->
        <div class="row gy-2 height-section">
            <div class="col-md-8">
                <h3 class="primary-text">Shagayu Company History</h3>

                <div class="line-break-left mt-2 mt-md-3 mb-md-3"></div>
                <p class="primary-text"> <span class="highlighted"> Shagayu Company Ltd</span> is a registered and professional senior engineering management Staff with substantial experience in the construction industry founded the company 2018 with a major objective of offering both <span class="highlighted">Civil</span> and <span class="highlighted">Electrical Services</span> to a continually growing client base in Tanzania. </p>
            </div>
            <div class="col-md-4">
                <img src="./resources/working area sand mixer.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-4">
                <img src="./resources/working area terex.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-8">
                <h3 class="primary-text">Scope of Services</h3>
                <div class="line-break-left mt-2 mt-md-3 mb-md-3"></div>
                <p class="primary-text">
                    SCL’s draws out experienced team to work in Civil & Electrical contracting business for commercial, and industrial clients ranging from large companies to small and medium enterprises.
                    <br /><br />SCL recognizes that the key to running a successful business is understanding our client’s needs and meeting their expectations. This can only be achieved through effective communication between our staff and our clients. SCL have developed a robust yet simple delivery methodology for quality and consistent project delivery. We appoint a dedicated project manager for each job who ensures that there is clear communication of the needs and requirements across the team; provides oversight of the delivery of the project to the client’s specifications and oversees the design for <span class="highlighted">Civil & Electrical Engineers</span> throughout the project.
                    <br /><br />SCL’s head office is in Dar es Salaam, Tanzania, this positions us perfectly to meet the needs of our national clients. SCL also operates in all upcountry regions in Tanzania and expected to operate internationally.
                </p>
            </div>
            <hr class="m-2">
            <!-- vision -->
            <div class="col-md-6 mt-md-5 mt-2">
                <h2 class="primary-text text-center">Our Vision</h2>
                <div class="line-break my-2"></div>
                <p class="text-center primary-text">The vision of <span class="highlighted"> SHAGAYU COMPANY LIMITED</span> is to provide quality services in Civil Engineering fields (Construction, industrial, commercial infrastructures including commercial residential and housing facilities), Electrical Engineering fields (Construction of power and energy facilities) with safe methods and cost effective to the client. We aim to create employment and skills development in communities we’re tasked to work in and to improve the standard of construction by building to expected quality using safe methods of construction, giving value to the money of the client.</p>
            </div>
            <div class="col-md-6 mt-md-5 mt-2">
                <h2 class="primary-text text-center">Our Mission</h2>
                <div class="line-break my-2">
                </div>
                <p class="primary-text text-center">Our Mission as <span class="highlighted">SHAGAYU COMPANY LIMITED</span> intends to improve the standard of living of the people by empowering disadvantaged communities by providing employment and skills development to people in the communities where Construction Tenders are awarded. It is also our mission to improve the standard of Civil Engineering and Electrical Engineering field quality in our country by using skilled and competitive employees.
                </p>
            </div>
            <hr class="col-12 my-2 my-md-5 ">
            <div class="col-md-5 " data-aos="fade-up-right" data-aos-duration="500">

                <h2 class="primary-text ml-3">Our Values</h2>
                <div class="line-break-left-orange my-2">
                </div>
                <p class="primary-text">
                    Creating an environment for innovation and quest to render first-class services. A belief in a lateral leadership style where an environment of trust forms the foundation of the company. A belief that loyalty provides sustainability for a secure future for its people and members.
                </p>
                <div class="line-break-left-orange my-2">
                </div>
            </div>
            <div class="col-md-7" data-aos="fade-up-left" data-aos-duration="800">

                <h2 class="primary-text ml-3">Our Values</h2>
                <div class="line-break-left-orange my-2">
                </div>
                <div class="ml-md-5 ml-3">
                    <div class="mb-2 mb-md-">
                        <i class="fa-solid fa-arrow-right primary-text"></i>
                        <span class="primary-text ml-2">To transform unskilled labours to skilled
                        </span>
                    </div>
                    <div class="mb-2 mb-md-2">
                        <i class="fa-solid fa-arrow-right primary-text"></i>
                        <span class="primary-text ml-2">To provide the expected quality and safe environment
                        </span>
                    </div>
                    <div class="mb-2 mb-md-2">
                        <i class="fa-solid fa-arrow-right primary-text"></i>
                        <span class="primary-text ml-2">To add value to clients money by implementing easy and less expensive methods of construction
                        </span>
                    </div>
                    <div class="mb-2 mb-md-2">
                        <i class="fa-solid fa-arrow-right primary-text"></i>
                        <span class="primary-text ml-2">To put <span class="highlighted">SHAGAYU COMPANY LTD</span> to higher levels
                        </span>
                    </div>
                    <div class="mb-2 mb-md-2">
                        <i class="fa-solid fa-arrow-right primary-text"></i>
                        <span class="primary-text ml-2">To increase <span class="highlighted">SHAGAYU COMPANY LTD</span> ranks in the CRB to class one
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services we offer div -->
<div class="services-offered container-fluid bg-light my-5 pb-5 height-section">
    <div data-aos="fade-up" data-aos-duration="500">
        <h1 class="text-center pt-md-5 pt-3 primary-text">Services We Render</h1>
        <div class="line-break mb-2"></div>
        <p class="text-color-deep text-center text-small primary-text">We offer the following services</p>
    </div>
    <div class="container">
        <div class="row">
            <!-- cards showing data for services -->
            <div class="col-md-4  mb-2" data-aos="fade-right" data-aos-duration="500">
                <div class="card text-left">
                    <img class="service-img align-center mx-auto my-3" src="./resources/engineers.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title primary-text text-center">Civil Construction Works</h4>
                        <ul>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Bridge Priventive maintanance works, routine maintanance works, spot improvement and Construction of new roads projects
                                </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    EPC for roads projects ( Gravel/hard surfaced roads)</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Dragline walkways
                                </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Foundation base for Electrical & Telecommunication towers</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Water transportation infrastructure (water pipelines, storage tanks & Irrigation systems etc.)</p>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button type="button" class="btn bg-shagayu text-light btn-block">See Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Building works list -->
            <div class="col-md-4  mb-2" data-aos="fade-up" data-aos-duration="600">
                <div class="card text-left">
                    <img class="service-img mx-auto my-3" src="./resources/excavator.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title primary-text text-center">Building Works</h4>
                        <ul>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Foundation works</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Brick and Concrete structure works</p>
                            </li>

                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Paving- installation</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Plastering, floors & screaming</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Tiling</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Painting and other finishes</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Roofing and treatment </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Bulk earth works & plant hire </p>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button type="button" class="btn bg-shagayu text-light btn-block">See Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Electrical work services -->
            <div class="col-md-4 mb-2" data-aos="fade-left" data-aos-duration="700">
                <div class="card text-left">
                    <img class="service-img mx-auto my-3 text-center" src="./resources/electric-pole (3).png" alt="">
                    <div class="card-body">
                        <h4 class="card-title primary-text text-center">Electrical Works</h4>
                        <ul>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Power quality Analyse Solution </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Carry out New Construction & Maintenance of 33, 11 & 0.4kV Lines and Installation of Distribution Transformer Substations.
                                </p>
                            </li>

                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Providing casual for stringing of HT lines 66, 132, 220 and 400KV lines
                                </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Service, Maintenance and Repair of Electromechanical Machines (i.e Transformers, Motors and Generators).</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Electrical Preventive Maintenance for Residential, Commercial and Industrials. </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Supply and Installation of Electrical and Mechanical Equipments & Machines.</p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Providing skilled /Casual Labor for Electrical and Mechanical Works </p>
                            </li>
                            <li>
                                <p class="mb-md-2 service-list-item">
                                    Services, repair and maintenance of Air Conditions ( Installation of New A/C) </p>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button type="button" class="btn bg-shagayu text-light btn-block">See Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- values we deliver to customers -->
<div class="values container-fluid ">
    <div class="container pt-5">
        <div class="mb-2 mb-md-5" data-aos="zoom-in-up">
            <h1 class="text-center color-main">Reasons To Work With Us</h1>
            <div class="line-break"></div>
            <p class="text-center">Shagayu Offers a lot of benefits to its customers, Below are some of them.</p>
        </div>
        <!-- actual values delivered to customers -->
        <div class="row my-2" data-aos="zoom-in-down">
            <div class="col-md-5">
                <img class="img-fluid" src="./resources/working area winch.jpg" />
            </div>
            <div class="col-md-7">
                <div class="my-2 ml-2">
                    <h2 class="primary-text mt-2">A Team Of Competent and Experienced Staff</h2>
                    <p class="primary-text">
                        The back born of the company is its staff. The Company is having its policy and believe that it survival will depend on the strenght of committed staff. Perfomance reviews will be held annually to encourage staff development.
                    </p>
                    <hr />
                    <p>
                        <b class="secondary-text">Our Staffs Team includes:-</b>
                    </p>
                    <ul class="primary-text ml-3 ml-md-5 staff-team-pro-list">
                        <li class="ml-3 mb-2">
                            Registered Engineers
                        </li>
                        <li class="mb-2">
                            Supervisors
                        </li>
                        <li class="mb-2">
                            Project Managers
                        </li>
                    </ul>
                    <button class="btn primary-btn m-2">
                        See Our staff
                    </button>

                </div>
            </div>
        </div>
        <div class="row my-3 my-md-5" data-aos="flip-up">
            <div class="col-md-6 py-md-5">
                <h3 class="primary-text my-md-2 mb-2">
                    Advanced Equipments Tools
                </h3>
                <div class="line-break-left-orange mb-md-3"></div>
                <p class="primary-text mb-md-5  mt-2">
                    Tools/Equipment are second to staff, no good company ever emerged without tools/equipment. For construction activities company can’t perform without quality tool/equipment. <span class="highliighted">SHAGAYU COMPANY LIMITED</span> with its experienced administration team has invested enough acquisition of basic tools and equipment for the works.
                </p>
                <button class="btn primary-btn mx-2">
                    View Equipments
                </button>

            </div>
            <div class="col-md-6 ml-2">
                <img src="./resources/caterpillar.png" class="img-fluid rounded" alt="">
            </div>
        </div>

    </div>
</div>

<div class=" bg-light container-fluid py-md-5 mb-md-5" data-aos="fade-down">
    <!-- dumb values delivered to customers on their basis -->
    <h2 class="primary-text text-center my-3 my-md-5 ">Experience in Building and Electrical Projects</h2>
    <div class="line-break"></div>
    <p class="text-center primary-text my-3">Since our establishment we have participated in various projects and the following are only some of them</p>
    <div class="container">
        <div class="row gx-2 gy-4">
            <div class="col-xs-6 col-md-3">
                <img class="card-img-top" src="./resources/grid kibaha 01.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center primary-text my-2">High Voltage Works</h4>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <img class="card-img-top" src="./resources/working area binua mchanga.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center primary-text my-2">Tanzania Portland Cement</h4>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <img class="card-img-top" src="./resources/eng kneeling and troubleshooting.png" .jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center primary-text my-2">Competent Team</h4>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <img class="card-img-top" src="./resources/work area 03.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center primary-text my-2">Experience in Building</h4>
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <button class="btn primary-btn-outline">
                See All of Our Jobs
            </button>
        </div>

    </div>
</div>

<!-- call to action -->
<div class="container-fluid" data-aos="zoom-in" data-aos-duration="500">
    <div class="container my-5 bg-shagayu rounded py-md-5">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-light text-center my-2">View Our Service Bronchure</h5>
                <p class="text-light text-center mb-2">
                    Our Profile and Service Bronchure is give all the important details about us, including services we offer, our company profile and progress.
                </p>
                <p class="text-sm text-center secondary-text ">The Bronchure comes as a PDF file</p>
                <div class="text-center"> <a href="#" download class="btn btn-outline-light mx-auto">
                        Download Bronchure
                    </a>
                </div>
            </div>
            <div class="col-md-7 mt-sm-5 mt-2">
                <h3 class="text-light text-center">Subscribe To Get Updates</h3>
                <div class="line-break mb-2"></div>
                <div class="glass-shagayu-top mx-2 mx-md-5 rounded">

                    <form action="subscribe.php" method="POST" class="m-3">
                        <div class="form-group">
                            <div class="text-center pt-2">
                                <label for="emailInputForSubscription" class="text-light text-center">Your Email Address</label>
                            </div>
                            <div class="text-center mt-2">
                                <input type="email" class="mx-auto text-center subscribe-input b-light form-control w-md-50" name="subscriber" id="emailInputForSubscription" placeholder="youremail@company.com">
                            </div>
                            <div class="text-center my-2">
                                <button type="submit" class="btn btn-outline-light px-md-5 px-2 my-3">Subscribe</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<button class="back-to-top btn primary-btn" id="back-to-top-btn" onclick="scrollToTopFunction()">
    Back To Top
</button>

<?php
include_once 'footer.php';
?>