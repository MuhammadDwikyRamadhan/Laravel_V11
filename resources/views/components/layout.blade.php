<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//unpkg.com/alpinejs" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <x-header>{{ $title }}</x-header>
    
        <main>
            {{ $slot }}
        </main>
    </div>
  </body>
</html>
