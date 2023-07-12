<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Financial Support</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Jquery -->
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>

    <!-- financial support CSS -->
    <link href="{{ asset('css/financialsupport.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

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
                        <a href="/financialsupport" class="dropdown-item active">Financial Support</a>
                        <a href="/warranty" class="dropdown-item">Warranty Policy</a>
                        <a href="/partnerdirectory" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blog</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/compare" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-primary mb-3 animated slideInDown">Financial Support</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- introduce -->
    <div class="container">
            <div class="row">          
                <p class="introduce">If you want to buy a car but can't afford it. We have a low-interest loan program for the purpose of supporting your car purchase.</p>
                <p class="introduce">You can borrow an amount up to 60 percent of the value of the car and choose a repayment period that suits your economy.</p>
                <p class="introduce">Auto world has partnered with a number of banks to support customers' buying and borrowing problems.</p>
                <div class="all-bank">
                    <div class="one_bank">
                        <label for="vietinbank" class="logo_bank">
                            <h2 class="font">Vietinbank</h2>
                            <img src="{{ asset('img/logo-vietinbank.png') }}" alt="">
                                
                        </label>
                    </div>
                    <div class="one_bank">
                        <label for="vietcombank" class="logo_bank">
                            <h2 style="color: green;" class="font">Vietcombank</h2>
                            <img src="{{ asset('img/logo-vietcombank.png') }}" alt="">
                            
                        </label>
                    </div>                         
                    <div class="one_bank">
                        <label for="agribank" class="logo_bank">
                            <h2 style="color:brown; "class="font">Agribank</h2>
                            <img src="{{ asset('img/logo-agribank.png') }}" alt="">
                            
                        </label>
                     </div>
                    <div class="one_bank">
                        <label for="TPBank" class="logo_bank">
                            <h2 style="color:rgb(160, 36, 169);"class="font">TP bank</h2>
                            <img src="{{ asset('img/logo-tpbank.png') }}" alt="">
                                
                        </label>
                    </div>
                </div>
                <p class="introduce">You can refer to the amount borrowed, repayment period, interest rate.</p>

                <!-- banglaisuat -->
                <div class="banglaisuat" style="display: flex;">
                    <div class="bg-white shadow-section w-100">
                        <div class="noidung">
                            <form class="m-4" style="width: 30%;">
                                <div class="form-group">
                                <label style="margin-left: 140px;">Brands</label>
                                    <br>
                                <select class="form-sosanh" id="brandname1" onchange="filterCarNames(1)" style="width: 200px; margin-left: 80px;">
                                                  <option>Choose a Brand</option>
                                                  @php
                                                  $uniqueBrands = [];
                                                  @endphp
                                                  @foreach($compareCars as $compareCar)
                                                    @if(!in_array($compareCar->brands, $uniqueBrands))
                                                      @php
                                                      $uniqueBrands[] = $compareCar->brands;
                                                      @endphp
                                                      <option>{{ $compareCar->brands }}</option>
                                                    @endif
                                                  @endforeach
                                                </select>
                                </div>
                                <div class="form-group">
                                <label style="margin-left: 140px;">Names</label>
                                <select class="form-sosanh" id="carname1" onchange="displayCarDetails(1)" style="width: 200px; margin-left: 80px;">
                                    <option>Choose Car Name</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Price Of The Car</label>
                                    <input type="text" class="form-control" name="gia-xe" id="gia-xe" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Percent</label>
                                    <select class="form-control-1" name="so-tien-vay" id="so-tien-vay"  onchange="tienvayduoc()" >
                                        <option>Select Loan Percentage</option>
                                        <option value="60">60%</option>
                                        <option value="50">50%</option>
                                        <option value="40">40%</option>
                                        <option value="30">30%</option>
                                        <option value="20">20%</option>
                                        <option value="10">10%</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Amount You Can Borrow</label>
                                    <input type="text" class="input form-control anchuot" readonly="" value="VND" name="tien-vay-no" id="tongtienvay">
                                </div>
                                <div class="form-group">
                                    <label>Payment Time</label>
                                    <select class="form-control-1" name="thoi-gian-tra" id="thoi-gian-tra">
                                        <option value="6">6 Years</option>
                                        <option value="5">5 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="2">2 Years</option>
                                        <option value="1">1 Year</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>Lãi suất/năm</label>
                                        <select class="form-control-1" name="lai-suat">
                                          <option value="7.5">7.5%</option>
                                          <option value="7.7">7.7%</option>
                                          <option value="8.9">8.9%</option>
                                        </select>
                                      </div>
                            </form>

                            <div class="m-5">
                                <div class="boxketqua">
                                    <p>Principal paid annually: <span id="totalloan" style="color: red;">0</span> VND</p>
                                    <p>Interest paid annually: <span id="totalprofit" style="color: red;">0</span> VND</p>
                                    <p>Annual payment amount: <span id="totalmoneytopay" style="color: red;">0</span> VND</p>
                                </div>
                                <div class="button-center">
                                        <input type="button" value="Calculate" onclick="tinhtien()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="box-size-1 text-editor">         
                            <p class="introduce">This table helps you calculate the amount to pay when borrowing to buy a car based on the price of the car you choose.</p>
                            <p class="introduce">The method of calculating according to the balance decreases every month.</p>
                            <p class="introduce">The value of the table is relative, which will be detailed in detail when conducting the installment procedure.</p>  
                        </div> 
            </div>
    </div>


                <!-- information -->
                <p style="color:white; background-color: red; width: 75%; margin-left: 255px; padding-left: 10px;">If you feel the program is a good fit, leave some information and we'll get in touch and assist you right away.</p>
                <div style="display: flex;">
                    <div class="information">
                        <h1 class="step">Input the infomation</h1>
                        <form action="" method="post">
                            <input type="text" placeholder="Full name" id="fullname" class="form-control w-75">
                            <input type="text" placeholder="Citizen Identity Card" id="cccd" class="form-control mt-3 w-75">
                            <input type="text" placeholder="Number Phone" id="number" class="form-control mt-3 w-75">
                            <input type="text" placeholder="Address" id="address" class="form-control mt-3 w-75">
                            <input type="text" placeholder="Job" id="job" class="form-control mt-3 w-75">
                        </form>
                    </div>
                    <div class="condition">
                        <h1 class="step">Condition</h1>
                        <p>Customers are individuals from full 18 years old or older with full civil act capacity</p>
                        <p>Have the financial ability to repay debts.</p>
                        <p>Have full identification documents</p>
                        <p>Prepayment time stipulated</p>
                        <p>Clean personal record, no criminal record.</p>
                    </div>
                </div>
            </div>
            <button onclick="check()" class="button-check ">Send</button>
    </div>
                
    <!-- content section -->
            

    <!-- tính lãi suất -->

    <script>
