@component('mail::message')
# Hey Admin

Un message de :
- {{ $msg->name }}

qui a pour email :
- {{ $msg->email }}


@component('mail::table')
|                          |                 |
| -------------            |:---------------:|
| Raison du message :       | {{$msg->raison}}        | 
| Importance de celui-ci :  | {{$msg->importance}}     | 
| Url de l'image :           | {{$msg->url}}            | 


@endcomponent

@component('mail::panel')

{{ $msg->message }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


