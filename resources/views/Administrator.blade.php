
<html>
<head><script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<table id = "tablica" border="3px solid red">
	<tr><td> Ime</td> <td> Email </td></tr>

	

</table>


</table>
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

</body>
<script type="text/javascript">
	var i = 0;
	@foreach($korisnici as $korisnik)

	  	$("#tablica").append("<tr><td>" + @json($korisnik->name) + "</td>" + "<td>" + @json($korisnik->email) + "</td>" + "<td><a id = delete" + i +"><button>Delete</button></a></td><td><button>Update</button></td></tr>");
        $("#delete" + i).attr("href","{{ url('Administrator/' . $korisnik->id) }}");

         i++;

	  @endforeach
     


</script>
     </html>

