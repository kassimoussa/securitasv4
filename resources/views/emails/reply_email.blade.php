<x-mail::message>
{{-- # Introduction --}}

<div class="d-flex justify-content-center">
    <img src="{{ asset('images/logo_securitas.png') }}" alt="" srcset="" style="height: 100px; width: 100%">
</div>

Bonjour {{ $name }}, <br>
Merci pour nous avoir contacter. <br>
 Nous vous repondrons sous peu !

<x-mail::button :url="'http://securit-as.com'">
Visiter le site
</x-mail::button>

 
{{ config('app.name') }}
</x-mail::message>
