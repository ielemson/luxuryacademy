@component('mail::message')
# Dear {{$details['lname']}}, {{$details['fname']}}

Your payment was received successfully for {{$details['training_title']}}
# Use the link below to access the telegram group<br>
<a href="{{$details['telegram_group']}}">Click here to access our telegram community</a>

@component('mail::button', ['url' => 'https://springluxuryacademy.com/'])
www.springluxuryacademy.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
