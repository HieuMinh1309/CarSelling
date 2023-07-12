<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Template CSS -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <!-- Partner Page CSS -->
    <link href="{{ asset('css/partneredit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/introduct.css') }}" rel="stylesheet">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>35/6 D5 street, Binh Thanh district</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 12.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+84 778067776</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('img/W-removebg-preview.png') }}" alt="" style="height:250px; margin-top: 20px; width: 70%;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="" class="nav-item nav-link">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/financial" class="dropdown-item">Financial Support</a>
                        <a href="/warranty" class="dropdown-item">Warranty Policy</a>
                        <a href="/partnerdirectory" class="dropdown-item active">Partner Directory</a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blog</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-white mb-3 animated slideInDown">Partner Directory</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Banner Introduce -->
    <div class="container-fluid top-section">
        <div class="row">
            <div class="col-md-6 bg-white banner-image">
                <div class="anhbanner"></div>
            </div>
            <div class="col-md-6 all-info">
                <div class="logoGY"></div>
                <h1 class="single-post-title">
                    <span class="text-white">Good Year Hồ Chí Minh city</span>
                </h1>
                <div class="address">
                    <p>
                        <i class="fa fa-location-arrow arrowicon"></i>
                        <span class="diachi text-white">"195  Điện Biên Phủ street, ward 15, Bình Thạnh district, Hồ Chí Minh city, Việt Nam"</span>
                        <a href="https://goo.gl/maps/vRBmEi8eFaPjn3aX8" target="_blank"><span>(Open Map)</span></a>
                    </p>
                </div>
                <hr>
                <div class="short-info row">
                    <div class="col-md-6>">
                        <p>
                            <span style="font-weight: 400;">Monday – Sunday: 8:00 – 18:00</span>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="support-info">
                            <span>
                                <div class="logoGY1"></div>
                            </span>
                            <span class="support-info-detail">
                                <p>Hotline</p>
                                <a href="tel:0916.489.785" id="hotline">
                                    <i class="fa fa-phone-square icon"></i>
                                    "0916.489.785"
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="col-md-7  content-detail">
        <div class="introduce mt-5">
            <h2 class="box-title" id="gioithieu">Introduce</h2>
            <div class="noidung">
                <p>"Good Year" is a highly regarded and trusted multi-car service company that has been providing exceptional automotive solutions for years. With a strong commitment to quality, reliability, and customer satisfaction, GoodYear has established itself as a leading name in the industry.</p>
                <div class="content1"></div>
                <figcaption class="captiontext">GoodYear dealership in Ho Chi Minh City</figcaption>
                <p>As a multi-car service company, GoodYear offers a comprehensive range of services to meet the diverse needs of car owners. Whether you drive a sedan, SUV, truck, or any other vehicle, GoodYear has you covered. From routine maintenance to complex repairs, their team of skilled technicians is equipped with the expertise and knowledge to handle it all.</p>
                <p>One of the key advantages of choosing GoodYear is their extensive network of service centers. With numerous locations conveniently spread across different regions, accessing their services is convenient and hassle-free. No matter where you are, you can trust that there's a GoodYear service center nearby, ready to provide top-notch care for your vehicle.</p>
                <div class="content2"></div>
                <figcaption class="captiontext">GoodYear dealership in Bac Giang City</figcaption>
                <p>At GoodYear, the focus is not only on fixing cars but also on building long-term relationships with customers. They understand that each vehicle is unique, and every customer has specific requirements. That's why they take the time to listen to your concerns, thoroughly inspect your vehicle, and provide personalized recommendations and solutions.</p>
                <div class="content3"></div>
                <figcaption class="captiontext">Car Service At GoodYear</figcaption>
                <p>When it comes to parts and components, GoodYear excels in offering high-quality products. They source genuine parts from trusted manufacturers, ensuring that your vehicle receives the best replacements available. Their commitment to using authentic parts enhances the longevity and performance of your vehicle, giving you peace of mind and confidence in their services.</p>
                <div class="content4"></div>
                <figcaption class="captiontext">GoodYear's automotive parts warehouse</figcaption>
                <p>In addition to their maintenance and repair services, GoodYear also offers tire-related solutions. They specialize in tire sales, installation, and maintenance, providing you with a one-stop solution for all your tire needs. With a wide selection of top tire brands and a team of experts to guide you, GoodYear ensures that you find the perfect tires for your vehicle, enhancing its performance, safety, and fuel efficiency.</p>
                <div class="content5"></div>
                <figcaption class="captiontext">Tire installation and maintenance at GoodYear</figcaption>
                <p>Customer satisfaction is at the core of GoodYear's values. They strive to exceed expectations, not just in terms of the services they provide but also in their commitment to transparency, fairness, and integrity. By delivering reliable and consistent results, GoodYear has earned the trust and loyalty of countless customers.</p>
                <div class="content6"></div>
                <figcaption class="captiontext">The inauguration ceremony of GoodYear's new branch</figcaption>
                <p>In conclusion, GoodYear is a multi-car service company that stands out for its exceptional service, extensive network, and commitment to customer satisfaction. Whether you need routine maintenance, complex repairs, or reliable tire solutions, GoodYear has the expertise, experience, and resources to meet your automotive needs. When it comes to reliable and trusted automotive services, GoodYear is the name you can rely on.</p>
                <h3>Providing Warranty Services</h3>
                <ul>
                    <li>Parts Warranty: GoodYear guarantees the quality and warranty of genuine parts installed during the repair process</li>
                    <li>Labor Warranty: GoodYear ensures the quality of work performed by their technicians and commits to reparation if any issues arise after the repair</li>
                    <li>Engine Warranty: GoodYear offers warranty coverage for engine repairs and improvements, ensuring enhanced performance and reliability</li>
                    <li>Suspension and Steering System Warranty: GoodYear guarantees the safety and performance of the suspension and steering system, providing warranty coverage for repair and maintenance work that meets the highest standards</li>
                    <li>Brake System Warranty: GoodYear ensures proper and safe operation of the brake system, offering warranty coverage for brake system repair and maintenance</li>
                    <li>Electrical System Warranty: GoodYear commits to the performance and reliability of the vehicle's electrical system and provides warranty coverage for electrical system repair and maintenance</li>
                </ul>
                <h3>Providing Repair Services</h3>
                <ul>
                    <li>Regular Maintenance According to Standard Procedures</li>
                    <li>Inspection and Corrective Repairs in Accordance with Procedures</li>
                </ul>
                <h3>Our Showrooms</h3>
                <ul>
                    <li>919 Đ. Âu Cơ, Phường 14, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam <a href="https://goo.gl/maps/r2iEVsrpojuYCC2i6" target="_blank"><span style="color: pink; font-size: 15px;">(Open Map)</span></a></li>
                    <li>6 Đ. Trần Hưng Đạo, Phường Phạm Ngũ Lão, Quận 1, Thành phố Hồ Chí Minh, Việt Nam <a href="https://goo.gl/maps/xEWV6FgWdXGiKz7x9" target="_blank"><span style="color: pink; font-size: 15px;">(Open Map)</span></a></li>
                    <li>162 Nguyễn Trọng Tuyển, Phường 8, Phú Nhuận, Thành phố Hồ Chí Minh, Việt Nam <a href="https://goo.gl/maps/mWbSvaoQ5TnzgzGr7" target="_blank"><span style="color: pink; font-size: 15px;">(Open Map)</span></a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>35/6 D5 street, Binh Thanh district</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 778067776</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Autoworld@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 12.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 5.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="/financialsupport">Financial Support</a>
                    <a class="btn btn-link" href="/warranty">Insurance/warranty Policy </a>
                    <a class="btn btn-link" href="/partnerdirectory">Partner Directory</a>
                    <a class="btn btn-link" href="/contact">Online Counseling</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Don't hesitate to contact us if you have any problem.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AutoWorld</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="/">Home</a>
                            <a href="https://vi.wikipedia.org/wiki/Cookie_(tin_học)">Cookies</a>
                            <a href="/contact">Help</a>
                            <a href="https://fqas.org">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>