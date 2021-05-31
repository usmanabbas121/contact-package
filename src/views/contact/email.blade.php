@component('mail::message')

There is a new query from {{$name}}.
<br>
Message:
<br>
{{$message}}



Thanks,<br>
{{config('app.name')}}
@endcomponent