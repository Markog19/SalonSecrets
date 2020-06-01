<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>SALON SECRETS</title>


  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="css/grayscale.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}

  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>



</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SALON SECRETS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
      
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Cijene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">O nama</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Profil</a>
          </li>
           <li class="nav-item">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Odjava</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf</form></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"></h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Nema ružnih ljudi, samo niste isfrizirani.</h2>
 <!-- Trigger/Open The Modal -->
<a href="{{ URL::route('rezervacije.index') }}"><button  class="btn btn-primary js-scroll-trigger"  >Rezervacije</button></a>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   <table border="3px solid red">
    <tr><th id="date" colspan="16"> 
  </th></tr>
  <tr id="drugi">
  </tr>
  </table>
  <form enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Datum</label>
    <input  class="form-control"  id="datum"> 
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Vrijeme</label>
    <input  class="form-control"  id = "vrijeme">
  </div>
  <h4> Odaberite uslugu </h4>
<div>
  <select id="listUsluga">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Rezerviraj</button>
</form>
  
  <button value="naprijed" id="nap" >Naprijed</button>
  <button value="nazad" id="naz" onclick="nazad()">Nazad</button>
  </div>

</div>
    </div>
</div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">SHHH...</h2>
          <p class="text-white-50">SALON SECRETS nude kompletne frizerske usluge, farbanje, pramenovi, šišanje, feniranje, svečane frizure, keratinsko ispravljanje kose, nadogradnja kose, zatim kozmetičke usluge, profesionalno šminkanje za sve prilike svjetski poznatom Kryolan kozmetikom.</p>
        </div>
      </div>
      <img src="img/kry8.jpg" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/cjenovnik.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>CIJENE U NAŠEM SALONU</h4>
            <p class="text-black-50 mb-0"></p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/kryyy.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">BRUNETTE</h4>
                <p class="mb-0 text-white-50">Smeđa boja za kosu može izgledati vrlo zanimljivo, a u raznim varijacijama može pristajati gotovo svakoj ženi. Važno je pronaći koja nijansa smeđe odgovara Vašem tonu kože i zasigurno ćete zablistati!</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/kry6.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Svijetli pramenovi na blijedu kožu</h4>
                <p class="mb-0 text-white-50">Bojenje pramenova u kosi na različite načine prekrasno ističe Vašu kosu i daje joj živahnost. Odsjaji i razigrano svjetlo u kosi, te efekti sjene naglašavaju strukturu kose. Prije nego se odlučite za bojenje kose u jednu boju, razmislite o pramenovima.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">PRETPLATITE SE ZA NOVOSTI!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Unesite email adresu...">
            <button type="submit" class="btn btn-primary mx-auto">PRETPLATA</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">ADRESA</h4>
              <hr class="my-4">
              <div class="small text-black-50">Kneza Višeslava 18, Mostar</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">KONTAKT</h4>
              <hr class="my-4">
              <div class="small text-black-50">+387 63 333 333</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; SALON SECRETS 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
<script type="text/javascript">
    var brojac = 0;
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
   n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    var date =  y + "-" + m + "-" + d;
    datum = formatDate(date)
    document.getElementById("date").innerHTML = datum


