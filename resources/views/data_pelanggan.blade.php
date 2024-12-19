<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F3F8FF] min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-10">
        @include('navbar')
    </header>

    <!-- Sidebar dan Konten -->
    <div class="flex pt-20">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white h-full">
            @include('sidebar')
        </aside>

        <!-- Konten Utama -->
        <div class="flex-1 bg-[#F3F8FF]">
            <!-- Header Section -->
            <div class="bg-[#1E3A8A] text-white rounded-lg shadow-lg p-6 mb-4 mx-12 -ml-7 mt-6">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-bold text-center mb-6">Data Pelanggan</h1>
                    <div class="flex w-full">
                        <input 
                            type="text" 
                            placeholder="Search"
                            class="flex-1 p-2 border border-gray-300 rounded-l-md focus:outline-none text-black"
                        >
                        <button class="bg-[#4963A0] text-white px-3 py-2 rounded-r-md hover:bg-blue-700">
                            Search
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-lg shadow-lg p-6 mx-12 -ml-7">
                <!-- Table -->
                <table class="w-full border-collapse">
                    <thead class="bg-[#4963A0] text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">ID Pelanggan</th>
                            <th class="py-3 px-4 text-left">Nama Pelanggan</th>
                            <th class="py-3 px-4 text-left">Alamat</th>
                            <th class="py-3 px-4 text-left">Gender</th>
                            <th class="py-3 px-4 text-left">No Telp</th>
                            <th class="py-3 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#4963A0] text-white">
                        <!-- Baris 1 -->
                        <tr class="border-t">
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">Adin</td>
                            <td class="py-3 px-4">Malang</td>
                            <td class="py-3 px-4">Perempuan</td>
                            <td class="py-3 px-4">081234567890</td>
                            <td class="py-3 px-4 flex justify-center gap-2">
                                <button class="bg-white border p-2 rounded hover:bg-gray-100">
                                    <img src="images/cursor.png" alt="Detail" class="w-4 h-4">
                                </button>
                                <button class="bg-white border p-2 rounded hover:bg-gray-100">
                                    <img src="images/ubah.png" alt="Edit" class="w-4 h-4">
                                </button>
                                <button class="bg-red-500 p-2 rounded hover:bg-red-600" onclick="showPopup()">
                                    <img src="images/delete.png" alt="Delete" class="w-4 h-4">
                                </button>
                            </td>
                        </tr>
                        <!-- Baris 2 -->
                        <tr class="border-t">
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">Adin</td>
                            <td class="py-3 px-4">Malang</td>
                            <td class="py-3 px-4">Perempuan</td>
                            <td class="py-3 px-4">081234567890</td>
                            <td class="py-3 px-4 flex justify-center gap-2">
                                <button class="bg-white border p-2 rounded hover:bg-gray-100">
                                    <img src="images/cursor.png" alt="Detail" class="w-4 h-4">
                                </button>
                                <button class="bg-white border p-2 rounded hover:bg-gray-100">
                                    <img src="images/ubah.png" alt="Edit" class="w-4 h-4">
                                </button>
                                <button class="bg-red-500 p-2 rounded hover:bg-red-600" onclick="showPopup()">
                                    <img src="images/delete.png" alt="Delete" class="w-4 h-4">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Button Tambah Pelanggan -->
                <div class="flex justify-start mt-4">
                    <button class="bg-[#1E3A8A] text-white py-2 px-4 rounded hover:bg-blue-900">
                        Tambah Pelanggan
                    </button>
                </div>
            </div>
        </div>
    </div>
    
<!-- Pop-Up Aksi -->
<div id="popup-aksi" class="hidden fixed inset-0 bg-black bg-opacity-0 flex items-start justify-center z-50">
    <div class="bg-white p-6 w-[300px] mt-10 border border-gray-300 rounded-2xl">
        <p class="text-lg font-semibold mb-4 text-center">Pilih Aksi</p>
        <div class="flex justify-center gap-8">
            <!-- Tombol Detail -->
            <button 
                class="flex flex-col items-center bg-gray-200 p-4 rounded-lg hover:bg-gray-300"
                onclick="redirectToDetail()"
            >
                <img src="images/cursor.png" alt="Detail" class="w-6 h-6">
                <span class="mt-2 text-sm text-gray-700">Detail</span>
            </button>
            <!-- Tombol Edit -->
            <button 
                class="flex flex-col items-center bg-gray-200 p-4 rounded-lg hover:bg-gray-300"
                onclick="redirectToEdit()"
            >
                <img src="images/ubah.png" alt="Edit" class="w-6 h-6">
                <span class="mt-2 text-sm text-gray-700">Edit</span>
            </button>
        </div>
        <div class="flex justify-end mt-4">
            <button 
                class="bg-gray-200 text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-300"
                onclick="closePopupAksi()"
            >
                Close
            </button>
        </div>
    </div>
</div>

<!-- Script untuk Redirect -->
<script>
    // Menampilkan pop-up aksi
    function showPopupAksi() {
        document.getElementById('popup-aksi').classList.remove('hidden');
    }

    // Menutup pop-up aksi
    function closePopupAksi() {
        document.getElementById('popup-aksi').classList.add('hidden');
    }

    // Redirect ke halaman tambah_pemesanan
    function redirectToDetail() {
        window.location.href = 'tambah_Pemesanan'; // Ganti dengan URL halaman tambah_pemesanan
    }

    // Redirect ke halaman editPelanggan
    function redirectToEdit() {
        window.location.href = 'editPelanggan'; // Ganti dengan URL halaman editPelanggan
    }
</script>
