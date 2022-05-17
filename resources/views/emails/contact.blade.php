@component('mail::message')
<h1>{{ $body->input('name')}} solicitou um novo contato sobre: {{ $body->input('subject')}}</h1>
<p>E-mail: {{ $body->input('email')}}</p>
<p>Descrição: {{ $body->input('description')}}</p>

{{ config('app.name') }}
@endcomponent
