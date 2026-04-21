<!DOCTYPE html>
<html>
<head>
    <title>Multi Language Website</title>
</head>
<body>

    <h2>Select Language</h2>

    <a href="/lang/en">English</a> |
    <a href="/lang/hi">Hindi</a> |
    <a href="/lang/pa">Punjabi</a> |
    <a href="/lang/gu">Gujarati</a> |
    <a href="/lang/te">Telugu</a> |
    <a href="/lang/as">Assamese</a> |
    <a href="/lang/bn">Bengali</a> |
    <a href="/lang/ta">Tamil</a>

    <hr>

    <p>Current Locale: {{ app()->getLocale() }}</p>

    <h1>{{ __('messages.welcome') }}</h1>
    <p>{{ __('messages.about') }}</p>

</body>
</html>