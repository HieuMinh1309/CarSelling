<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car List</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Thư viện pagination.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>

    <!-- Thư viện jQuery -->

    <!-- thư viện search icon -->
    <link href="../../img/favicon.ico" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-3.6.3.min.js') }}" rel="stylesheet">

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

    <!-- cars css -->
    <link href="{{ asset('css/Cars.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- danh muc san pham -->
    <link href="{{ asset('css/checkbox.css') }}" rel="stylesheet">
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
                    <small class="fa fa-map-marker-alt text-primaddress-showroom ary me-2"></small>
                    <small>35/6 D5 street, Binh Thanh district</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primaddress-showroom ary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 12.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primaddress-showroom ary me-2"></small>
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
                <a href="/car" class="nav-item nav-link active">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/financial" class="dropdown-item">Financial Support</a>
                        <a href="/warranty" class="dropdown-item">Warranty Policy</a>
                        <a href="/partnerdirectory" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blog </a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/compare" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
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

    <!--Card section -->
    <section class="parts card-content" id="parts" >    
        <div class="heading">
            <span class="carsfont fontt">All Cars</span>
            <h2 class="carsh2 fontt">Information About Vehicles</h2>
        </div>

        <!-- parts container -->
     <div class="row">
    <div class="card" id="carList">
        <div class="parts-container">
            <div class="row" id="myDIV">
                @foreach ($carlist as $car)
                <div class="box col-md-3">
                    <div class="car-item">
                        <div class="car-img">
                            <img src="../upload/{{$car->carImage }}" alt="">
                        </div>

                        <div class="titlebox">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <span class="titlebox">{{ $car->carBrand }}</span>
                        </div>

                        <div class="contentbox">
                            <p class="content">{{ $car->carName }}</p>
                        </div>

                        <div class="contentbox">
                            <p class="price">{{ $car->carPrice }} VNĐ</p>
                        </div>

                        <div class="buttonbox">
                            <a class="button" href="{{ route('autoworld_CRUDs.show', ['id' => $car->id]) }}" target="_blank">Car Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div id="pagination-container"></div>
            </div>
        </div>
    </div>
</div>
</section>

    <br>
    <div id="pagination-container"></div>
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
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
                    <a class="btn btn-link" href="../financialsupport.html">Financial Support</a>
                    <a class="btn btn-link" href="../warranty.html">Insurance/warranty Policy </a>
                    <a class="btn btn-link" href="../partnerdirectory.html">Partner Directory</a>
                    <a class="btn btn-link" href="../contact.html">Online Counseling</a>
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
                            <a href="../index.html">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->



    <script>
            function paginate(pageNumber) {
                var postsPerPage = 4; // Số lượng bài viết trên mỗi trang
                var blogBoxes = document.querySelectorAll('.parts-container .box');
        
                // Tính vị trí bắt đầu và kết thúc của các bài viết trên trang hiện tại
                var startIndex = (pageNumber - 1) * postsPerPage;
                var endIndex = pageNumber * postsPerPage;
        
                // Ẩn tất cả các box
                blogBoxes.forEach(function(box) {
                    box.style.display = 'none';
                });
        
                // Hiển thị các box ở vị trí thích hợp
                for (var i = startIndex; i < endIndex && i < blogBoxes.length; i++) {
                    blogBoxes[i].style.display = 'block';
                }
            }
        
            function createPagination() {
                var postsPerPage = 4; // Số lượng bài viết trên mỗi trang
                var totalPosts = {{$car->count()}}; // Tổng số bài viết
                var totalPages = Math.ceil(totalPosts / postsPerPage); // Tổng số trang
        
                var paginationContainer = document.getElementById('pagination-container');
                paginationContainer.innerHTML = '';
        
                // Tạo các nút phân trang
                for (var i = 1; i <= totalPages; i++) {
                    var pageButton = document.createElement('button');
                    pageButton.textContent = i;
                    pageButton.classList.add('page-button');
                    pageButton.addEventListener('click', function() {
                        paginate(parseInt(this.textContent));
                    });
                    paginationContainer.appendChild(pageButton);
                }
        
                // Mặc định hiển thị trang đầu tiên
                paginate(1);
            }
        
            createPagination();
        </script>


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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/mainn.js') }}"></script>
</body>

</html>
