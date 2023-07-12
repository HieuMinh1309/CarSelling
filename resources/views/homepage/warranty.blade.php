<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AutoWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Template CSS -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    
    <!-- warranty font -->
    <link href="{{ asset('css/warrantyfont.css') }}" rel="stylesheet">

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
                        <a href="/warranty" class="dropdown-item active">Warranty Policy</a>
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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 mb-3 animated slideInDown" style="color: #a80000;">Warranty Policy</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- content Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <h2>What is the purpose of car maintenance ?</h2>
            <hr>
            <p>Not only cars but any mechanical structure will experience wear and tear over time. The purpose of maintenance is to address this wear and tear so that the systems within the vehicle can function at their best. Regular and timely car maintenance helps minimize damages, ensures stable operation, prolongs lifespan, and ensures compliance with safety and environmental regulations.</p>
            <div class="anhxe1"></div><br><br>
            <h3>The categories of car maintenance</h3>
            <hr>
            <p><b>Engine Oil Change</b>: Regularly replace every 5,000 km or 6 months. Engine oil has the function of lubricating, cooling, cleaning, and preventing corrosion for the car engine. If the engine oil is not regularly replaced, it can lead to accelerated engine wear, increased susceptibility to damage, and engine overheating.</p>
            <p><b>Engine Oil Filter Replacement</b>: Regularly replace every 10,000 km. The engine oil filter is responsible for removing debris before the oil enters the new lubrication cycle. If the oil filter is not replaced regularly, it can negatively impact the quality of the lubricating oil.</p>
            <p><b>Engine Air Filter Replacement</b>: Regular cleaning every 10,000 km, and replacement every 20,000 - 30,000 km. The engine air filter is responsible for removing dust and dirt from the air before it enters the combustion chamber. If the air filter is not replaced regularly, it can become clogged with accumulated dirt. This can restrict airflow into the combustion chamber and affect the air-fuel mixture ratio.</p>
            <div class="anhxe2"></div><br><br>
            <p><b>Fuel Filter Replacement</b>: Regular replacement every 40,000 km or 2 years. The fuel filter is responsible for removing impurities before the fuel enters the combustion chamber. If the fuel filter is not replaced regularly, the fuel can become contaminated, resulting in reduced combustion efficiency and affecting engine performance.</p>
            <p><b>Spark Plug Replacement</b>: Regular cleaning every 20,000 km, and replacement every 40,000 km for regular spark plugs, or every 100,000 km for Iridium spark plugs. Spark plugs are responsible for generating the spark that ignites the fuel-air mixture to generate engine power. Over time, spark plugs can become dirty, worn out, or corroded, resulting in weak or delayed ignition, or even failure to ignite. Therefore, regular cleaning and replacement are necessary.</p>
            <p><b>Injector Cleaning</b>: Regular cleaning every 20,000 km. Injectors are responsible for spraying fuel to create combustion inside the combustion chamber. After prolonged use, injectors can accumulate carbon deposits and dirt, therefore requiring cleaning.</p>
            <p><b>Coolant Replacement</b>: Regularly check and top up every 10,000 km, and replace coolant every 40,000 - 60,000 km. Coolant is responsible for cooling the car engine. Over time, the coolant can become dirty or degraded, so it is necessary to check and replace it regularly.</p>
            <div class="anhxe3"></div><br><br>
            <p><b>Valve Clearance Inspection</b>: Regularly inspect every 40,000 km. When the engine is running, the valves come into contact with high-temperature combustion gases, which can cause them to expand. Therefore, a clearance is necessary to ensure that when they expand, they can still close tightly during the compression stroke. However, if the clearance is too large, it can lead to incorrect valve opening/closing timing. Therefore, it is necessary to regularly inspect and adjust the valve clearance to the proper specifications.</p>
            <p><b>Replacement of Camshaft Drive Belt</b>: Regular replacement every 100,000 km. The camshaft drive belt connects the camshaft sprocket and the crankshaft to create synchronized and coordinated movement. Over time, the camshaft belt can become worn or cracked, therefore requiring periodic replacement.</p>
            <p><b>Inspection of Engine Belts</b>: Regular inspection every 100,000 km (replace if necessary). Engine belts help drive the engine for various systems such as air conditioning, water pump, power steering pump, and alternator. After prolonged use, the belts can become worn or cracked, so they need to be regularly inspected and promptly replaced when deteriorating.</p>
            <p><b>Idle Speed Adjustment Check</b>: Regular check every 100,000 - 120,000 km. The idle speed control valve helps control the engine speed under no-load conditions. Over time, the valve may become misaligned, so it needs to be checked and readjusted.</p>
            <p><b>Transmission Fluid Replacement</b>: Regular replacement every 40,000 - 60,000 km. Transmission fluid lubricates, cleans, and protects the internal components of the transmission. After prolonged use, the transmission fluid can become dirty, degraded, and lose its viscosity, therefore requiring periodic replacement.</p>
            <div class="anhxe4"></div><br><br>
            <p><b>Differential Oil Replacement (Transmission Fluid)</b>: Regular replacement every 40,000 km. Differential oil lubricates and reduces friction in the transmission system.</p>
            <p><b>Front/Rear Brake Inspection and Maintenance</b>: Regular inspection every 10,000 km or 6 months. The car's braking system operates at high frequencies under harsh conditions due to significant frictional forces. Therefore, regular inspections are necessary. Brake inspection includes checking the brake pads, brake cylinders, brake booster, parking brake, and ABS brakes.</p>
            <p><b>Parking Brake Inspection and Adjustment</b>: Regular inspection every 20,000 - 40,000 km. The parking brake system ensures the vehicle remains stationary when parked. Although the parking brake experiences less load compared to the foot brake, it is still subjected to frequent operation and therefore requires periodic inspection and adjustment.</p>
            <p><b>Brake Fluid Replacement</b>: Regular inspection every 10,000 km, and replacement every 2 - 3 years. Brake fluid transmits force to the braking system. However, over time, brake fluid can become contaminated with water due to its hygroscopic nature, and it can also accumulate dirt. Therefore, regular replacement is necessary.</p>
            <div class="anhxe5"></div><br><br>
            <p><b>Power Steering Fluid Replacement</b>: Regular inspection every 10,000 km, and replacement every 60,000 - 80,000 km. Power steering fluid helps transmit force to the steering rack, making steering smoother and easier.</p>
            <p><b>Tire Rotation</b>: Regular rotation every 10,000 km. Due to uneven weight distribution on the vehicle's axles, tires can wear unevenly. Therefore, regular tire rotation is necessary to ensure even tire wear and maximize the lifespan of the tires.</p>
            <p><b>Air Conditioning, Fan, and Heating System Inspection</b>: Regular inspection every 5,000 km or 6 months. This includes checking and cleaning the air conditioning filter, cleaning the evaporator coil (every 40,000 km), replacing the cabin air filter (every 2 years), and checking and refilling refrigerant if necessary.</p>
            <div class="anhxe6"></div><br><br>
            <p><b>Inspection of Ventilation Valve, Box Cats, Pipes, and Connectors</b>: Regular inspection every 20,000 - 40,000 km.</p>
            <p><b>Inspection of Drive Belt, Dust Shields</b>: Regular inspection every 10,000 km or 6 months.</p>
            <p><b>Suspension System Inspection (Shock Absorbers, Bushings, etc.), Drive Shaft Dust Shields</b>: Regular inspection every 10,000 km or 6 months.</p>
            <p><b>Exhaust System Inspection</b>: Regular inspection every 10,000 km or 6 months.</p>
            <p><b>Fuel Tank Cap, Fuel System Pipes, Connectors Inspection</b>: Regular inspection every 10,000 km or 6 months.</p>
            <p><b>Steering Play, Linkage, and Steering Column Inspection</b>: Regular inspection every 10,000 km or 6 months.</p>
            <div class="anhxe7"></div><br>
            <p><b>Windshield Washer Fluid, Wiper Blades Inspection</b>: Regular inspection every 5,000 km or 6 months.</p>
            <p><b>Vehicle Horn System Inspection</b>: Regular inspection every 5,000 km or 6 months.</p>
            <p><b>Tire Pressure, Tire Wear Inspection</b>: Regular inspection every 5,000 km or 6 months.</p>
            <p><b>Battery Inspection, Electrode Wear</b>: Regular inspection every 5,000 km or 6 months.</p>
            <p><b>Vehicle Lighting System Inspection</b>: Regular inspection every 5,000 km or 6 months.</p>
            <br><br>
            <h3>Regulations on Car Maintenance Schedule</h3>
            <hr>
            <p>According to the car maintenance schedules provided by automobile manufacturers, maintenance intervals are usually calculated based on mileage or the vehicle's operating time, depending on which comes first. In most cases, people tend to follow the maintenance schedule based on the mileage accumulated by the vehicle.</p>
            <p>However, time is also an important factor to consider when it comes to car maintenance. Even if a car has not reached the recommended mileage for maintenance, it is still necessary to have it serviced when the maintenance period is due.</p>
            <div class="anhxe8"></div><br><br><br>
            <h3>Levels of car maintenance by km and time</h3>
            <hr>
            <h4>Maintenance Level 1 (5.000 km)</h4>
            <p>Maintenance Level 1 is carried out when the vehicle has traveled 5,000 km or every 3 months, depending on which comes first. The items included in Level 1 maintenance for a car are as follows:</p>
            <ul>
                <li>Replace engine oil</li>
                <li>Check windshield washer fluid and wiper blades</li>
                <li>Inspect the vehicle's horn system</li>
                <li>Check the air conditioning, fan, and heating system</li>
                <li>Check tire pressure and tire wear</li>
                <li>Inspect the battery and electrode wear</li>
                <li>Check the vehicle's lighting system</li>
            </ul>
            <div class="anhxe9"></div><br><br><br>
            <h4>Maintenance Level 2 (10.000 km)</h4>
            <p>Maintenance level 2 is performed when the vehicle has traveled 10.000 km or every 6 months, depending on which comes first. The maintenance tasks for level 2 include:</p>
            <ul>
                <li>Maintenance items such as level 1</li>
                <li>Engine oil filter replacement</li>
                <li>Engine air filter cleaning</li>
                <li>Coolant level check/refill</li>
                <li>Power steering fluid level check/refill</li>
                <li>Brake fluid level check/refill</li>
                <li>Front/rear brake inspection and maintenance</li>
                <li>Differential and dust shield inspection</li>
                <li>Suspension system and drive axle dust shield inspection</li>
                <li>Exhaust system inspection</li>
                <li>Fuel tank cap, lines, and fuel system connector inspection</li>
                <li>Steering play, linkage, and steering column inspection</li>
                <li>Tire rotation</li>
            </ul>
            <div class="anhxe10"></div><br><br><br>
            <h4>Maintenance Level 3 (20.000 - 30.000 km)</h4>
            <p>Maintenance Level 3 is performed when the vehicle has traveled 20.000 - 30.000 km or after 1 year, depending on which comes first. Maintenance Level 3 for cars includes the following items:</p>
            <ul>
                <li>Maintenance items such as level 2</li>
                <li>Engine air filter replacement</li>
                <li>Spark plug cleaning</li>
                <li>Inspection and adjustment of the parking brake</li>
            </ul>
            <div class="anhxe11"></div><br><br><br>
            <h4>Maintenance Level 4 (40.000 - 60.000 km)</h4>
            <p>Level 4 maintenance is performed when the vehicle has traveled 40.000 - 60.000 km or after 2 - 3 years, depending on whichever comes first. The level 4 car maintenance items include:</p>
            <ul>
                <li>Maintenance items like level 3</li>
                <li>Check and adjust valve clearances</li>
                <li>Replace fuel filter</li>
                <li>Replace engine coolant</li>
                <li>Replace brake fluid</li>
                <li>Replace power steering fluid</li>
                <li>Replace gearbox oil</li>
                <li>Replace differential oil</li>
                <li>Replace spark plugs (if using regular spark plugs)</li>
            </ul>
            <div class="anhxe12"></div><br><br><br>
            <h4>High-level maintenance (80.000 - 100.000 km)</h4>
            <p>"Level 5 maintenance is performed when the vehicle has traveled 80.000 - 100.000 km or after 4 - 5 years, depending on whichever comes first. It is also applicable when maintaining a used car at the 4 - 5 years mark or the 9 - 10 years mark. The level 5 car maintenance items include:</p>
            <ul>
                <li>Maintenance items like level 4</li>
                <li>Check and replace the camshaft drive belt if worn out</li>
                <li>Inspect engine belts and replace if worn out</li>
                <li>Check and adjust idle speed</li>
            </ul>
            <div class="anhxe13"></div><br><br>
            <p><b>*</b> The maintenance levels and items listed here are only for general reference. Each car manufacturer, each car model may have different maintenance levels and items depending on the specific characteristics of each car manufacturer and model.</p>
            <h4>The schedule for maintenance and replacement of parts for various car manufacturers.</h4>
            <hr>
            <h5>The maintenance schedule for Toyota vehicles</h5>
            <p>According to the Toyota maintenance schedule, the vehicle needs to be serviced regularly every 5.000 kilometers. Toyota Vietnam divides the regular maintenance content into the following 4 levels:</p>
            <ul>
                <li>Minor maintenance: 5.000 km - 15.000 km - 25.000 km - 35.000 km...</li>
                <li>Medium-level maintenance: 10.000 km - 30.000 km - 50.000 km - 70.000 km...</li>
                <li>Medium-to-major maintenance: 20.000 km - 60.000 km - 100.000 km - 140.000 km...</li>
                <li>Major maintenance: 40.000 km - 80.000 km - 120.000 km - 160.000 km...</li>
            </ul>
            <h5>The maintenance schedule for Honda vehicles</h5>
            <p>According to the Honda maintenance schedule, the vehicle needs to undergo its first maintenance after the initial 1.000 kilometers. Subsequent regular maintenance is recommended every 5.000 kilometers or every 3 to 6 months (whichever comes first). There are also important milestones at 20.000 kilometers, 40.000 kilometers, 60.000 kilometers, 100.000 kilometers, 120.000 kilometers, 140.000 kilometers, 160.000 kilometers, 180.000 kilometers, and 200.000 kilometers.</p>
            <h5>The maintenance schedule for Mazda vehicles</h5>
            <p>According to the Mazda maintenance schedule, the vehicle needs to undergo its first maintenance after the initial 1.000 kilometers. Subsequent regular maintenance is recommended every 5.000 kilometers or every 3 to 6 months (whichever comes first), with specific milestones such as 5.000 kilometers, 10.000 kilometers, 15.000 kilometers, 20.000 kilometers, 25.000 kilometers...</p>
            <h5>The maintenance schedule for Hyundai vehicles</h5>
            <p>According to the Hyundai maintenance schedule, the vehicle needs to be serviced regularly every 5,000 kilometers. Hyundai divides the regular maintenance content into the following 4 levels:</p>
            <ul>
                <li>Maintenance Level 1: 5.000 km - 15.000 km - 25.000 km...</li>
                <li>Maintenance Level 2: 10.000 km - 30.000 km - 50.000 km...</li>
                <li>Maintenance Level 3: 20.000 km - 60.000 km - 100.000 km...</li>
                <li>Maintenance Level 4: 40.000 km - 80.000 km - 120.000 km...</li>
            </ul>
            <h5>The maintenance schedule for Ford vehicles</h5>
            <p>According to the Ford maintenance schedule, the vehicle needs to undergo its first maintenance after the initial 1.000 kilometers. Subsequent regular maintenance is recommended at 10.000 kilometers, 20.000 kilometers, 30.000 kilometers, 40.000 kilometers, 50.000 kilometers, 60.000 kilometers, 70.000 kilometers, 80.000 kilometers, 90.000 kilometers, 100.000 kilometers, 110.000 kilometers, 120.000 kilometers, 130.000 kilometers, 140.000 kilometers, 150.000 kilometers, 160.000 kilometers...</p>
            <h5>The maintenance schedule for Audi vehicles</h5>
            <ul>
                <li>Maintenance Level 1: 5.000 - 10.000 miles</li>
                <li>Maintenance Level 2: 20.000 - 30.000 miles</li>
                <li>Maintenance Level 3: 40.000 - 60.000 miles</li>
                <li>Maintenance Level 4: 80.000 - 100.000 miles</li>
            </ul>
            <p>Please note that specific maintenance intervals and requirements may vary depending on the model and specific recommendations from Audi.</p>
            <h5>The maintenance schedule for BMW vehicles</h5>
            <ul>
                <li>The vehicle requires its first maintenance after the initial 1.000 kilometers.</li>
                <li>Subsequent regular maintenance is recommended every 10.000 kilometers or every 12 months (whichever comes first).</li>
                <li>Additional important milestones include 20.000 kilometers, 40.000 kilometers, 60.000 kilometers, 80.000 kilometers, 100.000 kilometers, and so on.</li>
            </ul>
            <p>Please note that specific maintenance intervals and requirements may vary depending on the model and specific recommendations from BMW.</p>
            <h5>The maintenance schedule for Nissan vehicles</h5>
            <ul>
                <li>Maintenance Level 1: Every 5.000 to 7.500 miles or 8.000 to 12.000 kilometers</li>
                <li>Maintenance Level 2: Every 15.000 miles or 24.000 kilometers</li>
                <li>Maintenance Level 3: Every 30.000 miles or 48.000 kilometers</li>
                <li>Maintenance Level 4: Every 60.000 miles or 96.000 kilometers</li>
            </ul>
            <p>Please note that this is a general maintenance schedule, and the actual intervals may vary depending on the specific Nissan model and year. It is always recommended to consult your vehicle's owner's manual for the accurate and up-to-date maintenance schedule tailored to your Nissan car.</p>
            <h5>The maintenance schedule for Porsche vehicles</h5>
            <ul>
                <li>Level 1: Every 10,000 to 15,000 miles (16.000 to 24.000 kilometers)</li>
                <li>Level 2: Every 20,000 to 30,000 miles (32.000 to 48.000 kilometers)</li>
                <li>Level 3: Every 40,000 to 60,000 miles (64.000 to 96.000 kilometers)</li>
                <li>Level 4: Every 80,000 to 100,000 miles (128.000 to 160.000 kilometers)</li>
            </ul>
            <p>Please note that the maintenance intervals may vary depending on the specific Porsche model and year. It is important to consult your vehicle's owner's manual or contact an authorized Porsche service center for the accurate and up-to-date maintenance schedule tailored to your particular Porsche car. They will provide you with the specific recommendations and guidelines to ensure proper maintenance and care for your Porsche vehicle.</p>
            <h5>The maintenance schedule for Suzuki vehicles</h5>
            <p>1. Regular Maintenance:</p>
            <ul>
                <li>Oil and filter change: Typically recommended every 5.000 to 7.500 miles (8.000 to 12.000 kilometers) or as per the manufacturer's recommendation.</li>
                <li>Tire rotation and inspection: Usually performed every 5.000 to 7.500 miles (8.000 to 12.000 kilometers) to ensure even tire wear.</li>
                <li>Fluid level check: Regularly check and top up fluids such as engine coolant, brake fluid, power steering fluid, and windshield washer fluid.</li>
                <li>Air filter replacement: Replace the engine air filter periodically, usually around every 15.000 to 30.000 miles (24.000 to 48.000 kilometers).</li>
            </ul>
            <p>2. Preventive Maintenance:</p>
            <ul>
                <li>Brake inspection: Inspect brake pads, rotors, and calipers regularly to ensure proper braking performance.</li>
                <li>Battery inspection: Check the battery condition, terminals, and clean them if necessary.</li>
                <li>Belt and hose inspection: Inspect belts and hoses for any signs of wear or damage.</li>
                <li>Suspension and steering inspection: Check the suspension components, steering system, and shocks/struts for any issues.</li>
                <li>Cabin air filter replacement: Replace the cabin air filter to ensure clean and fresh air inside the car.</li>
            </ul>
            <p>3. Major Maintenance:</p>
            <ul>
                <li>Spark plug replacement: Replace spark plugs as recommended by the manufacturer, usually around every 30.000 to 60.000 miles (48.000 to 96.000 kilometers).</li>
                <li>Timing belt replacement: Some Suzuki models have timing belts that require periodic replacement. Refer to the owner's manual for the recommended interval.</li>
                <li>Transmission fluid replacement: Replace the transmission fluid as per the manufacturer's recommendation.</li>
                <li>Coolant replacement: Replace the engine coolant at the specified interval to maintain optimal engine performance.</li>
            </ul>
            <p>Please note that the actual maintenance schedule may vary based on the specific Suzuki model, year, and engine type. Therefore, it is always advisable to refer to your vehicle's owner's manual or consult with an authorized Suzuki service center for the accurate and up-to-date maintenance schedule tailored to your Suzuki car.</p>
            <h3>Car maintenance cost</h3>
            <hr>
            <p>The car maintenance cost depends on various factors such as the maintenance and replacement parts price list specific to each car manufacturer, maintenance level, vehicle condition, car model, and car type. However, in general, the maintenance cost for common car models typically ranges from:</p>
            <ul>
                <li>The maintenance cost for level 1 ranges from 800,000 to 1,500,000 Vietnamese Dong.</li>
                <li>The maintenance cost for level 2 ranges from 1,200,000 to 2,500,000 Vietnamese Dong.</li>
                <li>The maintenance cost for level 3 ranges from 2,000,000 to 4,000,000 Vietnamese Dong.</li>
                <li>The maintenance cost for level 4 ranges from 6,000,000 to 10,000,000 Vietnamese Dong.</li>
            </ul>
            <div class="anhxe14"></div><br><br>
            <h3>Car maintenance procedure</h3>
            <hr>
            <p>Typically, the car maintenance procedure includes the following steps:</p>
            <p>Step 1: Customers make an appointment.</p>
            <p>Step 2: Customers bring the car to the maintenance center as scheduled.</p>
            <p>Step 3: The maintenance center receives and inspects the car.</p>
            <p>Step 4: The maintenance center informs the customer of the maintenance or repair items needed (if any) and provides a detailed quotation for each item.</p>
            <p>Step 5: The maintenance center proceeds with the maintenance, repair (if needed), and car cleaning.</p>
            <p>Step 6: Returning the car, customers check and receive it.</p>
            <h3>Where should I get my car serviced/repaired at a reputable place?</h3>
            <hr>
            <p>We have reputable and trustworthy partners that you can entrust your car to. Here are some locations for your reference:</p>
            <ul>
                <li>First Place: 8 Nguyễn Huệ, Phường Phú Thuận, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</li>
                <li>Second Place: 195 Điện Biên Phủ, Phường 15, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</li>
                <li>Thirst Place: 250 Lương Định Của, An Phú, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam</li>
            </ul>
            <p>Find out more about our partner <a href="/partnerdirectory" style="color: red;" target="_blank">Good Year</a> the best place for you to get a brand new car and they have the best services we can confirm.</p>

</div>
    </div>
    <!-- content End -->


   


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