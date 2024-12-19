<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket</title>
    <!-- Link to Google Fonts for Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F3F8FF]">

    <!-- Navbar -->
    @include('partials.navbar') <!-- Panggil Navbar -->

    <!-- Sidebar dan Content -->
    <div class="flex pt-20 h-screen">
        <!-- Sidebar -->
        @include('partials.sidebar')

        
<!-- Profile Content -->
<div class="flex-1 p-10 pt-6"> <!-- Tambahkan pt-6 atau kurangi padding-top -->
    <div class="bg-white rounded-lg shadow-md w-full max-w-4xl p-14 mx-auto">
        <!-- Foto Profil -->
        <div class="flex justify-center mb-6">
            <div class="w-32 h-32 rounded-full bg-gray-300"></div>
        </div>

        <!-- Informasi User -->
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Eriza Dinda</h2>
            <p class="text-gray-600 mb-4">Id User : 2</p>
            <!-- Icon Media Sosial -->
            <div class="flex justify-center gap-4 text-xl text-gray-600">
                <a href="#"><i class="fa fa-twitter text-blue-400"></i></a>
                <a href="#"><i class="fa fa-facebook text-blue-600"></i></a>
                <a href="#"><i class="fa fa-instagram text-pink-400"></i></a>
                <a href="#"><i class="fa fa-linkedin text-blue-700"></i></a>
            </div>
        </div>
    </div>
</div>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
        </main>
    </div>
</body>
</html>
