<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-red-500">Home</h1>
    <div class="flex justify-center items-center mt-5">
        <img src="{{ asset('images/Logo.jpg') }}" alt="Logo" class="w-32 h-32 object-cover">
    </div>
    <!-- @vite('resources/js/app.js') -->
</body>
</html>