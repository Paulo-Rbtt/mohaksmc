<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOHAWKS M.C.</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
    <link rel="icon" type="image/png" href="{{ asset('Machadinha.png') }}">
    
    <style>
        [id] {
            scroll-margin-top: 80px;
        }
    </style>
</head>
<body>
    @inertia
</body>
</html>
