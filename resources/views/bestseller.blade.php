<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Seller</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- thư viện search icon -->
    <link href="img/favicon.ico" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- best seller CSS -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Cars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

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
    <link rel="stylesheet" href="{{ asset('css/best-seller.css') }}">
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
                    <small>36/5 D5.Bình Thạnh.TPHCM</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>24/7 Operation</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+84 771234569</small>
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
     <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow sticky-top p-0">
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
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/financialsupport" class="dropdown-item">Financial Support</a>
                        <a href="/warranty" class="dropdown-item">Warranty Policy</a>
                        <a href="/partnerdirectory" class="dropdown-item">Partner Directory</a>
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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-white mb-3 animated slideInDown">Top 10 best-selling cars in Vietnam in 2022</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- content  start-->
    
    <!-- table_best seller -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Ranking</th>
                        <th scope="col">Car Model</th>
                        <th scope="col">December sales</th>
                        <th scope="col">Sales in 2022</th>
                        <th scope="col">Compared to 2021</th>
                        <th scope="col">Price (VND)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="body_1">
                        <th scope="row">1</th>
                        <td>Toyota Vios</td>
                        <td>2.764 car</td>
                        <td>23.529 car</td>
                        <td>Increase 3.698 car</td>
                        <td>483-630 milion</td>
                      </tr>
                      <tr class="body_2">
                        <th scope="row">2</th>
                        <td>Huynhdai Accent</td>
                        <td>2.929 car</td>
                        <td>22.645 car</td>
                        <td>Increase 2.689 car</td>
                        <td>426-542 milion</td>
                      </tr>
                      <tr class="body_1">
                        <th scope="row">3</th>
                        <td>Mitsubishi Xpander</td>
                        <td>1.856 car</td>
                        <td>21.983 car</td>
                        <td>Increase 8.367 car</td>
                        <td>555-670 milion</td>
                      </tr>
                      <tr class="body_2">
                        <th scope="row">4</th>
                        <td>Toyota Corolla Cross</td>
                        <td>2.479 car</td>
                        <td>21.473 car</td>
                        <td>Increase 3.062 car</td>
                        <td>720-910 milion</td>
                      </tr>
                      <tr class="body_1">
                        <th scope="row">5</th>
                        <td>Ford Ranger</td>
                        <td>2.424 car</td>
                        <td>16.477 car</td>
                        <td>Increase 827 car</td>
                        <td>656-965 milion</td>
                      </tr>
                      <tr class="body_2">
                        <th scope="row">6</th>
                        <td>Honda City</td>
                        <td>1.186 car</td>
                        <td>14.696 car</td>
                        <td>Increase 4.951 car</td>
                        <td>529-599 milion</td>
                      </tr>
                      <tr class="body_1">
                        <th scope="row">7</th>
                        <td>Toyota Veloz</td>
                        <td>1.228 car</td>
                        <td>14.104 car</td>
                        <td>No change</td>
                        <td>658-698 milion</td>
                      </tr>
                      <tr class="body_2">
                        <th scope="row">8</th>
                        <td>Mazda CX-5</td>
                        <td>715 car</td>
                        <td>12.700 car</td>
                        <td>Increase 2.470 car</td>
                        <td>829-1,049 bilion</td>
                      </tr>
                      <tr class="body_1">
                        <th scope="row">9</th>
                        <td>Kia Seltos</td>
                        <td>452 car</td>
                        <td>12.398 car</td>
                        <td>Decrease 3724 car</td>
                        <td>649-769 milion</td>
                      </tr>
                      <tr class="body_2">
                        <th scope="row">10</th>
                        <td>Huyndai Creta</td>
                        <td>1.877 car</td>
                        <td>12.398 car</td>
                        <td>No change</td>
                        <td>620-730 milion</td>
                      </tr>

                    </tbody>
                  </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
    <!-- detail_content -->
    <div class="content-detail">
        <center><h2 class="text-white">1.Toyota Vios</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/toyota-vios.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>Overcoming a series of competitors, Toyota Vios officially returns to the crown of the best-selling automobile in Vietnam in 2022. Despite the increasingly diversified automobile market, Toyota Vios has still proved its attraction to Vietnamese customers. Sales of this model for the year reached 23,529 units, an increase of nearly 3,600 units compared to last year. Vios is assembled by Toyota in Vietnam, selling price from 483 - 630 million VND. Entering 2023, this model is forecasted to change comprehensively with the new generation that has hit the Thai market.</p>
            </div>
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">2. Hyundai Accent</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/huynhdai accent.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>A remarkable sprint with nearly 3,000 units sold in December 12, however, with total sales reached 2022,22 units, Toyota Vios is still behind Toyota Vios in the race for B-class sedan sales as well as the whole market. Similar to previous years, in 645, Hyundai Accent in Vietnam is assembled and distributed by TC Motor, but this model has not changed much in design and technology.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">3. Mitsubishi Xpander</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/mitsubishi-xpander.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>With the presence of the upgrade in 2022, Mitsubishi Xpander continues to show its attraction in the Vietnamese market. Despite the appearance of many new models in the MPV segment, Xpander is still the first choice of many Vietnamese customers. With 21,983 units sold, an increase of nearly 8,400 units compared to last year, Mitsubishi Xpander ranked 3rd in the Top 10 best-selling cars in Vietnam in 2022.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">4. Toyota Corolla Cross</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/toyota-corolla-cross.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>Stylish, modern design with stable, economical operation ... are the factors that help Corolla Cross attract Vietnamese customers. In 2022, Toyota Corolla Cross sales reached 21,473 units, an increase of more than 3,000 units compared to 2021. From 2023, this model will continue to be imported by Toyota from Thailand but add some equipment and increase the price.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">5. Ford Ranger</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/Ford-ranger.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>With sales volume of 16,447 units, about 5,000 units less than Toyota Corolla Cross, Ford Ranger ranked 5th in the Top 10 best-selling cars in Vietnam in 2022. Compared to last year, Ranger sales increased by nearly 830 vehicles compared to 2021. The switch to domestic assembly helps the Ranger be more proactive in terms of supply. Besides, the appearance of the new generation also helps Ranger create attraction to maintain its position in the market. This is also the only pickup model to appear in the Top 10 best-selling cars in Vietnam in 2022.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">6. Honda City</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/honda-city.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>The 3rd B-class sedan to appear on this list after Toyota Vios, Hyundai Accent. Honda City achieved sales of nearly 15,000 vehicles in 2022. In addition to the strengths of design, technology, stable operation, savings ... The dealer's continuous reduction in selling prices also contributes to helping Honda City create attraction with consumers. This model is assembled and distributed by Honda Vietnam with 3 versions with a selling price of 529 - 599 million VND.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">7. Toyota Veloz</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/toyota-veloz.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>Participating in the Vietnamese automobile market from March 3, Toyota Veloz showed its attraction when closing 2022 with total sales reached 2022,14 units. This achievement helped Toyota Veloz rank 104th. From 7, Toyota Veloz will be transferred by the Japanese automaker to assemble in Vietnam instead of importing to be more proactive in supply.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">8. Mazda CX-5</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/mazda-cx.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>Despite the appearance of a series of new models in the 5-seat crossover segment in Vietnam in 2022, Mazda CX-5 is still the first choice of many Vietnamese customers. Sales of this model in 2022 reached 12,700 units, an increase of nearly 2,500 units compared to 2021. Entering 2023, the Mazda CX-5 assembled and distributed by THACO Mazda is expected to have many changes.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">9. Kia Seltos</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/kia_seltos.jpg') }}/" alt="">
            </div>
            <div class="content col-md-6">
                <p>Still participating in the Top 10 best-selling cars in Vietnam in 2022 with nearly 12,400 units sold, but compared to 2021, sales of Kia Seltos have decreased by nearly 3,800 units. The difficulty of supply along with the constantly increasing selling price while the market is increasingly appearing new options... making the Kia Seltos no longer maintain its growth momentum. After many price adjustments, Kia Seltos is now priced at VND 649 - 769 million.</p>
            </div>    
        </div>
    </div>

    <div class="content-detail">
        <center><h2 class="text-white">10. Hyundai Creta</h2></center>
        <div style="display: flex;">
            <div class="col-md-1"></div>
            <div class="img col-md-5">
                    <img src="{{ asset('img/hyundai-creta.jpg') }}" alt="">
            </div>
            <div class="content col-md-6">
                <p>In 2022, the Hyundai Creta has made an impressive comeback to the Vietnamese market. Comprehensive makeover in design, technology compared to the old generation with the name of imported cars ... help Hyundai Creta create attraction with Vietnamese customers. At the end of 2022, sales of this model reached 12,096 units.</p>
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