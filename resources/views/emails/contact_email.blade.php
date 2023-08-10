@component('mail::message')
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
@endcomponent
