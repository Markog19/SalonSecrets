
<html>
<head><script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/administrator.css">
</head>
<body>
   

        <div class="sve">
                        <h1 id = "admin">Admin Panel</h1>

<table id = "tablica" border="3px solid red">
	<tr><td> Ime</td> <td > Email </td ><td colspan="2">Funkcije</td></tr>

	

</table>

<form id = "forma">
    


</form>


</table>

                
                    <button id="section-btn">
                        <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Odjava</a>
                </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf</form>
</div>
</body>
<script type="text/javascript">
	var i = 0,nizIme = [],nizEmail = [];
	@foreach($korisnici as $korisnik)
	  	
        $("#tablica").append("<tr><td>" + @json($korisnik->name) + "</td>" + "<td>" + @json($korisnik->email) + "</td>" + "<td><a id = delete" + i +"><button>Delete</button></a></td><td><button onclick = forma("  + @json($korisnik->id)  + "," + i + ") class = update>Update</button></td></tr>");
        $("#delete" + i).attr("href","{{ url('Administrator/' . $korisnik->id) }}");
                nizIme[i] = @json($korisnik->name);
                nizEmail[i] = @json($korisnik->email);
                

         i++;

	  @endforeach
      function forma(id,i){
        @foreach($korisnici as $korisnik)
        if(id == @json($korisnik->id)){
            $("#forma").attr("action","{{ url('azuriraj/' . $korisnik->id) }}");
        }     @endforeach
     const button = document.getElementsByClassName('update');
    
     $("form").append("<label for='ime'>Ime:</label><br>" + "<input id='ime' name='ime' ><br>" + "<label for='email'>Email:</label><br>"
     
 +"<input  id='email' name='email'><br>"  + "<button type='submit'  value='Submit'>Submit</button><br>");

            document.getElementById('ime').value=nizIme[i];
            document.getElementById('email').value=nizEmail[i];
            for(var i = 0;i<button.length;i++){
                button[i].disabled = true
    }   
     
      
 }
        
     



</script>
     </html>

