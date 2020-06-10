<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
<table id = "tablica" border="3px solid red">
	<tr><td> Datum</td> <td> Vrijeme </td><td> Usluga</td></tr>
	

</table>

<script type="text/javascript">
	 @foreach($termini as $termin)
	  	$("#tablica").append("<tr><td>" + @json($termin->Datum) + "</td>" + "<td>" + @json($termin->vrijeme) + "</td>" + "<td>" + @json($termin->usluga) + "</td><td><button>Delete</button></td><td><button>Update</button></td></tr>");
	  @endforeach


</script>
</body>



</html>