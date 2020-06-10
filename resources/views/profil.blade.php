<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
	   <a href="{{ url('userpanel') }}"><li >Povratak</li></a>
<table id = "tablica" border="3px solid red">
	<tr><td> Datum</td> <td> Vrijeme </td><td> Usluga</td></tr>
	

</table>

<script type="text/javascript">
	var i = 0;
	 @foreach($termini as $termin)
	  	$("#tablica").append("<tr><td>" + @json($termin->Datum) + "</td>" + "<td>" + @json($termin->vrijeme) + "</td>" + "<td>" + @json($termin->usluga) + "</td><td><a id = delete" + i + "><button>Delete</button></a> 	</td><td><button>Update</button></td></tr>");
	  	$("#delete" + i).attr("href","{{ url('profil/' . $termin->id) }}");

         i++;
	  @endforeach


</script>
</body>



</html>