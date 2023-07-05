<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarDetail</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- thư viện search icon -->
    <link href="../img/favicon.ico" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- template CSS -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/car.css') }}" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>

    <!-- cars css -->
    <link href="{{ asset('css/Cars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>


<body >
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
                    <small>+84 123456789</small>
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
                <!-- nút search -->
                
                <i class='bx bx-search' id="search-icon"></i>
                <div class="search-box container">
                
                </div>
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/carlist" class="nav-item nav-link">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/financialsupport" class="dropdown-item">Financial Support</a>
                        <a href="/warranty" class="dropdown-item">Warranty Policy</a>
                        <a href="/partnerdirectory" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blog </a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-white mb-3 animated slideInDown">Cars</h1>
                
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Nội dụng here -->
    @foreach ($carlist as $car)
   <h1 class="mt-10 text-primary">{{ $car->carName }}</h1>
    <div class="row">
        <div class="col-md-8 content-detail">
            <div class="introduce bg-antiquewhite">
                <div class="noidung mt-15" style="border-radius: 10px;">
                    <p>The {{ $car->carName }} belongs to the high-performance sports C-segment segment, has a hatchback design and is considered a street racing car. This is also the most successful Type R badge in the history of the Japanese car brand. After 25 years with 6 life cycles, now Civic Type R has had a lot of changes, becoming stronger and sportier. </p>
                </div>
            </div>
            <div class="introduce ">
                <div ng-controller="myController" >
                    <img  src="../upload/{{$car->carImage }}" id="photo">
                    <br>
                    <img  src="../upload/{{$car->carImage }}"   ng-click="changePhoto('img/civic.jpg')" class="R">
                    <img  src="../upload/{{$car->carImage }}"  ng-click="changePhoto('img/Ford-Everest-3.jpg')" class="R">
                    <img  src="../upload/{{$car->carImage }}"  ng-click="changePhoto('img/homemaz.jpg')" class="R">  
                    <img  src="../upload/{{$car->carImage }}"   ng-click="changePhoto('img/civic.jpg')" class="R">
                    <img  src="../upload/{{$car->carImage }}"  ng-click="changePhoto('img/Ford-Everest-3.jpg')" class="R">
                    <img  src="../upload/{{$car->carImage }}"  ng-click="changePhoto('img/homemaz.jpg')" class="R">   
                </div>
            </div>
            @endforeach
    </div>
    <div class="col-md-4 content-detail">
        <a href="/financialsupport" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="border-radius: 15px; width: 60%;">Credit loans<i class="fa fa-arrow-right ms-3"></i></a>
        <div class="introduce bg-antiquewhite chinhanh">
            <h2 class="tieude-18"><b>Detailed description/review</b></h2>
            @foreach ($carlist as $car)
            <div class="noidung">
                <p>{{ $car->carName }} is currently imported CBU, basic equipment includes:</p>
            </div>
            <table class="table table-hover mt-3 text-white table-borderless" >
            <tbody class="row-hover ">
                <tr class="row-2 odd ">
                    <td class="column-1">Car Type</td>
                    <td class="column-2">{{ $car->carName }}</td>
                </tr>
                <tr class="row-3 odd ">
                    <td class="column-1">Car Brand</td>
                    <td class="column-2">{{ $car->carBrand }}</td>
                </tr>
                <tr class="row-4 odd ">
                    <td class="column-1">Car Price</td>
                    <td class="column-2">{{ $car->carPrice }}</td>
                </tr>
                <tr class="row-5 odd ">
                    <td class="column-1">Year Of Manufacture</td>
                    <td class="column-2">{{ $car->carYear}}</td>
                </tr>
                <tr class="row-6 odd ">
                    <td class="column-1">Car Model</td>
                    <td class="column-2">{{ $car->carModel}}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
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
    <script src="https://kit.fontawesome.com/2745e261bc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/mainnn.js') }}"></script>
</body>

</html>