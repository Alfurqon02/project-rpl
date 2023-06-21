<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    @extends('landing_page.main');
    @include('landing_page.stylesheet');
</head>

    <body>

          <header id="header" id="home">			  	
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="#"><img src="assets_landing_page/img/logodna.png" style="width: 100px" alt="" title="" /></a>
                    @include('landing_page.navbar');	
                  </div>
                  	    		
                </div>
            </div>
          </header><!-- #header -->


        <!-- start banner Area -->
        <section class="carousel_8c38" id="carousel">
            {{-- <ol class="u-absolute-hcenter u-carousel-indicators u-block-fc40-2">
                <li data-u-target="#carousel_8c38" class="u-active-white u-palette-3-base u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel_8c38" class="u-active-white u-palette-3-base u-shape-circle u-active" style="width: 10px; height: 10px;" data-u-slide-to="1"></li>
            </ol> --}}
            <div id="carousel_8c38" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="container">

                        <div class="row fullscreen d-flex align-items-center justify-content-start">
                            <div class="banner-content col-lg-7">
                                <img src="assets_landing_page/img/header-bg.jpg">
                                <h6 class="text-white text-uppercase">Coffee, yes  ||  You, maybe</h6>
                                <h1>
                                    DNA<br>
                                    Spot Cafe		
                                </h1>
                                <a href="#" class="primary-btn text-uppercase">Book Now!</a>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                
              </div>
        </section>


        <section class="banner-area" id="home">	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-7">
                        <h6 class="text-white text-uppercase">Coffee, yes  ||  You, maybe</h6>
                        <h1>
                            DNA<br>
                            Spot Cafe		
                        </h1>
                        <a href="#" class="primary-btn text-uppercase">Book Now!</a>
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start video-sec Area -->
        <section class="video-sec-area pb-100 pt-40" id="about">
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
        <!-- End video-sec Area -->
        
        <!-- Start menu Area -->
        <section class="menu-area section-gap" id="coffee">
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
        <!-- End menu Area -->
        
        <!-- Start gallery Area -->
        <section class="gallery-area section-gap" id="gallery">
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
                    {{-- <div class="col-lg-8">
                        <a href="assets_landing_page/img/drink.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/drink.png" alt="">
                        </a>
                    </div> --}}

                    <div class="col-lg-10" >
                        <a href="assets_landing_page/img/merge.png" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/merge.png" alt="" style="margin-left: 100px">
                        </a>
                    </div>
                    {{-- <div class="col-lg-4">
                        <a href="assets_landing_page/menu-bg.jpg" class="img-pop-home">
                            <img class="img-fluid" src="menu-bg.jpg" alt="">
                        </a>	
                        <a href="assets_landing_page/img/g2.jpg" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/g2.jpg" alt="">
                        </a>	
                    </div>
                    <div class="col-lg-8">
                        <a href="assets_landing_page/img/g3.jpg" class="img-pop-home">
                            <img class="img-fluid" src="assets_landing_page/img/g3.jpg" alt="">
                        </a>	
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="assets_landing_page/img/g4.jpg" class="img-pop-home">
                                    <img class="img-fluid" src="assets_landing_page/img/g4.jpg" alt="">
                                </a>	
                            </div>
                            <div class="col-lg-6">
                                <a href="assets_landing_page/img/g5.jpg" class="img-pop-home">
                                    <img class="img-fluid" src="assets_landing_page/img/g5.jpg" alt="">
                                </a>	
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>	
        </section>

        <section class="gallery-area section-gap" id="gallery">
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
                        {{-- <div class="row">
                            <div class="col-lg-6">
	
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>	
        </section>



        <!-- End gallery Area -->
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
                            <p>
                                <ul type="square">
                                    <li><i class="bi bi-projector-fill"><strong>LCD Projector</strong> Rp 50.000/jam</i></li>
                                    <li><strong>Sound System</strong> Rp 50.000/jam</li>
                                    <li><strong>Wifi</strong></li>
                                    <li><strong>Infused Water</strong></li>
                                </ul>
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Rules</h4>
                            </div>
                            <ul type="square">
                                <li><p><strong>Reservasi</strong> Minimal 10 orang (Dibawah 10 orang akan dikenakan biaya tambahan Rp 50.000/jam)</p></li>
                                <li><p><strong>Reservasi</strong> Private Meeting Room Rp 100.000/jam</p></li>
                                <li><p><strong>Reservasi</strong> Weekend Reservasi max jam 17:00</p></li>
                                <li><p><strong>Non-Reservasi</strong> Free, max 2 jam (*more: Rp 50.000/jam)</p></li>
                                <li><p><strong>Charge</strong> makanan/minuman dari luar : Rp 50.000/jenis (*minimal order food & drink Rp 500.000 <strong>free charge</strong>)</p></li>
                                <li><p><strong>Photo product</strong><br>
                                        ~ HP  : Konsumsi makanan/minuman minimal Rp 75.000 & Promote DNA Spot Cafe <br>
                                        ~ Pro : Konsumsi makanan/minuman minimal Rp 150.000 & Promote DNA Spot Cafe </p></li>
                                </ul>							
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Promo</h4>
                            </div>
                            <p><strong>Weekdays Afternoon</strong> (12.00-17.00) -> 10% Discount</p>
                        </div>
                    </div>											
                </div>
            </div>	
        </section>
        <!-- Start review Area -->
        
        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
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



