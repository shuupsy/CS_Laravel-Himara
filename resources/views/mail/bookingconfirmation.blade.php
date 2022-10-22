@component('mail::message')
# Introduction

<h2>Thank your for your order, {{ $data['name']}}</h2>
<h3>This is your mail confirmation for your stay at our hotel.</h3>
<br />
<h4>Please, visit your profile for more details.</h4>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
Your profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
