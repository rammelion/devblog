<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href=assets('images/favicons/apple-touch-icon.png')>
    <link rel="icon" type="image/png" sizes="32x32" href=assets('images/favicon-32x32.png')>
    <link rel="icon" href='images/favicons/favicon.ico'>
    <!-- <link rel="manifest" href=assets('images/favicons/site.webmanifest')> -->
    @vite('resources/css/app.css')
    <x-layout.styles :theme="$theme" />
    <title>Rammelion DevBlog</title>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"
    ></script>
</head>