if(brojac == 0){
      brojac++;
      fillTermine();
}
}
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">



    function fillTable(termini) {
        var i = 0;
    
      
        var row = document.getElementById("drugi");
        row.innerHTML = "";
        nizTermina = [{"vrijeme": "8.00" , "zauzet":  false},
                      {"vrijeme": "8.30" ,"zauzet":  false},
                      {"vrijeme": "9.00" ,"zauzet":  false},
                      {"vrijeme": "9.30" ,"zauzet":  false},
                      {"vrijeme": "10.00" ,"zauzet": false},
                      {"vrijeme": "10.30" ,"zauzet": false},
                      {"vrijeme": "11.00" ,"zauzet": false},
                      {"vrijeme": "11.30" ,"zauzet": false},
                      {"vrijeme": "12.00" ,"zauzet": false},
                      {"vrijeme": "12.30" , "zauzet": false},
                      {"vrijeme": "13.00" , "zauzet": false},
                      {"vrijeme": "13.30" , "zauzet": false},
                      {"vrijeme": "14.00" , "zauzet": false},
                      {"vrijeme": "14.30" , "zauzet": false},
                      {"vrijeme": "15.00" ,"zauzet": false},
                      
                      ]
        var niz = [];

        nizTermina.forEach(function(termin) {
         niz[i] = parseFloat(termin.vrijeme.split(':'));
           $( "#drugi" ).append('' + '<td class="termin" datum="' + datum + '"  vrijeme="' + termin.vrijeme + '" zauzet'+ i + "=" + termin.zauzet  + ' id = "' + i +  '">' +
             '   <span >' + termin.vrijeme + '</span>' + 
             '</td>')
          
          i++;
  });
        i = 0;
        termini.forEach(function(termini){
          for(i = 0;i<niz.length;i++){
            console.log(niz[8]);
          if(parseInt(termini.vrijeme)== niz[i] && termini.Datum == datum){
            console.log("AAAA");
            $("#" + i).css("background-color","blue");
            nizTermina[i].zauzet = true;

}
          }
          
          
        })

      var tab = document.getElementsByClassName("termin");
console.log(tab);
var buttonsCount = tab.length;
for (var i = 0; i <= buttonsCount; i++) {
    tab[i].onclick = function() {
        var id = this.id;
        console.log(id);
        var vrijeme = nizTermina[id].vrijeme;
        
      if(nizTermina[id].zauzet == true){
        alert("Zauzet termin, molimo vas odaberite drugi");
      }
      if(nizTermina[id].zauzet == false){
        alert("Odabrali ste " + datum + " u " + vrijeme + ". Odaberite uslugu i pritisnite dugme rezerviraj");
        document.getElementById('vrijeme').value=vrijeme; 
        document.getElementById('datum').value=datum; 
      }
     
    };
     
}

          
}
function fillTermine() {
      var termini = <?php
    $conn = mysqli_connect("localhost", "root", "", "rwa");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM korisnici_usluges"; //dodaj uslov za odabrani datum
    $result = $conn->query($sql);
    $termini = array();
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($termini, $row);
    }
      echo json_encode($termini);
    } else { echo "0 results"; }
    $conn->close();
    ?>;
    console.log(termini);
  fillTable(termini);
  
 
}


$( "#nap" ).click(function() {
      dat = document.getElementById("date").innerHTML;
        n =  new Date(dat);
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        d = d+1;
        if((d>28 && m ==2)||(d>30 &&(m == 4 || m == 6 || m == 9 || m == 11)) || (d>31 && (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12))){
          m++;
          d = 1
          
        }
        if(m>12 && d >31){
            y++;
            m = 1
            d = 1;
          }
          
         date =  y + "-" + m + "-" + d;
         datum = formatDate(date);
        
      document.getElementById("date").innerHTML =datum
          fillTermine(); 
            //prilagoditi ako se promijeni mjesec i godina
    });

  $( "#naz" ).click(function() {
      dat = document.getElementById("date").innerHTML;
        n =  new Date(dat);

        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        d = d-1;

        if(d<1){
          m--;
          console.log(m);
          if(m == 4 || m == 6 || m == 9 || m == 11){
            d = 30;
        }
          
          else if(m == 2 && isLeap(y)==true){
            d = 29;
          }
          else if(m == 2 && isLeap(y) == false){
            d = 28;
          }
          else{
            d = 31;
          }
          }
          if(m<1 && d<1){
            y--;
            m = 12;
            d = 31;
          }
          

        date =  y + "-" + m + "-" + d;
         datum = formatDate(date);
        
      document.getElementById("date").innerHTML =datum
    fillTermine(); 
            //prilagoditi ako se promijeni mjesec i godina


    });
function isLeap(year) {
  return new Date(year, 1, 29).getDate() === 29;
}


</script>

</body>

</html>