<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>

    <?php include('header.php')?>

    <main class="d-flex flex-wrap">
        <div class="left col-12 col-lg-5 col-md-6">
            <img src="IMAGES/Vector (4).png" alt="Vector (4)"> <span style="color: #01a6dd;">Explore The
                World</span><br>
            <h1>Discover The Best Destinations In The World.</h1>
            <p>Planning a trip? Whether it's booking a flight, reserving a hotel, or securing a visa, Fijoran Travels
                makes it easy. With our trusted global partners and a wide range of visa options—like <b>Canada</b>, <b>Schengen</b>,
                <b>UK</b>, <b>Kenya E-visa</b>, <b>Vietnam E-visa</b>,<b>East Africa E-visa</b>, <b>Uganda E-visa</b>,
                <b>Qatar E-visa</b>, and more—we handle all your travel needs seamlessly. 🌍 Start your journey today!
                Contact us to plan your next adventure.
            </p>
            <br>

            <div class="info">
                <div>
                    <p class="icon"><img src="IMAGES/Group 8 (3).png" alt="location-logo"></p>
                    <p class="i">
                        <span><b>Location</b></span><br>
                        <span><input type="text" name="location" placeholder="Where Are You Going?"
                                class="info-one"></span>
                    </p>
                </div>

                <div>
                    <div>
                        <p class="icon"><img src="IMAGES/Group 9 (1).png" alt="calender-logo"></p>
                        <p class="i">
                            <span><b>Select Date</b></span><br>
                            <span><input type="date" name="date" class="info-two"></span>
                        </p>
                    </div>
                </div>
                <p class="link"><a href="#" class="btn btn-primary">GET STARTED</a></p>
            </div>
        </div>

        <div class="right col-12 col-lg-7 col-md-6">
            <p><img src="IMAGES/first.png" alt="Group 15"></p>
        </div>

    </main>


    <section class="section-one d-flex flex-wrap">
        <div class="sec-cont-one col-12 col-lg-6 col-md-6">
            <img src="IMAGES/Group 16.png" alt="Group 16" width="100%">
        </div>
        <div class="sec-cont-two col-12 col-lg-6 col-md-6">
            <h4 style="color:#01a6dd;">About Us</h4>
            <h3>We Recommend Beautiful Destination Every Month</h3>
            <P>At Fijoran Travels, we are dedicated to making travel seamless and stress-free. Whether you're traveling
                for business, leisure, or education, our expert team ensures a smooth experience from start to finish.
            </P>
            <div class="sec-one-art">
                <div >
                    <span><b id="explorers-num">2000+</b></span><br>
                    <span>Our Explorers</span>
                </div>
                <div>
                    <span><b id="destinations-num">100+</b></span><br>
                    <span>Our Destinations</span>
                </div>
                <div>
                    <span><b id="years-num">20+</b></span><br>
                    <span>Years Experience</span>
                </div>
            </div>
        </div>
    </section>

    <article class="d-flex flex-wrap">
        <div class="art-left col-12 col-lg-5 col-md-6">
            <h5 style="color: #01a6dd;">What We Give</h5>
            <h2>Unmatched Travel Solutions For Every Journey</h2>
            <p>Through our efficiency, accountability, and dedication we provide our clients in seamless travel
                experiences ,consistently surpassing their expectations. We aim to deliver unparalleled travel
                experiences worldwide. </p>
        </div>

        <div class="art-right col-12 col-lg-7 col-md-6 ">
            <div class="art-one ">
                <div class="art-one-one">
                    <img src="IMAGES/Group 8.png" alt=""><br><br>
                    <p><b>Trusted Global Partners</b></p>
                    <p>We work with leading airlines, education agencies, and travel providers, including Amadeus,
                        Edvoy, Apply Board, Qatar Airways, Virgin Atlantic, Ethiopian Airlines, and more. </p>
                </div>
                <div style="background-color: #e6f6fc;" class="art-one-two">
                    <img src="IMAGES/Group 8 (1).png" alt=""><br><br>
                    <p><b>Comprehensive Services</b></p>
                    <p>From flights to accommodation, visas, and insurance, we provide end-to-end travel solutions. </p>
                </div>
                <div class="art-one-three">
                    <img src="IMAGES/Group 8 (2).png" alt=""><br><br>
                    <p><b>Educational Journeys & Tailored Tours</b></p>
                    <p>We offer seamless study visa processing and customized tour packages to turn your educational and
                        travel dreams into reality. </p>
                </div>
            </div>

        </div>

    </article>

    <article class="article-two">
        <h5 style="color: #01a6dd;" class="text-center">Top Destination</h5>
        <h2 class="text-center">Let’s Explore Your Dream Destination Here!</h2>
        <p class="text-center">With a wide range of visa options — including Schengen, UK, Kenya E-visa, Vietnam E-visa,
            East Africa E-visa, Uganda E-visa, Qatar E-visa, and more. You can count on us to handle all your travel
            needs professionally. </p>
    </article>

    <div class="art-info">
        <div>
            <p class="icon"><i class="fa-solid fa-location-pin"></i></p>
            <p>
                <span><b>Location</b></span><br>
                <span><input type="text" name="location" placeholder="Where Are You Going?" class="info-one"></span>
            </p>
        </div>

        <div>
            <p class="icon"><i class="fa-solid fa-user"></i></p>
            <p>
                <span><b>Person</b></span><br>
                <span><input type="number" name="number-of-people" placeholder="How Many Person?"
                        class="number-of-people"></span>
            </p>
        </div>

        <div>
            <p class="icon"><i class="fa-solid fa-calendar-days"></i></p>
            <p>
                <span><b>Check-In</b></span><br>
                <span><input type="date" name="check-in" class="info-two"></span>
            </p>
        </div>

        <div>
            <p class="icon"><i class="fa-solid fa-calendar-days"></i></p>
            <p>
                <span><b>Check-Out</b></span><br>
                <span><input type="date" name="check-out" class="info-two"></span>
            </p>
        </div>

        <p class="link"><a href="#" class="btn btn-primary">GET STARTED</a></p>
    </div>

    </div>
    </div>

    <section class="section-two">
        <div class="sec-two-parent">
            <div class="sec-two-cont">
                <img src="IMAGES/Mask group (2).png" alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$250</span>
                    </div>
                </div>
            </div>
            <div class="sec-two-cont">
                <img src="IMAGES/beautiful-tropical-maldives-resort-hotel-island-with-beach-sea_1339-103673 2.png"
                    alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$450</span>
                    </div>
                </div>
            </div>
            <div class="sec-two-cont">
                <img src="IMAGES/Mask group.png" alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$300</span>
                    </div>
                </div>
            </div>
            <div class="sec-two-cont">
                <img src="IMAGES/Mask group (2).png" alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$250</span>
                    </div>
                </div>
            </div>
            <div class="sec-two-cont">
                <img src="IMAGES/beautiful-tropical-maldives-resort-hotel-island-with-beach-sea_1339-103673 2.png"
                    alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$450</span>
                    </div>
                </div>
            </div>
            <div class="sec-two-cont">
                <img src="IMAGES/Mask group.png" alt="" class="img"><br>
                <div class="locationNprice">
                    <div>
                        <b>Maldives Beach</b> <br>
                        <img src="IMAGES/Group 7.png" alt=""> <span>Labuan Bajo, United Kingdom</span>
                    </div>
                    <div class="price">
                        <span>$300</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center sec-two-view-more">
            <a href="#" class="btn btn-dark">View More</a>
        </div>
    </section>

    <article class="article-three d-flex flex-wrap">
        <div class="art-three-left col-12 col-lg-6 col-md-6">
            <h5 style="color: #20b1e1;">What We Say</h5>
            <h1>What Our Customer Say About Us</h1>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <!-- First Profile Slide -->
                    <div class="carousel-item active">
                        <div class="profile">
                            <div class="pro-flex d-flex flex-wrap">
                                <p class="pe-3">
                                    <img src="IMAGES/Mask group (6).png" alt="Profile 1"
                                        class="profile-img">
                                </p>
                                <div class="profile-name">
                                    <span><b>Park Micheal</b></span><br>
                                    <span>Travel Enthusiast</span>
                                </div>
                                <p>I had an amazing trip to the UK thanks to Fijoran Travels—everything was
                                    well-organized, and their customer service was fantastic. They made the whole
                                    process easy and stress-free, and I’ll definitely be booking with them again! <br>
                                    They're definitely so worth it 100%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Second Profile Slide -->
                    <div class="carousel-item">
                        <div class="profile">
                            <div class="pro-flex d-flex flex-wrap">
                                <p class="pe-3">
                                    <img src="IMAGES/doctor.jpg" alt="Profile 2"
                                        class="profile-imgg border rounded-circle">
                                </p>
                                <div class="profile-name">
                                    <span><b>Amy Johnson</b></span><br>
                                    <span>Doctor</span>
                                </div>
                                <p>As a doctor attending an important work meeting in Qatar, I relied on Fijoran Travels
                                    to handle all the logistics, and they did not disappoint. Their attention to detail
                                    and timely arrangements made my trip smooth and stress-free, allowing me to focus on
                                    my professional commitments.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Third Profile Slide -->
                    <div class="carousel-item">
                        <div class="profile">
                            <div class="pro-flex d-flex flex-wrap">
                                <p class="pe-3">
                                    <img src="IMAGES/black man on suit.jpeg" alt="Profile 3"
                                        class="profile-imgg border rounded-circle">
                                </p>
                                <div class="profile-name">
                                    <span><b>Wyatt Trump</b></span><br>
                                    <span>Business Man</span>
                                </div>
                                <p>As a busy businessman, I needed a hassle-free vacation in Vietnam, and Fijoran Travels
                                    exceeded my expectations. From the flawless flight bookings to the perfect
                                    accommodations, they made sure everything was taken care of, allowing me to relax
                                    and enjoy my time away.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fourth Profile Slide -->
                    <div class="carousel-item">
                        <div class="profile">
                            <div class="pro-flex d-flex flex-wrap">
                                <p class="pe-3">
                                    <img src="IMAGES/student.avif" alt="Profile 4"
                                        class="profile-imgg border rounded-circle">
                                </p>
                                <div class="profile-name">
                                    <span><b>Sarah Lee</b></span><br>
                                    <span>Entrepreneur/Student</span>
                                </div>
                                <p>Fijoran Travels made my student visa application for my Master’s program in Canada a breeze, providing clear guidance every step of the way. Thanks to their support, I was able to travel without any issues and start my studies smoothly!<br> i'm actually the happiest lady in the world right now. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </div>


        <div class="art-three-right col-12 col-lg-6 col-md-6">
            <img src="IMAGES/Mask group (5).png" alt="" width="100%" class="art-three-right-img">
        </div>
    </article>


    <section class="section-three d-flex flex-wrap">
        <div class="s-t-l col-12 col-lg-6 col-md-6">
            <h5 style="color: #4dc0e7;">Contact Us</h5>
            <h2>Don't Hesitate To Get In Touch.</h2>
            <p><img src="IMAGES/istockphoto-1319763851-612x612.jpg" alt="" class="sec-one-img"></p>
        </div>

        <form action="#" class="col-12 col-lg-6 col-md-6">
            <label for="#">Name</label><br>
            <input type="text" name="name"><br><br>
            <label for="#">Email</label><br>
            <input type="email" name="email"><br><br>
            <label for="#">Contact Number</label><br>
            <input type="number" name="number"><br><br>
            <label for="#">Preffered Travel Date</label><br>
            <input type="text" name="travel-date"><br><br>
            <label for="#">Aditional Information</label><br>
            <textarea name="additional-info" id="additional-info"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <?php include('footer.php')?>

    <script src="JAVASCRIPT/home.js"></script>
    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
</body>

</html>