var compareCars = <?php echo json_encode($compareCars); ?>;
var filteredCars1 = [];
var filteredCars2 = [];
var filteredCars3 = [];

function filterCarNames(selectNumber) {
    var brandSelect = document.getElementById('brandname' + selectNumber);
    var carSelect = document.getElementById('carname' + selectNumber);

    if (!brandSelect || !carSelect) {
        console.error('Missing brandSelect or carSelect element');
        return;
    }

    var selectedBrand = brandSelect.value;

    switch (selectNumber) {
        case 1:
            filteredCars1 = compareCars.filter(function (car) {
                return car.brands === selectedBrand;
            });
            updateCarSelect(carSelect, filteredCars1);
            break;
        case 2:
            filteredCars2 = compareCars.filter(function (car) {
                return car.brands === selectedBrand;
            });
            updateCarSelect(carSelect, filteredCars2);
            break;
        case 3:
            filteredCars3 = compareCars.filter(function (car) {
                return car.brands === selectedBrand;
            });
            updateCarSelect(carSelect, filteredCars3);
            break;
        default:
            console.error('Invalid selectNumber');
            break;
    }
}

function updateCarSelect(carSelect, filteredCars) {
    carSelect.innerHTML = '<option>Choose Car Name</option>';

    filteredCars.forEach(function (car) {
        var option = document.createElement('option');
        option.text = car.carName;
        carSelect.add(option);
    });
}

function displayCarDetails(selectNumber) {
    var carSelect = document.getElementById('carname' + selectNumber);
    var giaXeInput = document.getElementById('gia-xe');

    if (!carSelect || !giaXeInput) {
        console.error('Missing carSelect or giaXeInput element');
        return;
    }

    var selectedCarName = carSelect.value;
    var selectedCar;

    switch (selectNumber) {
        case 1:
            selectedCar = filteredCars1.find(function (car) {
                return car.carName === selectedCarName;
            });
            break;
        case 2:
            selectedCar = filteredCars2.find(function (car) {
                return car.carName === selectedCarName;
            });
            break;
        case 3:
            selectedCar = filteredCars3.find(function (car) {
                return car.carName === selectedCarName;
            });
            break;
        default:
            console.error('Invalid selectNumber');
            break;
    }

    if (selectedCar) {
        giaXeInput.value = selectedCar.price;
    } else {
        giaXeInput.value = '';
    }
}
</script>

<script>
        // hàm để ngăn cách đơn vị tiền
        function formatCurrencyVND(value) {
            let format = value.toLocaleString('it-IT', {style: 'currency', currency: 'VND'});
            format = format.split('');
            format.splice(-3);
            return format.join('');
        }

        function tienvayduoc(){
            let vaytoida = ($('select[name=so-tien-vay]').val() || 0) / 100;
            let tienxe = parseInt(document.getElementById('gia-xe').value || 0);
            let ketqua = formatCurrencyVND(parseInt(vaytoida * tienxe));
            $('input[name=tien-vay-no]').val(ketqua);
        }

        function tinhtien(){
            let vaytoida = ($('select[name=so-tien-vay]').val() || 0) / 100;
            let tienxe = parseInt(document.getElementById('gia-xe').value || 0);
            let thoigianvay = ($('select[name=thoi-gian-tra]').val() || 0);
            let laisuat = ($('select[name=lai-suat]').val() || 0) / 100;
            let totalloan = (vaytoida * tienxe);
            let principal = formatCurrencyVND(parseFloat(totalloan/thoigianvay));
            let profit= formatCurrencyVND((parseFloat(totalloan*laisuat)/thoigianvay));
            let tiengoc= parseFloat(totalloan/thoigianvay);
            let tienlai= parseFloat((totalloan*laisuat)/thoigianvay);
            let tongtien = formatCurrencyVND(parseFloat(tiengoc + tienlai))

            document.getElementById('totalloan').innerHTML= principal;
            document.getElementById('totalprofit').innerHTML= profit;
            document.getElementById('totalmoneytopay').innerHTML= tongtien;
        }
    // information
        function check(){
            location.reload('');
            alert('Thank You For Letting Us Know Your Opinions');
        }
    </script>

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
                    <a class="btn btn-link" href="financialsupport.html">Financial Support</a>
                    <a class="btn btn-link" href="warranty.html">Insurance/warranty Policy </a>
                    <a class="btn btn-link" href="partnerdirectory.html">Partner Directory</a>
                    <a class="btn btn-link" href="contact.html">Online Counseling</a>
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
                            <a href="">Home</a>
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.9/Rx.min.js"></script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>