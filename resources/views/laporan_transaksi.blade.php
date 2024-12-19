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
        <main class="flex-2 p-9">
            <!-- Kotak Data Pemesanan -->
            <div class="bg-[#16317E] text-white rounded-xl shadow-lg mx-auto w-full max-w-6xl p-8 mt-16 min-h-[100] pb-80">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-4xl font-bold">Kelola Laporan Transaksi</h1>
                </div>
                
                <!-- Filter Section -->
                <div class="flex flex-wrap gap-8 mb-6">
                    <!-- Filter Bulan -->
                    <div class="flex flex-col">
                        <label for="filter-bulan" class="mb-2 text-sm font-medium">Filter Bulan</label>
                        <select id="filter-bulan" class="p-2 bg-white text-blue-900 rounded-md shadow-sm">
                            <option>Pilih Bulan</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                        </select>
                    </div>
                    <!-- Filter Tanggal -->
                    <div class="flex flex-col">
                        <label for="filter-tanggal" class="mb-2 text-sm font-medium">Filter Tanggal</label>
                        <input 
                            id="filter-tanggal" 
                            type="date" 
                            class="p-2 bg-white text-blue-900 rounded-md shadow-sm"
                            placeholder="dd/mm/yyyy">
                    </div>
                </div>

                <!-- Tabel Data -->
                <div class="overflow-auto rounded-lg bg-white w-full">
                    <table class="table-auto w-full text-left text-sm border-collapse">
                        <thead class="bg-[#4963A0] text-white">
                            <tr>
                                <th class="px-4 py-3">ID Transaksi</th>
                                <th class="px-4 py-3">Tanggal Masuk</th>
                                <th class="px-4 py-3">Nama Pelanggan</th>
                                <th class="px-4 py-3">Jenis</th>
                                <th class="px-4 py-3">Total Harga</th>
                                <th class="px-4 py-3">Status Pembayaran</th>
                                <th class="px-4 py-3">Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            <!-- Contoh Data Kosong -->
                            <tr class="border border-gray-300">
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                </tr>
                            <tr class="border border-gray-300">
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                    <td class="px-4 py-3 border border-gray-300"></td>
                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
