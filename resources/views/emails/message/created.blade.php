@component('mail::message')
# Hey Admin

Un message de :
- {{ $name }}

qui a pour email :
- {{ $email }}


@component('mail::table')
|                          |                 |
| -------------            |:---------------:|
| Raison du message :       | {{$raison}}        | 
| Importance de celui-ci :  | {{$importance}}     | 
| Url de l'image :           | {{$url}}            | 


@endcomponent

@component('mail::panel')

{{ $msg }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


