<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    @extends('landing_page.main')
    @include('landing_page.stylesheet')
</head>

    <body>

          <header id="header" id="home">
            <div class="container">
                    @include('landing_page.navbar')
            </div>
          </header>


        <!-- start banner Area -->
        <section class="carousel_8c38" id="carousel">

            <div id="carousel_8c38" class="carousel slide" data-bs-ride="carousel">

                {{-- <div class="carousel-indicators">
                    <button type="button" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-slide-to="2"></button>
                </div> --}}

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="banner-area">
                            <div class="container">
                                <div class="row fullscreen d-flex align-items-center justify-content-start">
                                    <div class="banner-content col-lg-7">
                                        <h6 class="text-white text-uppercase">Coffee, yes  ||  You, maybe</h6>
                                        <h1>
                                            DNA<br>
                                            Spot Cafe
                                        </h1>
                                        <a href="https://wa.me/6282124923532" class="primary-btn text-uppercase">Book Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <div class="row fullscreen d-flex align-items-center justify-content-start">
                                <img src="assets_landing_page/img/nnroom.png">
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <div class="row fullscreen d-flex align-items-center justify-content-start">
                                <img src="assets_landing_page/img/nnnnnnbooking.png">
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" href="#carouselExampleFade" type="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>

                <button class="carousel-control-next" href="#carouselExampleFade" type="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>

            </div>
        </section>

        <!-- Introduce -->
        <section class="video-sec-area pb-100 pt-40">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                       <img class="img-fluid" src="assets_landing_page/img/dna.png" alt="">
                    </div>
                    <div class="col-lg-6 video-left">

                        <h1>DNA Spot Cafe </h1>
                        <h3>[Di-En-E-Spot-Ka-Fe]noun</h3>
                        <p>
                            a warm magical Place that 99% bring inspirat on an happiness
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Tipe ruangan -->
        <section class="menu-area section-gap" id="room">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Tipe Ruangan</h1>
                            <p>Dapat menyesuaikan request</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Ruang Meeting</h4>
                                <p class="price float-right">
                                    Kapasitas 25
                                </p>
                            </div>
                            <p>
                                <img class="room-meet" src="assets_landing_page/img/room_meeting.jpg">
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Ruang Meeting (Sofa)</h4>
                                <p class="price float-right">
                                    Kapasitas 25
                                </p>
                            </div>
                            <p>
                                <img class="room-meet" src="assets_landing_page/img/room_sofa.jpg">
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Ruang Karpet Rumput</h4>
                                <p class="price float-right">
                                    Kapasitas 25
                                </p>
                            </div>
                            <p>
                                <img class="room-meet" src="assets_landing_page/img/room_rumput.jpg">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Menu Makanan & Minuman -->
        <section class="gallery-area section-gap" id="menu">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Menu Makanan & Minuman</h1>
                            <p>Belum termasuk PPN 10% </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10" >
                        <a href="assets_landing_page/img/merge.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/merge.png" alt="" style="margin-left: 100px">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- View Area -->
        <section class="gallery-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">View Area</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="assets_landing_page/img/pic1.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/pic1.png" alt="">
                        </a>
                        <a href="assets_landing_page/img/pic2.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/pic2.png" alt="">
                        </a>
                        <a href="assets_landing_page/img/pic3.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/pic3.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <a href="assets_landing_page/img/outdoor.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/outdoor.png" alt="">
                        </a>
                        <a href="assets_landing_page/img/indoor.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/indoor.png" alt="">
                        </a>

                    </div>
                </div>
            </div>
        </section>



        <!-- Fasiulitas & Rules -->
        <section class="menu-area section-gap" id="coffee">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Others</h1>
                            <p>Fasilitas, Rules, Promo</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Fasilitas</h4>
                            </div>
                            <img src="assets_landing_page/img/facilities.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Rules</h4>
                            </div>
                                <li><p><strong>Reservasi</strong> Minimal 10 orang (Dibawah 10 orang akan dikenakan biaya tambahan Rp 50.000/jam)</p></li>
                                <li><p><strong>Reservasi</strong> Private Meeting Room Rp 100.000/jam</p></li>
                                <li><p><strong>Reservasi</strong> Weekend Reservasi max jam 17:00</p></li>
                                <li><p><strong>Non-Reservasi</strong> Free, max 2 jam (*more: Rp 50.000/jam)</p></li>
                                <li><p><strong>Charge</strong> makanan/minuman dari luar : Rp 50.000/jenis (*minimal order food & drink Rp 500.000 <strong>free charge</strong>)</p></li>
                                <li><p><strong>Photo product</strong><br>
                                        ~ HP  : Konsumsi makanan/minuman minimal Rp 75.000 & Promote DNA Spot Cafe <br>
                                        ~ Pro : Konsumsi makanan/minuman minimal Rp 150.000 & Promote DNA Spot Cafe </p></li>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Promo</h4>
                            </div>
                            <img src="assets_landing_page/img/disc.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Events -->
        <section class="blog-area section-gap" id="event">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Events</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 single-blog">
                        <img class="img-fluid" src="assets_landing_page/img/accoustic.png" alt="">
                        <ul class="post-tags">
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Outdoor</a></li>
                        </ul>
                        <a href="#"><h4>DNAcoustic</h4></a>
                        <p>
                            Setiap hari Sabtu mulai jam 19:30 - 22:30
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 single-blog">
                        <img class="img-fluid" src="assets_landing_page/img/cooking_class.jpg" alt="">
                        <ul class="post-tags">
                            <li><a href="#">Cooking</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Little Barista</a></li>
                        </ul>
                        <a href="#"><h4>Cooking Class and Little Barista</h4></a>
                        <p>
                            Menu : Burger, French Fries, & Mango Bingo drink <br>
                            Registration now \(^^)/
                        </p>
                    </div>
                </div>
            </div>
        </section>
        @include('landing_page.javascript');
    </body>
</html>



