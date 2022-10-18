@component('mail::message')
# Introduction

<p>Welcome to the site, {{ $data['name'] }}</p>
<br />
Your registered email is {{ $data['email'] }}.

<h2>Enjoy your visit !</h2>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Link to the hotel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
