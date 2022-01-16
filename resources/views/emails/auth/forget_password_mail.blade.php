@component('mail::message')
Hello {{ $user_name }}

@component('mail::button', ['url' => route('doctor.getResetPassword', $reset_code)])
Cliquez ici pour renitialiser votre mote de passe
@endcomponent
<p>Ou copiez ce lien dans votre navigateur</p>
<p> <a href="{{ route('doctor.getResetPassword', $reset_code) }}"> {{ route('doctor.getResetPassword', $reset_code) }} </a> </p>

Merci,<br>
{{ config('app.name') }}
@endcomponent
