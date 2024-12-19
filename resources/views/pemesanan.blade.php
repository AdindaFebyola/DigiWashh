<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tambahkan font-family ke seluruh halaman */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-blue-50 min-h-screen flex flex-col"> <!-- Pastikan body memiliki min-h-screen -->

    <!-- Navbar -->
    <header class="bg-white shadow-md">
        @include('navbar')
    </header>
    
    <div class="flex flex-1 bg-blue-50 gap-0">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-white shadow-md m-0 overflow-hidden h-full">
        @include('sidebar')
    </aside>

        <!-- Konten Utama -->
        <main class="flex-1 p-6 flex justify-center items-center">
            <!-- Kotak Data Pemesanan -->
            <div class="bg-blue-900 text-white rounded-lg shadow-lg mx-auto mt-10 max-w-5xl min-h-[100] pb-80">
                <!-- Header -->
                <div class="p-8">
                    <h1 class="text-5xl font-bold text-center">Data Pemesanan</h1>
                </div>

                <div class="px-4 pb-4 overflow-hidden">
    <table class="table-auto w-full text-left text-sm border-collapse">
        <thead>
        <thead class="bg-[#4963A0] text-white">
        <tr>
                    <th class="px-4 py-3">ID Transaksi</th>
                    <th class="px-4 py-3 ">Tanggal Masuk</th>
                    <th class="px-4 py-3 ">Nama Pelanggan</th>
                    <th class="px-4 py-3 ">Jenis</th>
                    <th class="px-4 py-3 ">Total Harga</th>
                    <th class="px-4 py-3 ">Status Laundry</th>
                    <th class="px-4 py-3 ">Status Pembayaran</th>
                </tr>
            </thead>

            <!-- Isi Tabel -->
            <tbody class="bg-white text-gray-800">
                <!-- Baris Kosong untuk Placeholder -->
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