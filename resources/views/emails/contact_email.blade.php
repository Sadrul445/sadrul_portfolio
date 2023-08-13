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
