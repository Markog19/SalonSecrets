  <html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>SALON SECRETS</title>

<style>
  *{
font-family:  'Varela Round';  }
#date{
  text-align: center;
}
</style>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/templatemo-style.css">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="css/grayscale.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
<body>


  <div id = "forme">

  <ul>
<button  class = "section-btn"><a id="poc" href="{{ url('userpanel') }}">Povratak na početnu</a></button>
  </ul>
   <table  id = "table">
    <tr><th id="date" colspan="15">
  </th></tr>
  <tr id="drugi">
  </tr>
  </table>
  <div id = "sve">
  <form method="POST" action="{{ URL::route('rezervacije.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     
  <div class="form-group">
    <label>Datum</label>
    <input  class="form-control"  id="Datum"  name="datum"> 
    
 
    <label>Vrijeme</label>
    <input  class="form-control"  id = "vrijeme" name="vrijeme">
  
  <h4 id="odaberite"> Odaberite uslugu </h4>

  <select id="listUsluga" name="listUsluga">
  <option value="Pranje Kose">Pranje Kose</option>
  <option value="Feniranje Kose">Feniranje Kose</option>
  <option value="Šišanje Kose">Šišanje Kose</option>
  <option value="Bojanje Izrasta">Bojanje Izrasta</option>
  <option value="Bojanje Potpuno">Bojanje Potpuno</option>  
  <option value="Skidanje Boje">Skidanje Boje</option>
  <option value="Pramenovi(Kapa)">Pramenovi(Kapa)</option>
  <option value="Pramenovi(Folija)">Pramenovi(Folija)</option>
  <option value="Ombre">Ombre</option>
  <option value="Balayage">Balayage</option>
  <option value="Minival">Minival</option>
  <option value="Preljev Kose">Preljev Kose</option>
  <option value="Peglanje">Peglanje</option>
  <option value="Ampula">Ampula</option>
  <option value="Botoks Kose">Botoks Kose</option>
  <option value="Šminkanje">Šminkanje</option>
  <option value="Šmikanje i Trepavice">Šmikanje i Trepavice</option>

</select>
  </div>
  <button type="submit"  class="section-btn btn">Rezerviraj</button>
</form>
  
  <button value="naprijed" id="nap" class=" btn-rezervacije" >Naprijed</button>
  <button value="nazad" id="naz" class="btn-rezervacije" >Nazad</button>
</div>
</div>
</div>
    </body>

<script type="text/javascript">
 

    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    var date =  y + "-" + m + "-" + d;
    datum = formatDate(date)
    document.getElementById("date").innerHTML = datum;
        fillTable(datum);

    
  function formatDate(date){
    //funckija za formatiranje datuma
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

  
    function fillTable(datum) {
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
          
          var duljina = nizTermina.length;
          var niz = [duljina];
            for(i = 0;i<duljina;i++){
              
           niz[i] = parseFloat(nizTermina[i].vrijeme.split(':'));
          $( "#drugi" ).append('' + '<td class="termin" datum="' + datum + '"  vrijeme="' + nizTermina[i].vrijeme + '" zauzet'+ i + "=" + nizTermina[i].zauzet  + ' id = "' + i +  '">' +
             '   <span >' + nizTermina[i].vrijeme + '</span>' + 
             '</td>')
          }
        i = 0;
        
        @foreach ($termin as $termin)
        for(i = 0;i<duljina;i++){
        if(@json($termin->vrijeme) == niz[i] && @json($termin->Datum) == datum){
          $("#" + i).css("background-color","#ce3232");
            nizTermina[i].zauzet = true;
        }
      }
        @endforeach
            
        }
    
$( "#nap" ).click(function() {
    console.log("AAA");
      date = document.getElementById("date").innerHTML;
        n =  new Date(date);
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
      fillTable(datum);
    });

  $( "#naz" ).click(function() {
      date = document.getElementById("date").innerHTML;
        n =  new Date(date);

        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        d = d-1;

        if(d<1){
          m--;
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
              fillTable(datum);

      document.getElementById("date").innerHTML =datum

            //prilagoditi ako se promijeni mjesec i godina


    });
function isLeap(year) {
  return new Date(year, 1, 29).getDate() === 29;
}

var tab = $("#table");
var buttonsCount = tab.length;
for (var i = 0; i < buttonsCount; i++) {
    tab.on("click","td",function() {
      var id = this.id;
        var vrijeme = nizTermina[id].vrijeme;
        
      if(nizTermina[id].zauzet == true){
        alert("Zauzet termin, molimo vas odaberite drugi");
      }
      if(nizTermina[id].zauzet == false){
        alert("Odabrali ste " + datum + " u " + vrijeme + ". Odaberite uslugu i pritisnite dugme rezerviraj");
        document.getElementById('vrijeme').value=vrijeme; 
        document.getElementById('Datum').value=datum; 

      }
      });  
        
     
    }

     



          



 

//naprijed i nazad button za datum

</script>
  
</html>