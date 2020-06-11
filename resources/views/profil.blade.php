<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
  *{
font-family:  'Varela Round';  }

</style>
     <link rel="stylesheet" href="css/profil.css">

</head>
<body>
		<div class="sve">
	   <a  href="{{ url('userpanel') }}"><button id="section-btn">POVRATAK NA POČETNU</button></a>
<table id = "tablica" border="3px solid red">
	<tr><td> Datum</td> <td> Vrijeme </td><td> Usluga</td></tr>

</table>

<form id = "form">
	


</form>
</div>
</body>

<script type="text/javascript">
	var i = 0,nizDatum = [],nizVrijeme = [],nizUsluge = [];
	 @foreach($termini as $termin)
	  	$("#tablica").append("<tr><td>" + @json($termin->Datum) + "</td>" + "<td>" + @json($termin->vrijeme) + "</td>" + "<td>" + @json($termin->usluga) + "</td><td><a id = delete" + i + "><button>Delete</button></a> 	</td><td><button clicked = true class = update onclick = forma(" + i + ")" + ">Update</button></td></tr>");
	  	$("#delete" + i).attr("href","{{ url('profil/' . $termin->id) }}");

	 
	  	nizDatum[i] = @json($termin->Datum);
	  	nizVrijeme[i] = @json($termin->vrijeme);
	  	nizUsluge[i] = @json($termin->usluga);


         i++;
	  @endforeach

	  	
	 function forma(i){
	 const button = document.getElementsByClassName('update');
	
	 $("form").append("<label for='datum'>Datum:</label><br>" + "<input id='datum' name='datum' ><br>" + "<label for='vrijeme'>Vrijeme:</label><br>"
	 
 +"<input  id='vrijeme' name='vrijeme'><br>" + "<label for='usluga'>Usluga:</label><br>"
 +"<input ' id='usluga' name='usluga'><br>" + "<button type='submit' form='forma' value='Submit'>Submit</button><br>");

			document.getElementById('datum').value=nizDatum[i];
			document.getElementById('vrijeme').value=nizVrijeme[i];
			document.getElementById('usluga').value=nizUsluge[i];
			for(var i = 0;i<button.length;i++){
				button[i].disabled = true
	}
			 @foreach($termini as $termin)

	  	$('#forma').attr('action',"{{ url('update/' . $termin->id) }}");
	  	@endforeach
	  	}



	  
	  

	
	  
	  
	  
  	

	  	 	
	  	 

</script>



</html>