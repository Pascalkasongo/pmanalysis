<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home_user/tele/utilisateur/LifeSure/FAQ.html */
class __TwigTemplate_5578e08f1a26bc6449c2d022a1a14e7b97b933f564ec2596cdc3aad704854dd5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_user/tele/utilisateur/LifeSure/FAQ.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

    
<!-- Mirrored from themewagon.github.io/LifeSure/FAQ.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\">
        <title>LifeSure - Life Insurance Website Template</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Inter:slnt,wght@-10..0,100..900&amp;display=swap\" rel=\"stylesheet\">

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"../../use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link rel=\"stylesheet\" href=\"lib/animate/animate.min.css\"/>
        <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">
        <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"css/style.css\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class=\"container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block\">
            <div class=\"container\">
                <div class=\"row gx-0 align-items-center\">
                    <div class=\"col-lg-8 text-center text-lg-start mb-lg-0\">
                        <div class=\"d-flex flex-wrap\">
                            <div class=\"border-end border-primary pe-3\">
                                <a href=\"#\" class=\"text-muted small\"><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Find A Location</a>
                            </div>
                            <div class=\"ps-3\">
                                <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>example@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 text-center text-lg-end\">
                        <div class=\"d-flex justify-content-end\">
                            <div class=\"d-flex border-end border-primary pe-3\">
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn p-0 text-primary me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                            <div class=\"dropdown ms-3\">
                                <a href=\"#\" class=\"dropdown-toggle text-dark\" data-bs-toggle=\"dropdown\"><small><i class=\"fas fa-globe-europe text-primary me-2\"></i> English</small></a>
                                <div class=\"dropdown-menu rounded\">
                                    <a href=\"#\" class=\"dropdown-item\">English</a>
                                    <a href=\"#\" class=\"dropdown-item\">Bangla</a>
                                    <a href=\"#\" class=\"dropdown-item\">French</a>
                                    <a href=\"#\" class=\"dropdown-item\">Spanish</a>
                                    <a href=\"#\" class=\"dropdown-item\">Arabic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid nav-bar px-0 px-lg-4 py-lg-0\">
            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-light\"> 
                    <a href=\"#\" class=\"navbar-brand p-0\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fab fa-slack me-2\"></i> LifeSure</h1>
                        <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-0 mx-lg-auto\">
                            <a href=\"index-2.html\" class=\"nav-item nav-link\">Home</a>
                            <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                            <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                            <a href=\"blog.html\" class=\"nav-item nav-link\">Blog</a>
                            <div class=\"nav-item dropdown active\">
                                <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                    <span class=\"dropdown-toggle\">Pages</span>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"feature.html\" class=\"dropdown-item\">Our Features</a>
                                    <a href=\"team.html\" class=\"dropdown-item\">Our team</a>
                                    <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                    <a href=\"FAQ.html\" class=\"dropdown-item active\">FAQs</a>
                                    <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            <div class=\"nav-btn px-3\">
                                <button class=\"btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                <a href=\"#\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0\"> Get a Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-none d-xl-flex flex-shrink-0 ps-4\">
                        <a href=\"#\" class=\"btn btn-light btn-lg-square rounded-circle position-relative wow tada\" data-wow-delay=\".9s\">
                            <i class=\"fa fa-phone-alt fa-2x\"></i>
                            <div class=\"position-absolute\" style=\"top: 7px; right: 12px;\">
                                <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                            </div>
                        </a>
                        <div class=\"d-flex flex-column ms-3\">
                            <span>Call to Our Experts</span>
                            <a href=\"tel:+ 0123 456 7890\"><span class=\"text-dark\">Free: + 0123 456 7890</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Header Start -->
        <div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Frequently Asked Questions</h4>
                <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                    <li class=\"breadcrumb-item\"><a href=\"index-2.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active text-primary\">FAQs</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- FAQs Start -->
        <div class=\"container-fluid faq-section bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-xl-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100\">
                            <div class=\"mb-5\">
                                <h4 class=\"text-primary\">Some Important FAQ's</h4>
                                <h1 class=\"display-4 mb-0\">Common Frequently Asked Questions</h1>
                            </div>
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingOne\">
                                        <button class=\"accordion-button border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            Q: What happens during Freshers' Week?
                                        </button>
                                    </h2>
                                    <div id=\"collapseOne\" class=\"accordion-collapse collapse show active\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body rounded\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Q: What is the transfer application process?
                                        </button>
                                    </h2>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            Q: Why should I attend community college?
                                        </button>
                                    </h2>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
                        <img src=\"img/carousel-2.png\" class=\"img-fluid w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-xl-9\">
                        <div class=\"mb-5\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6 col-lg-6 col-xl-5\">
                                    <div class=\"footer-item\">
                                        <a href=\"index-2.html\" class=\"p-0\">
                                            <h3 class=\"text-white\"><i class=\"fab fa-slack me-3\"></i> LifeSure</h3>
                                            <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                                        </a>
                                        <p class=\"text-white mb-4\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                        <div class=\"footer-btn d-flex\">
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"footer-item\">
                                        <h4 class=\"text-white mb-4\">Useful Links</h4>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> About Us</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Features</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Services</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> FAQ's</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Blogs</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Contact</a>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                    <div class=\"footer-item\">
                                        <h4 class=\"mb-4 text-white\">Instagram</h4>
                                        <div class=\"row g-3\">
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-1.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-1.jpg\" data-lightbox=\"footerInstagram-1\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-2.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-2.jpg\" data-lightbox=\"footerInstagram-2\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-3.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-3.jpg\" data-lightbox=\"footerInstagram-3\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-4.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-4.jpg\" data-lightbox=\"footerInstagram-4\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-5.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-5.jpg\" data-lightbox=\"footerInstagram-5\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-6.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-6.jpg\" data-lightbox=\"footerInstagram-6\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"pt-5\" style=\"border-top: 1px solid rgba(255, 255, 255, 0.08);\">
                            <div class=\"row g-0\">
                                <div class=\"col-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fas fa-map-marker-alt fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Address</h4>
                                                    <p class=\"mb-0\">123 Street New York.USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fas fa-envelope fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Mail Us</h4>
                                                    <p class=\"mb-0\">info@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fa fa-phone-alt fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Telephone</h4>
                                                    <p class=\"mb-0\">(+012) 3456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Newsletter</h4>
                            <p class=\"text-white mb-3\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class=\"position-relative rounded-pill mb-4\">
                                <input class=\"form-control rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
                                <button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
                            </div>
                            <div class=\"d-flex flex-shrink-0\">
                                <div class=\"footer-btn\">
                                    <a href=\"#\" class=\"btn btn-lg-square rounded-circle position-relative wow tada\" data-wow-delay=\".9s\">
                                        <i class=\"fa fa-phone-alt fa-2x\"></i>
                                        <div class=\"position-absolute\" style=\"top: 2px; right: 12px;\">
                                            <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-flex flex-column ms-3 flex-shrink-0\">
                                    <span>Call to Our Experts</span>
                                    <a href=\"tel:+ 0123 456 7890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class=\"container-fluid copyright py-4\">
            <div class=\"container\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-md-6 text-center text-md-end mb-md-0\">
                        <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class=\"col-md-6 text-center text-md-start text-body\">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                        Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com/\">HTML Codex</a> Distributed By <a class=\"border-bottom text-white\" href=\"https://themewagon.com/\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src=\"../../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"lib/wow/wow.min.js\"></script>
        <script src=\"lib/easing/easing.min.js\"></script>
        <script src=\"lib/waypoints/waypoints.min.js\"></script>
        <script src=\"lib/counterup/counterup.min.js\"></script>
        <script src=\"lib/lightbox/js/lightbox.min.js\"></script>
        <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
        

        <!-- Template Javascript -->
        <script src=\"js/main.js\"></script>
    </body>


