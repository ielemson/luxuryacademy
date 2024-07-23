@component('mail::message')
## Message From Contact Us Form.
# You have a message from {{$data['fname']}}  {{$data['lname']}} 

# Phone: {{$data['email']}}  <br>
# Phone: {{$data['phone']}}  <br>
{{$data['message_body']}}

@component('mail::button', ['url' => 'https://springluxuryacademy.com/'])
www.springluxuryacademy.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent