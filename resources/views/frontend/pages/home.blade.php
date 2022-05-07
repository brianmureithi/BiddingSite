 @extends('frontend.layouts.layout')
 <!-- ======= Header ======= -->
 @section('content')
     <header id="header" class="fixed-top ">
         <div class="container d-flex align-items-center">

             <h1 class="logo me-auto"><a href="index.html">BIDIKA</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

             <nav id="navbar" class="navbar">
                 <ul>
                     <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                     <li><a class="nav-link scrollto" href="#products">Products</a></li>
                     <li><a class="nav-link scrollto" href="#winningbids">Winners</a></li>
                     <li><a class="nav-link   scrollto" href="#gallery">Gallery</a></li>
                     {{-- <li><a class="nav-link scrollto" href="#team">FAQs</a></li> --}}
                     <li class="dropdown "><a href="#faq" class="nav-link scrollto"><span>FAQs</span> <i
                                 class="bi bi-chevron-down"></i></a>
                         <ul>
                             <li><a href="#">Terms and Conditions</a></li>
                             {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
                             {{-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> --}}
                         </ul>
                     </li>
            
                     <li><a class="getstarted scrollto" href="#products">Start Bidding</a></li>
                 </ul>
                 <i class="bi bi-list mobile-nav-toggle"></i>
             </nav><!-- .navbar -->

         </div>
     </header><!-- End Header -->

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex align-items-center">

         <div class="container">
             <div class="row">
                 <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                     <h1>BID LOW, AND WIN BIG!</h1>
                     <h2 style="">Deposit a minimum of 20ksh via Mpesa to paybill <span
                             style="color:#242333"><b>00000</b></span>, and your unique low bid on an item.
                         If a fridge is on offer, and you bid is <span style="color:#242333">74ksh</span>, enter <span
                             style="color:#242333">74</span></h2>

                     <h3>Once the bid closes, and yours is the lowest and unique, your get the fridge at 74 kshs</h3>
                     <div class="d-flex justify-content-center justify-content-lg-start">
                         <a href="#products" class="btn-get-started scrollto" style="">Start Bidding</a>
                         <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                 class="bi bi-play-circle"></i><span>Watch Video</span></a>
                     </div>
                 </div>
                 <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                     <img src="{{ asset('assets/frontend/img/hero-img-winner.png') }}" class="img-fluid animated" alt="">
                 </div>
             </div>
         </div>

     </section><!-- End Hero -->

     <main id="main">

         <!-- ======= Clients Section ======= -->
         <section id="clients" class="clients section-bg">
             <div class="container">

                 <div class="row" data-aos="zoom-in">

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                     </div>

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                     </div>

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                     </div>

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                     </div>

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                     </div>

                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                         <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                     </div>

                 </div>

             </div>
         </section><!-- End Cliens Section -->

         <!-- ======= About Us Section ======= -->

         <section id="products" class="about">
             <div class="container" data-aos="fade-up">

                 <div class="section-title">
                     <h2>Current Auctions</h2>
                 </div>

                 <div class="row bid-items" data-aos="zoom-in" data-aos-delay="100">
                     @if ($errors->any())
                         <div class="alert alert-danger">
                             <p><strong>Opps Something went wrong</strong></p>
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                         </div>
                     @endif
                     {{-- Alert messages --}}
                     @if ($message = Session::get('success-bid'))
                         <div class="alert alert-success">
                             <p>{{ $message }}</p>
                         </div>
                     @elseif($message = Session::get('fail-bid'))
                         <div class="alert alert-danger">
                             <p>{{ $message }}</p>
                         </div>
                     @elseif($message = Session::get('fail-bid-terrible'))
                         <div class="alert alert-danger">
                             <p>{{ $message }}</p>
                         </div>
                     @endif
                     @forelse ($auctionProducts as $product)
                         <div class="col-lg-4 col-md-6 d-flex align-items-stretch bid-item">
                             <div class="course-item">
                                 <img src="{{ URL::asset('/storage/img/productImages/' . $product->image) }}"
                                     class="img-fluid"
                                     style="min-height:30vh;max-height:30vh; margin-top:15px; margin-bottom:5px;"
                                     alt="{{ $product->name }}">
                                 <div class="course-content">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                         <h4 class="rrp-item">RRP: KES {{ $product->rrp }}</h4>
                                         <p class="price"><b>kes <b id="min-bid-{{$product->id}}">{{ $product->min_bid }}</b></b></p>
                                     </div>

                                     <h3 class="auction-title"><a href="#">{{ $product->name }}</a></h3>
                                     <p>{!! $product->description !!}</p>
                                     <div class="mpesa-desc d-flex">
                                         <h2 class="mpesa-title">Bid using Mpesa</h2>
                                         <p>Send just {{ $product->min_bid }} to paybill <b>000000</b> with <b>
                                                 {{ $product->tag }}</b> and your amount as account name.</p>
                                         <p> For Example: <b id="tag-{{$product->id}}"> {{ $product->tag }}</b> 120 to bid KES 120
                                         <p>Grab your phone and get ready to pay kes <b>{{ $product->min_bid }}</b></p>
                                     </div>
                                     <div>
                                         <form class="bid-form" method="POST"
                                             action="{{ route('store-bid', $product->id) }}" enctype="multipart/form-data">
                                             @csrf
                                             <input name="phone_number" id="phone-{{$product->id}}" class="form-input form-control" type="number"
                                                 placeholder="enter phonenumber e.g 0712345678" />
                                             <input name="amount" class="form-input form-control" id="bid-{{$product->id}}" type="number"
                                                 placeholder="enter Bid amount e.g 32" />
                                             <button type="submit" class="btn-submit btn btn-lg btn-success" id="btn-bid-{{$product->id}}">Submit</button>
                                             <div class="loadingio-spinner-ellipsis-mtbm9h5z8wj" style="display:none" id="spin-{{$product->id}}"><div class="ldio-1giid4wnjga">
                                              <div></div><div></div><div></div><div></div><div></div>
                                              </div></div>
                                           <script type="text/javascript">
                                               document.getElementById("btn-bid-{{$product->id}}").addEventListener('click', (event) => {
                                               document.getElementById("spin-{{$product->id}}").style.display = "block";
                                                event.preventDefault();
                                              
                                              /* Get variables from document */
                                                const requestBody = {
                                        
                                          phone: document.getElementById('phone-{{$product->id}}').value,
                                          amount: document.getElementById('min-bid-{{$product->id}}').innerHTML,
                                          bid_amount: document.getElementById('bid-{{$product->id}}').value,
                                          tag: document.getElementById('tag-{{$product->id}}').innerHTML,
                                                              }
                                                              axios.post('/customerMpesaSTKPush', requestBody)
                                                          .then((response) => {
                                                              if (response.data) {
                                                                  console.log(response.data);
                                                                  document.getElementById("spin-{{$product->id}}").style.display = "none";
                                                               
                                                                  swal({  
                                                                              title: " Almost there!",  
                                                                              text: "Check your phone and get ready to pay {{$product->min_bid}}",  
                                                                              icon: "success",  
                                                                              button: "Okay",  
                                                                            });  
                                                                          
                                                                           
                                                                  /*   if(response.data.ResponseCode == 0){
                                                                       setTimeout(function(){
                                                                      document.getElementById('payment-form').submit(); 
                                                                      }, 2000)
                                                                     
                                                                    }
                                                                    else{
                                                                    /*   window.location.replace("/"); 
                                                                    }   */

                                                              } else {

                                                              }
                                                          }).catch((error) => {
                                                              console.log(error);
                                                          }).finally(() => {
                                                          
                                                      
                                                          });
                                                            

                                               });

                                               </script>
                                         </form>

                                     </div>

                                    <p style="font-family: 'Ubuntu', serif; color:#FF6347">This Auction ends in  <span class="clock{{ $product->id }}"></span><p>
                                     @php
                                             
                                     $date1 = new DateTime($product->end_date);
                                     $date3 = $date1->format('Y-m-d H:i:s.v');
                                     $date4 = 1000 * strtotime($date3);
                                     
                                     /* $now = new DateTime(); */
                                     
                                     /* $difference_in_seconds = $date1->format('U') - $now->format('U');
                                     $date1 = new DateTime("2010-12-08 16:12:12");
                                     $now = new DateTime();
                                     
                                     $difference_in_seconds = $date1->format('U') - $now->format('U'); */
                                     /*  $formatted_date = $product->end_date = date('Y/m/d H:i:s'); */
                                     
                                 @endphp
                                     <script>
                                          window.addEventListener('load', function() {
                                             let end_date{{ $product->id }} = {{$date4}},
                                                                                 
                                                 display = document.querySelector('.clock{{ $product->id }}');
                                             startTimer(end_date{{ $product->id }}, display);
                                            });
                                     </script>
                            

                                    
                                     
                                     <div class="countdown">
                                         @php
                                             
                                             $date1 = new DateTime($product->end_date);
                                             $date3 = $date1->format('Y-m-d H:i:s.v');
                                             $date4 = 1000 * strtotime($date3);
                                             
                                             /* $now = new DateTime(); */
                                             
                                             /* $difference_in_seconds = $date1->format('U') - $now->format('U');
                                             $date1 = new DateTime("2010-12-08 16:12:12");
                                             $now = new DateTime();
                                             
                                             $difference_in_seconds = $date1->format('U') - $now->format('U'); */
                                             /*  $formatted_date = $product->end_date = date('Y/m/d H:i:s'); */
                                             
                                         @endphp

                             <input type="text" value="{{$date4}}" class="form-control d-none "
                                             id="end_date_bid-{{$product->id}}" class="deadline" name="end_date" /> 

                                         <div class="count-down">
                                             <p id="countdown-{{$product->id}}"></p>
                                         </div>

                                         <script>
                                       
                                

                                              /*   end_date=document.getElementById("end_date_bid-{{$product->id}}").value;

                                              
                                  

                                            
                               
                                           
                                        
                                          // Update the count down every 1 second
                                             var x = setInterval(function() {
                                              

                                                 // Get today's date and time
                                                 var now = new Date().getTime();

                                                 // Find the distance between now and the count down date
                                                 var distance = end_date - now;
                                              
                                                

                                                 // Time calculations for days, hours, minutes and seconds
                                                 var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                 var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                 var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                 var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                             
                                                // Display the result in the element with id="demo"
                                                array.forEach(distance => {
                                                    document.getElementById().innerHTML = days + "d " + hours + "h "
                                                + minutes + "m " + seconds + "s ";
                                                    
                                                }); */
                                              

                                                 
                                             
/* 
                                                 // If the count down is finished, write some text
                                                 if (distance < 1800000) {
                                                     clearInterval(x);
                                                     return "Countdown may end any time soon";
                                                  
                                                 } else if (distance < 0) {
                                                     clearInterval(x);
                                                     
                                                     return "Countdown may have ended";
                                                  
                                                   
                                                 } 
                                           
                                             }, 1000);
                                             */
                                           
                                            

                                          
                                            
                                         </script>
                                     </div>
                                 </div>
                             </div>
                         </div> <!-- End Course Item-->
                     @empty
                         <div class="alert alert-danger">
                             There are no aution products available at the moment

                         </div>
                     @endforelse



                 </div>
             </div>
         </section><!-- End About Us Section -->





         <!-- ======= Services Section ======= -->
         <section id="winningbids" class="services section-bg">
             <div class="container" data-aos="fade-up">

                 <div class="section-title">
                     <h2>Completed Auctions</h2>
                     <p>Winners</p>
                 </div>

                 <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                         data-aos-delay="100">
                         <div class="icon-box winner-box">
                             <div class="box-item col-lg-6 col-xl-6">
                                 <img src="{{ URL::asset('/storage/img/motor.jpg') }}" class="img-fluid"
                                     style=" margin-top:10px; margin-bottom:5px;" alt="{{ $product->name }}">
                             </div>
                             <div class="box-item col-lg-6 col-xl-6">
                                 <h2 class="winning-bid-title">Honda Motorbike</h2>
                                 <p class="description">Jincheng Motorbike 150cc</p>
                                 <div class="winner-table">
                                     <div class="tb-item">
                                         <h6 class="tb-title">Bidder</h6>
                                         <p class="tb-content"> Brian </p>
                                     </div>
                                     <div class="tb-item">
                                         <h6 class="tb-title">RRP</h6>
                                         <p class="tb-content"> KES 100,000</p>
                                     </div>
                                     <div class="tb-item">
                                         <h6 class="tb-title">Winning Bid</h6>
                                         <p class="tb-content"> KES 20</p>
                                     </div>
                                     <div class="tb-item">
                                         <h6 class="tb-title">End Time Bid</h6>
                                         <p class="tb-content"> Feb. 23, 2022, 0:11</p>
                                     </div>


                                 </div>


                             </div>
                         </div>
                     </div>





                 </div>

             </div>
         </section><!-- End Services Section -->

         <!-- ======= Cta Section ======= -->
         <section id="cta" class="cta">
             <div class="container" data-aos="zoom-in">

                 <div class="row">
                     <div class="col-lg-9 text-center text-lg-start">
                         <h3>View our winner gallery</h3>
                         <p> You can be a winner as well</p>
                     </div>
                     <div class="col-lg-3 cta-btn-container text-center">
                         <a class="cta-btn align-middle" href="#products">Bid now</a>
                     </div>
                 </div>

             </div>
         </section><!-- End Cta Section -->
   

         <!-- ======= Portfolio Section ======= -->
         <section id="gallery" class="portfolio">
             <div class="container" data-aos="fade-up">

                 <div class="section-title">
                     <h2>Gallery</h2>

                 </div>

                 <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                     <li data-filter="*" class="filter-active">All</li>
                     
                 </ul>

                 <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    

                 </div>

             </div>
         </section><!-- End Portfolio Section -->




         <!-- ======= Frequently Asked Questions Section ======= -->
         <section id="faq" class="faq section-bg">
             <div class="container" data-aos="fade-up">

                 <div class="section-title">
                     <h2>Frequently Asked Questions</h2>
                     <p>Questions we are frequently asked</p>
                 </div>

                 <div class="faq-list">
                     <ul>
                         <li data-aos="fade-up" data-aos-delay="100">
                             <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                 class="collapse" data-bs-target="#faq-list-1">Question 1 <i
                                     class="bx bx-chevron-down icon-show"></i><i
                                     class="bx bx-chevron-up icon-close"></i></a>
                             <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                 <p>
                                     Answer 1
                                 </p>
                             </div>
                         </li>

                         <li data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                 data-bs-target="#faq-list-2" class="collapsed">Question 2 <i
                                     class="bx bx-chevron-down icon-show"></i><i
                                     class="bx bx-chevron-up icon-close"></i></a>
                             <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                 <p>
                                     Answer 2
                                 </p>
                             </div>
                         </li>



                     </ul>
                 </div>

             </div>
         </section><!-- End Frequently Asked Questions Section -->

         

     </main><!-- End #main -->

     <!-- ======= Footer ======= -->
     <footer id="footer">

         <div class="footer-newsletter">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-6">
                         <h4>Join Our Newsletter</h4>
                         <p>Get news, tips, and </p>
                         <form action="" method="post">
                             <input type="email" name="email"><input type="submit" value="Subscribe">
                         </form>
                     </div>
                 </div>
             </div>
         </div>

         <div class="footer-top">
             <div class="container">
                 <div class="row">

                     <div class="col-lg-3 col-md-6 footer-contact">
                         <h3>Bidika</h3>
                         <p>
                             XXXX Adam Street <br>
                             Nairobi, 535022<br>
                             Kenyas <br><br>
                             <strong>Phone:</strong> +254 701 234 578<br>
                             <strong>Email:</strong> bidika@example.com<br>
                         </p>
                     </div>

                     <div class="col-lg-3 col-md-6 footer-links">
                         <h4>Useful Links</h4>
                         <ul>
                             <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                             <li><i class="bx bx-chevron-right"></i> <a href="#products">Current autions </a></li>
                             <li><i class="bx bx-chevron-right"></i> <a href="#winningbids">Winners</a></li>
                             <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>

                         </ul>
                     </div>

                     <div class="col-lg-3 col-md-6 footer-links">
                         <h4>Regulations</h4>
                         <ul>
                             <li><i class="bx bx-chevron-right"></i> <a href="#faqs">FAQs</a></li>
                             <li><i class="bx bx-chevron-right"></i> <a href="#">Terms and Conditions</a></li>

                         </ul>
                     </div>

                     <div class="col-lg-3 col-md-6 footer-links">
                         <h4>Our Social Networks</h4>
                         <p>Follow us on twitter, instagram, and facebook</p>
                         <div class="social-links mt-3">
                             <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                             <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                             <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                             <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                             <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                         </div>
                     </div>

                 </div>
             </div>
         </div>

         <div class="container footer-bottom clearfix">
             <div class="copyright">
                 &copy; Copyright <strong><span>Bidika</span></strong>. All Rights Reserved
             </div>
             <div class="credits">
                 <!-- All the links in the footer should remain intact. -->
                 <!-- You can delete the links only if you purchased the pro version. -->
                 <!-- Licensing information: https://bootstrapmade.com/license/ -->
                 <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                 Designed by Bespoke Fusion
             </div>
         </div>
     </footer><!-- End Footer -->




     <div id="preloader"></div>
     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
             class="bi bi-arrow-up-short "></i></a>
 @endsection
 <script type="text/javascript">
 let  phone= 0708944949;

    function startTimer(duration, display) {
   /*  var start = Date.now(),
        diff,
        minutes,
        seconds; */
       
        var x = setInterval(function() {
                                              

// Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = duration - now;

    

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    display.textContent = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

   /*  array.forEach(distance => {
        document.getElementById("countdown-{{$product->id}}").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
        
    });
 */

    


    // If the count down is finished, write some text
 /*    if (distance < 1800000) {
        clearInterval(x);
        return "Countdown may end any time soon";
    
    } else if (distance < 0) {
        clearInterval(x);
        
        return "Countdown may have ended";
    
    
    }  */

}, 1000);

    /* function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
     let   time_difference = duration - now;

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000); */
}
</script>
{{-- var x = setInterval(function() {
                                              

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = end_date - now;
 
   

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

   // Display the result in the element with id="demo"
   array.forEach(distance => {
       document.getElementById("countdown-{{$product->id}}").innerHTML = days + "d " + hours + "h "
   + minutes + "m " + seconds + "s ";
       
   });
 

    


    // If the count down is finished, write some text
    if (distance < 1800000) {
        clearInterval(x);
        return "Countdown may end any time soon";
     
    } else if (distance < 0) {
        clearInterval(x);
        
        return "Countdown may have ended";
     
      
    } 

}, 1000); --}}