<!-- Mirrored from themewagon.github.io/LifeSure/FAQ.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_user/tele/utilisateur/LifeSure/FAQ.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    
<!-- Mirrored from themewagon.github.io/LifeSure/FAQ.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\">
        <title>LifeSure - Life Insurance Website Template</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Inter:slnt,wght@-10..0,100..900&amp;display=swap\" rel=\"stylesheet\">

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"../../use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link rel=\"stylesheet\" href=\"lib/animate/animate.min.css\"/>
        <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">
        <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"css/style.css\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class=\"container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block\">
            <div class=\"container\">
                <div class=\"row gx-0 align-items-center\">
                    <div class=\"col-lg-8 text-center text-lg-start mb-lg-0\">
                        <div class=\"d-flex flex-wrap\">
                            <div class=\"border-end border-primary pe-3\">
                                <a href=\"#\" class=\"text-muted small\"><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Find A Location</a>
                            </div>
                            <div class=\"ps-3\">
                                <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>example@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 text-center text-lg-end\">
                        <div class=\"d-flex justify-content-end\">
                            <div class=\"d-flex border-end border-primary pe-3\">
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn p-0 text-primary me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                            <div class=\"dropdown ms-3\">
                                <a href=\"#\" class=\"dropdown-toggle text-dark\" data-bs-toggle=\"dropdown\"><small><i class=\"fas fa-globe-europe text-primary me-2\"></i> English</small></a>
                                <div class=\"dropdown-menu rounded\">
                                    <a href=\"#\" class=\"dropdown-item\">English</a>
                                    <a href=\"#\" class=\"dropdown-item\">Bangla</a>
                                    <a href=\"#\" class=\"dropdown-item\">French</a>
                                    <a href=\"#\" class=\"dropdown-item\">Spanish</a>
                                    <a href=\"#\" class=\"dropdown-item\">Arabic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid nav-bar px-0 px-lg-4 py-lg-0\">
            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-light\"> 
                    <a href=\"#\" class=\"navbar-brand p-0\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fab fa-slack me-2\"></i> LifeSure</h1>
                        <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-0 mx-lg-auto\">
                            <a href=\"index-2.html\" class=\"nav-item nav-link\">Home</a>
                            <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                            <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                            <a href=\"blog.html\" class=\"nav-item nav-link\">Blog</a>
                            <div class=\"nav-item dropdown active\">
                                <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                    <span class=\"dropdown-toggle\">Pages</span>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"feature.html\" class=\"dropdown-item\">Our Features</a>
                                    <a href=\"team.html\" class=\"dropdown-item\">Our team</a>
                                    <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                    <a href=\"FAQ.html\" class=\"dropdown-item active\">FAQs</a>
                                    <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            <div class=\"nav-btn px-3\">
                                <button class=\"btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                <a href=\"#\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0\"> Get a Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-none d-xl-flex flex-shrink-0 ps-4\">
                        <a href=\"#\" class=\"btn btn-light btn-lg-square rounded-circle position-relative wow tada\" data-wow-delay=\".9s\">
                            <i class=\"fa fa-phone-alt fa-2x\"></i>
                            <div class=\"position-absolute\" style=\"top: 7px; right: 12px;\">
                                <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                            </div>
                        </a>
                        <div class=\"d-flex flex-column ms-3\">
                            <span>Call to Our Experts</span>
                            <a href=\"tel:+ 0123 456 7890\"><span class=\"text-dark\">Free: + 0123 456 7890</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Header Start -->
        <div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Frequently Asked Questions</h4>
                <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                    <li class=\"breadcrumb-item\"><a href=\"index-2.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active text-primary\">FAQs</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- FAQs Start -->
        <div class=\"container-fluid faq-section bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-xl-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100\">
                            <div class=\"mb-5\">
                                <h4 class=\"text-primary\">Some Important FAQ's</h4>
                                <h1 class=\"display-4 mb-0\">Common Frequently Asked Questions</h1>
                            </div>
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingOne\">
                                        <button class=\"accordion-button border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            Q: What happens during Freshers' Week?
                                        </button>
                                    </h2>
                                    <div id=\"collapseOne\" class=\"accordion-collapse collapse show active\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body rounded\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Q: What is the transfer application process?
                                        </button>
                                    </h2>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            Q: Why should I attend community college?
                                        </button>
                                    </h2>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
                        <img src=\"img/carousel-2.png\" class=\"img-fluid w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-xl-9\">
                        <div class=\"mb-5\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6 col-lg-6 col-xl-5\">
                                    <div class=\"footer-item\">
                                        <a href=\"index-2.html\" class=\"p-0\">
                                            <h3 class=\"text-white\"><i class=\"fab fa-slack me-3\"></i> LifeSure</h3>
                                            <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                                        </a>
                                        <p class=\"text-white mb-4\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                        <div class=\"footer-btn d-flex\">
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                            <a class=\"btn btn-md-square rounded-circle me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"footer-item\">
                                        <h4 class=\"text-white mb-4\">Useful Links</h4>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> About Us</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Features</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Services</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> FAQ's</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Blogs</a>
                                        <a href=\"#\"><i class=\"fas fa-angle-right me-2\"></i> Contact</a>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                    <div class=\"footer-item\">
                                        <h4 class=\"mb-4 text-white\">Instagram</h4>
                                        <div class=\"row g-3\">
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-1.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-1.jpg\" data-lightbox=\"footerInstagram-1\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-2.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-2.jpg\" data-lightbox=\"footerInstagram-2\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-3.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-3.jpg\" data-lightbox=\"footerInstagram-3\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-4.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-4.jpg\" data-lightbox=\"footerInstagram-4\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-5.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-5.jpg\" data-lightbox=\"footerInstagram-5\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class=\"col-4\">
                                                <div class=\"footer-instagram rounded\">
                                                    <img src=\"img/instagram-footer-6.jpg\" class=\"img-fluid w-100\" alt=\"\">
                                                    <div class=\"footer-search-icon\">
                                                        <a href=\"img/instagram-footer-6.jpg\" data-lightbox=\"footerInstagram-6\" class=\"my-auto\"><i class=\"fas fa-link text-white\"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"pt-5\" style=\"border-top: 1px solid rgba(255, 255, 255, 0.08);\">
                            <div class=\"row g-0\">
                                <div class=\"col-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fas fa-map-marker-alt fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Address</h4>
                                                    <p class=\"mb-0\">123 Street New York.USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fas fa-envelope fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Mail Us</h4>
                                                    <p class=\"mb-0\">info@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-xl-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"btn-xl-square bg-primary text-white rounded p-4 me-4\">
                                                    <i class=\"fa fa-phone-alt fa-2x\"></i>
                                                </div>
                                                <div>
                                                    <h4 class=\"text-white\">Telephone</h4>
                                                    <p class=\"mb-0\">(+012) 3456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Newsletter</h4>
                            <p class=\"text-white mb-3\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class=\"position-relative rounded-pill mb-4\">
                                <input class=\"form-control rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
                                <button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
                            </div>
                            <div class=\"d-flex flex-shrink-0\">
                                <div class=\"footer-btn\">
                                    <a href=\"#\" class=\"btn btn-lg-square rounded-circle position-relative wow tada\" data-wow-delay=\".9s\">
                                        <i class=\"fa fa-phone-alt fa-2x\"></i>
                                        <div class=\"position-absolute\" style=\"top: 2px; right: 12px;\">
                                            <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-flex flex-column ms-3 flex-shrink-0\">
                                    <span>Call to Our Experts</span>
                                    <a href=\"tel:+ 0123 456 7890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class=\"container-fluid copyright py-4\">
            <div class=\"container\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-md-6 text-center text-md-end mb-md-0\">
                        <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class=\"col-md-6 text-center text-md-start text-body\">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                        Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com/\">HTML Codex</a> Distributed By <a class=\"border-bottom text-white\" href=\"https://themewagon.com/\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src=\"../../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"lib/wow/wow.min.js\"></script>
        <script src=\"lib/easing/easing.min.js\"></script>
        <script src=\"lib/waypoints/waypoints.min.js\"></script>
        <script src=\"lib/counterup/counterup.min.js\"></script>
        <script src=\"lib/lightbox/js/lightbox.min.js\"></script>
        <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
        

        <!-- Template Javascript -->
        <script src=\"js/main.js\"></script>
    </body>


<!-- Mirrored from themewagon.github.io/LifeSure/FAQ.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:57:01 GMT -->
</html>", "home_user/tele/utilisateur/LifeSure/FAQ.html", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\home_user\\tele\\utilisateur\\LifeSure\\FAQ.html");
    }
}
