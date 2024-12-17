<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ADP Laundry')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Container Utama -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex flex-col p-6">
            <!-- Logo -->
            <h1 class="text-2xl font-bold text-blue-800 mb-8">ADP LAUNDRY</h1>

            <!-- Menu Navigasi -->
            <nav class="flex-1 space-y-4 text-gray-600">
                <a href="#" class="block px-4 py-2 font-semibold text-blue-600 bg-blue-100 rounded">
                    ⏺ Dashboard
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded">
                    👤 Profil Pelanggan
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded">
                    📦 Paket
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded">
                    🛒 Pemesanan
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded">
                    🔓 Logout
                </a>
            </nav>

            <!-- Footer Sidebar -->
            <div class="mt-6 text-gray-400 text-sm">
                &copy; 2024 ADP Laundry
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <div class="text-lg font-semibold text-gray-700">@yield('header', 'Dashboard')</div>
                <div class="flex items-center space-x-4">
                    <div class="text-gray-600">👤 Eriza Dinda</div>
                    <button class="text-gray-500 hover:text-gray-700">
                        🔽
                    </button>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-6 bg-gray-100 overflow-y-auto">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>
