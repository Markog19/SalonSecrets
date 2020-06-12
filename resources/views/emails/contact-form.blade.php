@component('mail::message')
#Thank you for you message
<strong>Ime: </strong> {{ $data['name']}}<br>
<strong>Email: </strong> {{ $data['email']}}<br>
<strong>Poruka </strong> <br>
{{ $data['message']}}

@endcomponent
