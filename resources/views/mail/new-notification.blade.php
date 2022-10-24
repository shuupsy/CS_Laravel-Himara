@component('mail::message')
Nouvelle notification

Vous avez reçu un nouveau message dans le backoffice.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/admin'])
Voir
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
