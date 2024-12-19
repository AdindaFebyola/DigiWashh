<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
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

        <!-- Content -->
        <div class="flex-1 p-8">
    <!-- Main Section with Extended Blue Background -->
    <div class="bg-[#1E3A8A] text-white py-6 rounded-lg shadow-md mx-auto" style="max-width: 98%;">
        <!-- Header Section -->

                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold">Tambah Pemesanan</h1>
                </div>

                <div class="bg-white px-4 py-4 rounded-lg shadow-lg mx-auto max-w-[85%]">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Pelanggan:</label>
                        <input type="text" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Batas Waktu:</label>
                        <input type="date" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

<!-- Table Section -->
<div class="overflow-x-auto mb-6">
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-[#4963A0] text-white">
            <tr>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Jenis</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Harga</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Qty</th>
            </tr>
        </thead>
        <tbody class="bg-[#4963A0] text-white"> <!-- Background warna biru -->
            <tr>
                <td class="py-3 px-4 flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 focus:ring-blue-400">
                    <span class="ml-2">Biasa</span>
                </td>
                <td class="py-3 px-4">5000</td>
                <td class="py-3 px-4">
                    <input type="number" class="w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </td>
            </tr>
            <tr>
                <td class="py-3 px-4 flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 focus:ring-blue-400">
                    <span class="ml-2">Express</span>
                </td>
                <td class="py-3 px-4">10000</td>
                <td class="py-3 px-4">
                    <input type="number" class="w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </td>
            </tr>
            <tr>
                <td class="py-3 px-4 flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 focus:ring-blue-400">
                    <span class="ml-2">Setrika</span>
                </td>
                <td class="py-3 px-4">4000</td>
                <td class="py-3 px-4">
                    <input type="number" class="w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </td>
            </tr>
        </tbody>
    </table>
</div>



<di class="text-center">
    <button class="bg-[#1E3A8A] text-white w-full py-2 rounded-md hover:bg-blue-900">Tambah Pemesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
