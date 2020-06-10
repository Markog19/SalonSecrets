<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
	   <a href="{{ url('userpanel') }}"><li >Povratak</li></a>
<table id = "tablica" border="3px solid red">
	<tr><td> Datum</td> <td> Vrijeme </td><td> Usluga</td></tr>
	

</table>

<form id = "forma">
	


</form>
</body>

<script type="text/javascript">
	var i = 0;
	 @foreach($termini as $termin)
	  	$("#tablica").append("<tr><td>" + @json($termin->Datum) + "</td>" + "<td>" + @json($termin->vrijeme) + "</td>" + "<td>" + @json($termin->usluga) + "</td><td><a id = delete" + i + "><button>Delete</button></a> 	</td><td><button class = update>Update</button></td></tr>");
	  	$("#delete" + i).attr("href","{{ url('profil/' . $termin->id) }}");



         i++;
	  @endforeach
	  	 @foreach($termini as $termin)

	  $(".update").on('click', function(){
	  		$("form").append("<label for='datum'>Datum:</label><br>" + "<input id='datum' ><br>" + "<label for='vrijeme'>Vrijeme:</label><br>"
 +"<input  id='vrijeme' name='vrijeme'><br>" + "<label for='usluga'>Usluga:</label><br>"
 +"<input ' id='usluga' name='usluga'><br>" + "<button type='submit' form='forma' value='Submit'>Submit</button>");


	  });
	  	 	document.getElementById('datum').value=@json($termin->Datum);
			document.getElementById('vrijeme').value=@json($termin->vrijeme);
			document.getElementById('usluga').value=@json($termin->usluga); 
@endforeach
	  	 

</script>



</html>