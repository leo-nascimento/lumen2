@component('mail::message')
<h1>Você tem uma nova solicitação de orçamento</h1>
<p>Nome: {{ $body->input('name')}}</p>
<p>Sobrenome: {{ $body->input('surname')}}</p>
<p>E-mail: {{ $body->input('email')}}</p>
<p>Celular: {{ $body->input('cellphone')}}</p>

{{ config('app.name') }}
@endcomponent
