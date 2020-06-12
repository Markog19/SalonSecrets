<!DOCTYPE html>
<html lang="en">
<head>

     <title>SALON SECRETS</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">SALON <span>.</span> SECRETS</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Naslovna</a></li>
                         <li><a href="#about" class="smoothScroll">O nama</a></li>
                         <li><a href="#team" class="smoothScroll">Osoblje</a></li>
                         <li><a href="#menu" class="smoothScroll">Ponuda</a></li>
                         <li><a href="#contact" class="smoothScroll">Kontakt</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                        <li> <a  class="section-btn" href="{{ url('profil') }}">Profil</a>
                                           </li>
                        <li><a class="section-btn" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Odjava</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf</form></li></a>

                                           </li>

                    
                    
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>SALON SECRETS</h3>
                                             <h1>Nema ružnih ljudi, samo niste isfrizirani.</h1>
                                             <a href="{{ route('rezervacije.index') }}" class="section-btn btn btn-default smoothScroll">Rezervacije</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Shhh...</h3>
                                             <h1>Nudimo najbolje frizerske usluge u regiji.
                                                         </h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Ponuda</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>KRYOLAN KOZMETIKA</h3>
                                             <h1>Nudimo i šminkanje, kao i komisionu prodaju Kryolan proizvoda.</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Upoznajte naš tim</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>NAŠA PRIČA</h4>
                                   <h2>SALON LIJEPIH FRIZURA OD 2019.</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>SALON SECRETS nude kompletne frizerske usluge, farbanje, pramenovi, 
                                           šišanje, feniranje, svečane frizure, keratinsko ispravljanje kose, nadogradnja kose, zatim
                                           kozmetičke usluge, profesionalno šminkanje za sve prilike svjetski poznatom Kryolan kozmetikom.</p>
                                   <p>Hvala Vam na povjerenju.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/kry5.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>UPOZNAJTE NAŠE OSOBLJE</h2>
                              <h4>Ljubazni su i pristupačni</h4>
                         </div>
                    </div>

                    
                         
                          <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/vlasnica.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Najčešće su uspješni oni koji ne znaju da su pogreške neizbježne</h4> 
                                            
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Ana Anić</h3>
                              <p>Vlasnica &amp; Menandžer</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/slikica2.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Marina će osigurati da o kosi počnete razmišljati kao adutu, a ne obavezi.</h4>
                                             
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Marina Marinčić</h3>
                              <p>Frizer</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/slikica.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Dugogodišnje iskustvo omogućit će savršen odabir proizdvoda za Vas, kao i profesionalno šminkanje.</h4>
                                            
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Iva Ivić</h3>
                              <p>Kryolan šminker</p>
                         </div>
                    </div>
                         
                         
                         

                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Ponuda</h2>
                              <h4>Ponuda &amp; Cjenik</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/pranjee.jpg" class="image-popup" title="Šišanje kose">
                                   <img src="images/pranjee.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Pranje kose</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>5 KM</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/sisanje.jpg" class="image-popup" title="Self-made Salad">
                                   <img src="images/sisanje.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Šišanje kose</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>15 KM</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/fen.jpg" class="image-popup" title="Chinese Noodle">
                                   <img src="images/fen.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Feniranje</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>10 KM</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/farbanje.jpg" class="image-popup" title="Rice Soup">
                                   <img src="images/farbanje.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Farbanje</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>40 KM</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/novobal.jpg" class="image-popup" title="Project title">
                                   <img src="images/novobal.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>BALAYAGE</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>70 KM</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/perm.jpg" class="image-popup" title="Project title">
                                   <img src="images/perm.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Minival</h3>
                                             <p>Za sve dužine</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>50 KMS</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>NOVO U PONUDI</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Botox za kosu je jedan od najnovijih tretmana za suhu i oštećenu kosu, koji prodire u oštećene dijelove površinskog sloja kose te ju obnavlja, zaglađuje i pruža joj stalnu zaštitu. .</p>
                                        <div class="tst-author">
                                             <h4>BOTOX ZA KOSU</h4>
                                             <span>Kosu čini sjajnom i mekom</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Botox za kosu djeluje tako da popunjava strukturu kose te ju intenzivno obnavlja u unutrašnjosti vlasi. Navodno ovaj najnoviji tretman daje kosi sjaj i mekoću te ju regenerira i čini snažnijom i otpornijom.</p>
                                        <div class="tst-author">
                                             <h4>BOTOX ZA KOSU</h4>
                                             <span>Pojačava strukturu kose</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Botox traje od 10 do 20 pranja – u većini slučajeva trajanje učinka botoxa je bilo otprilike na donjoj granici ili čak i kraće od deset pranja kose. Ipak, tretman se smije ponoviti tek nakon desetog pranja kako ne bi došlo do zasićenja kose.</p>
                                        <div class="tst-author">
                                             <h4>BOTOX ZA KOSU</h4>
                                             <span>Dugotrajan</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
     -->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11606.073061845167!2d17.7967484!3d43.3452687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec9b6e4c7d5a9bfc!2sSveu%C4%8Dili%C5%A1te%20u%20Mostaru!5e0!3m2!1shr!2sba!4v1581988434772!5m2!1shr!2sba" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>KONTAKTIRAJTE NAS</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                        <form action="{{url('/contact')}}" method="POST"  class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                              {{ csrf_field() }}
                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Vaša poruka je uspješno poslana.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Ime i prezime">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" value="{{Auth::user()->email}}" name="email" placeholder="Email adresa">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Tema">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Još neki podatak"></textarea>
                                   @csrf
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">POŠALJI</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Adresa</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Matice hrvatske, Mostar 88000</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">REZERVACIJE</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>+387 63 333 333</p>
                                   <p>ISKORISTITE POGODNOSTI NAŠEG ONLINE SUSTAVA ZA REZERVACIJU.</p>
                                  
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">RADNO VRIJEME</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Ponedjeljak: zatvoreno</p>
                                   <div>
                                        <strong>Utorak - Petak</strong>
                                        <p>7:00  - 20:00 </p>
                                   </div>
                                   <div>
                                        <strong>Subota - Nedjelja</strong>
                                        <p>11:00  - 22:00 </p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br>Copyright &copy; 2020 <br>FSRE
                              
                              <br><br>Katarina, Gabriela, Krešimir i Marko</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>