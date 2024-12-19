<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-white shadow-md">
        @include('navbar')
    </header>
    
    <div class="flex flex-1 bg-blue-50">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white shadow-md h-full">
            @include('sidebar')
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-9">
            <!-- Kotak Data Pemesanan -->
            <div class="bg-[#16317E] text-white rounded-xl shadow-lg mx-auto w-full max-w-6xl p-8 mt-16">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-4xl font-bold">Kelola Manajemen Transaksi</h1>
                </div>

                <!-- Diagram -->
                <div class="flex justify-center items-center">
                <img src="{{ asset('images/diagram.png')}}" alt="Diagram Transaksi" class="w-85"> <!-- Ganti path_to_diagram_image.png dengan lokasi file diagram Anda -->
                </div>

<!-- Legenda -->
<div class="flex flex-col items-center mt-8 gap-6"> <!-- Flex vertikal untuk menampilkan elemen atas-bawah -->
    <!-- Peminat Terbanyak -->
    <div class="flex items-center justify-center w-full gap-4">
        <img src="{{ asset('images/pink.png')}}" alt="Peminat Terbanyak" class="w-64 h-10 rounded-md"> <!-- Persegi panjang pink -->
        <span class="text-white text-lg">Peminat Terbanyak</span>
    </div>
    <!-- Peminat Sedikit -->
    <div class="flex items-center justify-center w-full gap-4">
        <img src="{{ asset('images/hijau.png')}}" alt="Peminat Sedikit" class="w-64 h-10 rounded-md -ml-9"> <!-- Persegi panjang hijau -->
        <span class="text-white text-lg">Peminat Sedikit</span>
    </div>
</div>

            </div>
        </main>
    </div>
</body>
</html>
