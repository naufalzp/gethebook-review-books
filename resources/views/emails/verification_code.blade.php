@component('mail::message')
# Email Verification Code

Thank you for registering. Please use the following verification code to verify your email address:

Verification Code: {{ $verificationCode }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
