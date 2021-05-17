@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => '', 'color'=> 'primary'])
Recived
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
