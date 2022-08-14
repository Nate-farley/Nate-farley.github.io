

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Nathan - Personal Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template"/>
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose"/>
        <meta content="Nathan" name="Nathan"/>
        <!-- favicon -->
        <link rel="icon" href="images/favicon.ico" type="image/ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- MK Lightbox -->
        <link href="css/mklb.css" rel="stylesheet" type="text/css"/>
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Main css File -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt"/>
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt"/>
    </head>

    <body data-bs-spy="scroll" data-bs-offset="20" data-bs-target="#navbar-navlist">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <!-- Navbar Start -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
                <!-- Logo container-->
                <a class="logo navbar-brand" href="javascript:void(0)">Nathan</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                </button><!--end button-->

                <div class="collapse navbar-collapse navigation" id="navbarCollapse">
                    <ul id="navbar-navlist" class="navbar-nav navbar-nav-link ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li><!--end nav item-->
                    </ul>

                    <ul class="top-right text-right list-unstyled list-inline mb-0 mt-2 mt-sm-0 nav-social">
                        <li class="list-inline-item me-2"><a href="https://github.com/Nate-farley"><i class="mdi mdi-github-face"></i></a></li>
                        <li class="list-inline-item me-2"><a href="https://twitter.com/Nateefarley"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/nathan-farley-46a7a7a3/"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                    
                </div> 
            </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->

        <!-- Hero Area -->
        <div class="hero-area position-relative bg-half-120" style="background-image:url('images/hero-bg.jpg')" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 align-items-center text-center">
                        <div class="title-heading mt-4 pb-60">
                            <img src="images/nathan.png" class="img-fluid rounded-circle" alt="">
                            <h1 class="heading font-36 text-white mt-5">Nathan Farley</h1>
                            <div class="hero-btn mt-4 pt-2">
                                <a href="#contact" class="btn btn-primary rounded me-2 mb-2">Contact Me</a>
                                <a href="javascript:void(0)" class="btn btn-primary rounded text-white mb-2">Download CV <i data-feather="download" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card public-profile border-0 rounded shadow no-margin" style="z-index: 1;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-4 text-md-start">
                                        <!--<img src="images/client/05.jpg" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">--> 
                                        <div class="about-details key-feature bg-light">
                                            <div class="media-body content">
                                                <h6 class="title mb-2">Personal Details</h6>
                                                <div class="bor-bottom mt-2 mb-2"></div>
                                                <p class="text-muted mb-2 mt-3 font-14"><a href="javascript:void(0)" class="text-black">Email: </a> Natefarley@live.com </p>
                                                <p class="text-muted mb-2 font-14"><a href="javascript:void(0)" class="text-black">Languages: </a> English</p>
                                                <p class="text-muted mb-0 font-14"><a href="javascript:void(0)" class="text-black">Nationality: </a> Chinese</p>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        <div class="row align-items-end">
                                            <div class="col-md-12 text-md-start mt-4 mt-sm-0">
                                                <h4 class="heading me-2">I Am <span class="element text-primary" data-elements="Full Stack Software Developer"></span>
                                                    <span id="typed" class="text-primary"></span>
                                                </h4>
                                                <p class="text-light-muted mt-2">I am a full stack software developer with 1+ years of experience developing web applications. My skillset includes React, Redux, Bootstrap, Express and MongoDB. In my spare time I also enjoy reading and real estate. If you would like to work together or collaborate on a project feel free to reach out to me.</p>
                                                <img src="images/signature.png" height="45" width="250" alt="">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section -->

        <!-- Projects/Work Start -->
        <section class="section bg-light" id="projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="container-title text-center mb-4 pb-2">
                            <div class="titles">
                                <h2 class="title text-capitalize mb-4">My Work & Portfolio</h2>
                                <p class="pera-title para-desc-600 text-light-muted mb-0 mx-auto">Here you can find recent projects I've been working on.</p>
                                <span></span>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->


                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/instagram/1.jpg" class="img-fluids img-size" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-instagram-clone-detail.html" class="text-white title">Instagram Clone</a></h5>
                                    <h6 class="text-light tag mb-0">Web Application</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/instagram/1.jpg"  data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image">
                                        <i data-feather="camera" class="fea icon-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/netflix/1.jpg" class="img-fluids img-size" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-netflix-clone-detail.html" class="text-white title">Netflix Clone</a></h5>
                                    <h6 class="text-light tag mb-0">Web Application</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/netflix/1.jpg" data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/disney/1.jpg" class="img-fluids" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-disney-clone-detail.html" class="text-white title">Disney Plus Clone</a></h5>
                                    <h6 class="text-light tag mb-0">Web Application</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/disney/1.jpg" data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/facebook/1.jpg" class="img-fluids" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-facebook-clone-detail.html" class="text-white title">Facebook Clone</a></h5>
                                    <h6 class="text-light tag mb-0">Web Application</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/facebook/1.jpg" data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/bustracker/1.jpg" class="img-fluids" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-bustracker-detail.html" class="text-white title">Bus Tracker</a></h5>
                                    <h6 class="text-light tag mb-0">Animation</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/bustracker/1.jpg" data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <img src="images/portfolio/badbanking/1.jpg" class="img-fluids" alt="work-image">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h5 class="mb-0"><a href="page-portfolio-badbanking-detail.html" class="text-white title">Bad Banking</a></h5>
                                    <h6 class="text-light tag mb-0">Web application</h6>
                                </div>
                                <div class="icons text-center">
                                    <a href="javascript:void(0)" data-src="images/portfolio/badbanking/1.jpg" data-gallery="myGal" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="text-center">
                            <a href="page-portfolio.html" class="btn btn btn-primary rounded">See More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!-- End container -->
        </section>
        <!-- Projects End -->


        <!-- Start Section -->
        <section class="section" id="resume">
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4">
                        <div class="work-content mt-4">
                            <h2 class="text-capitalize">Work  Participation</h2>
                            <p class="mb-0 text-light-muted">My work as a Software Developer has just begun. Download my resume to see my past employment history.</p>
                            <a href="#" class="btn btn btn-primary rounded mt-4 pt-2">See More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row">
                            <div class="main-timeline">
                                <div class="timeline mt-4">
                                    <a href="#" class="timeline-content">
                                        <div class="timeline-icon text-primary">
                                            <i data-feather="feather" class="fea icon-md"></i>
                                        </div>
                                        <h3 class="title mb-0">Font End </h3>
                                        <small class="company">Font End Developer</small>
                                        <span class="badge skill-badge education-badge badge-light">2020 - Current</span>
                                        <p class="description text-light-muted mt-2">
                                            I work as a Font end Developer and design using Figma. 
                                        </p>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </section><!-- end section -->

          <!-- Client Start -->
        <section class="section bg-light fan-fact" id="about">
           
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="container-title text-center mb-2 pb-2">
                                <div class="titles">
                                    <h2 class="title text-capitalize mb-4">Education</h2>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
            
                <div class="row justify-content-center" id="counter">
                    <div class="col-lg-41 col-md-61 col-12 mt- pt-2">
                        <div class="feature-widgets text-left rounded">
                            <div class="services-icon text-primary mb-3">
                                <img class="mit-logo fea icon-md" src="./images/Mit.svg.png" />
                            </div>
                            <div class="services-texts">
                                <h3 class="title mb-3">Massachusetts Institute of Technology</h3>
                                <p class="text-light-muted mb-4">Professional Certificate in Coding: Full Stack Development with MERN.</p>
                                <a href="https://executive-ed.xpro.mit.edu/professional-certificate-coding?utm_source=Google&utm_network=g&utm_medium=c&utm_term=mit%20xpro%20coding&utm_location=9073479&utm_campaign_id=17059210457&utm_adset_id=135511781269&utm_ad_id=594862351430&gclid=EAIaIQobChMIj5v1nLy4-QIVQZFbCh2C3AAzEAAYASAAEgJjYfD_BwE" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- End Section Client -->

       

        <!-- Skill & CTA START -->
        <section class="cta-full">
            <div class="container">
                <div class="row position-relative">
                    <div class=" col-lg-4 padding-less img" style="background-image:url('images/Nathan4.png')" data-jarallax='{"speed": 5}'></div><!-- end col -->
                    <div class="col-lg-8 offset-lg-5">
                        <div class="cta-full-img-box">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center mb-3">
                                    <div class="container-title">
                                        <div class="titles">
                                            <h4 class="title title-line text-capitalize mb-4">Work Expertise</h4>
                                        </div>
                                        <p class="text-light-muted mx-auto width-max mb-0">The main area of my expertise is front-end development, HTML, CSS, React, JS, building small and medium web apps, custom plugins, features, animations, and coding interactive layouts.

                                        </p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center">
                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/bootstrap.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="70"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/nodejs-icon.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="55"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/react.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="68"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/sass.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="75"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->    
                            </div><!-- end row -->

                            <div class="row align-items-center">
                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icons rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/express.jpg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="80"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/firebase.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="85"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icon rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/material.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="70"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-6 mt-4 pt-2">
                                    <div class="card explore-feature border-0 text-center bg-white p-3">
                                        <div class="card-body p-0">
                                            <div class="skill-icons rounded-circle shadow-lg d-inline-block">
                                                <img src="images/skills/mongodb.svg" alt="" class="img-fluid mx-auto">
                                            </div>
                                            <span class="badge skill-badge badge-light"><span class="counter-value" data-target="65"></span>%</span>
                                        </div>
                                    </div>
                                </div><!--end col-->    
                            </div><!-- end row -->

                        </div> <!-- end about detail -->
                    </div> <!-- end col -->        
                </div><!--end row-->
            </div><!--end container fluid-->
        </section><!--end section-->   
        <!-- Skill & CTA End -->


       

        <!-- Contact Start -->
        <section class="section pb-0" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="container-title text-center mb-4 pb-2">
                            <div class="titles">
                                <h2 class="title text-capitalize mb-4">Contact Me</h2>
                                <p class="pera-title para-desc-600 text-light-muted mb-0 mx-auto">Whether you have a question about my project or suggestions to help me improve as a Developer, I'm ready to listen and answer your questions.</p>
                                <span></span>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">Phone</h5>
                                <p class="text-light-muted">For a faster response please reachout via text.</p>
                                <a href="tel:+152534-468-854" class="text-primary">+1 321-698-7724</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">Email</h5>
                                <p class="text-light-muted">Complete the form below and I will respond promptly.</p>
                                <a href="mailto:natefarley@live.com" class="text-primary">natefarley@live.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">Location</h5>
                                <p class="text-light-muted">Melbourne FL, 32935 </p>
                                <a href="https://goo.gl/maps/njPhguXa4952GHPY6" class="map-popup-view text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <section class="section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="custom-form mb-sm-30">
                            <form method="post" action="/php/contact.php" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                                </div> 
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input name="subject" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                                </div>                                                                               
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn btn-primary rounded" value="Send Message"> 
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Contact End -->

        <!-- Footer Start -->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="javascript:void(0)" class="footer-logo text-black">Nathan</a>
                        <p class="para-desc mx-auto mt-5 text-black">Please visit the links below to get to know me better.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item me-1"><a href="https://github.com/Nate-farley" class="rounded-circle"><i class="mdi mdi-github-face"></i></a></li>
                            <li class="list-inline-item me-1"><a href="https://twitter.com/Nateefarley" class="rounded-circle"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item me-1"><a href="https://www.linkedin.com/in/nathan-farley-46a7a7a3/" class="rounded-circle"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar bg-black">
            <div class="container text-foot text-center">
                <p class="mb-0 text-white-50">© <script>document.write(new Date().getFullYear())</script>. Design by Nathan Farley</p>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <a href="javascript: void(0);" class="back-to-top btn btn-icon btn-soft-primary" id="back-to-top" onclick="topFunction()">
            <i data-feather="arrow-up" class="icons"></i>
        </a>
        <!-- Back to top -->        
        
        <!-- Javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- MK Lightbox -->
        <script src="js/mklb.js"></script>

        <!-- Contact -->
        <script src="js/contact.js"></script>

        <!-- Counter init -->
        <script src="js/counter.init.js"></script>

        <!-- Feather icon -->
        <script src="js/feather.min.js"></script>

        <!-- Ripples -->
        <script src="js/jquery.ripples-min.js"></script>
        <script src="js/ripple.init.js"></script>

        <!-- Typed -->
        <script src="js/typed.js"></script>
        <script src="js/typed.init.js"></script>

        <!-- Switcher -->
        <script src="js/switcher.js"></script>

        <!-- Main Js -->
        <script src="js/app.js"></script>

    </body>
</html>