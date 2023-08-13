<!DOCTYPE html>
<html>

<head>
    <title>Contact With Me - Form Confirmation</title>
</head>

<body>
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);">
        <img src="{{ asset('assets/icons/sadrul-logo.ico') }}" class="logo" alt="Sadrul Logo" style="max-width: 100px; margin-bottom: 20px;">
        <h4 style="color: #333;">Hi {{ $name }},</h4>
        <p style="color: #666;">Your message has been successfully received. Thank you for getting in touch! We'll review your message and get back to you as soon as possible.</p>
        <p style="color: #666;">In the meantime, feel free to explore my portfolio and learn more about my work:</p>
        <a class="btn btn-outline-primary" href="https://www.sadruls-portfolio.com/">Visit My Portfolio</a>
        <p style="color: #666;">Best regards,<br>Sadrul Tanim</p>
    </div>
</body>

</html>


{{-- @component('mail::message')
<img src="{{ asset('assets/icons/sadrul-logo.ico') }}" class="logo" alt="Sadrul Logo"
        style="margin-bottom: 20px;">

<div class="fs-6" style="text-align: left">
        <h3 class="my-4">Contact With Me</h3>
        <b>Name:</b> {{ $name }}<br>
        <b>Email:</b> {{ $email }}<br>
        <b>Subject:</b> {{ $reason }}<br>
        <b>Message:</b> {{ $message }}<br>
</div>

@component('mail::button', ['url' => "https://www.sadrul's-portfolio.com/"])
Visit my website
@endcomponent

Thanks for Sending Message,<br>
{{ config('app.name') }}
@endcomponent --}}
