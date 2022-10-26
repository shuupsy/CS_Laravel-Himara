@component('mail::message')
# Introduction

<h2>Thank your for your order, {{ $data['first_name'] }}.</h2>

<h3>This is your mail confirmation (Order#{{ $data['booking'] }}) for your stay at our hotel.</h3>
<br />
<h4>Please, visit your profile for more details.</h4>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
Your profile
@endcomponent

<h4>What did you think of your experience ? Leave us a review, 
    <a href="http://127.0.0.1:8000/review/{{ $data['review']}}">here!</a>
</h4>

Thanks,<br>
{{ config('app.name') }}

@endcomponent
