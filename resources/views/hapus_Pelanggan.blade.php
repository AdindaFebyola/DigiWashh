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
        <div class="flex-1 p-6">
           
            <!-- Search Bar -->
            <div class="bg-[#1E3A8A] p-20 rounded-lg shadow-lg mb-4" style="margin-top: 15px; margin-bottom: 15px;">
            <h2 class="text-5xl text-white text-center font-bold mb-4" style="margin-top: -40px;">Data Pelanggan</h2>
                <div class="flex justify-end" style="position: relative; top: 20px;">
                    <input type="text" placeholder="Search"
                           style="width: 900px;" class="px-4 py-2 rounded-l-md outline-none">
                    <button class="bg-[#4963A0] text-white px-4 py-2 rounded-r-md hover:bg-blue-600">
                        Search
                    </button>
                </div>
            </div>

           <!-- Container dengan latar belakang putih untuk tabel dan tombol -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">

<!-- Table -->
<div class="mb-6">
    <table class="w-full">
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
        <tbody class="text-white-700" style="background-color: #4963A0; color: white;">
            <tr class="border-t">
                <td class="py-3 px-4">1</td>
                <td class="py-3 px-4">Adin</td>
                <td class="py-3 px-4">Malang</td>
                <td class="py-3 px-4">Perempuan</td>
                <td class="py-3 px-4">081234567890</td>
                <td class="py-3 px-4 flex justify-center gap-2">
                    <button class="bg-white border p-4 rounded hover:bg-gray-200">
                        <img src="images/cursor.png" alt="Klik" class="w-4 h-4"> <!-- Gambar untuk Klik -->
                    </button>
                    <button class="bg-white border p-4 rounded hover:bg-gray-200">
                        <img src="images/ubah.png" alt="Ubah" class="w-4 h-4"> <!-- Gambar untuk Ubah -->
                    </button>
                    <button class="bg-red-500 p-4 rounded hover:bg-red-600" onclick="openPopup()">
                        <img src="images/delete.png" alt="Hapus" class="w-4 h-4"> <!-- Gambar untuk Hapus -->
                    </button>
                </td>
            </tr>
            <tr class="border-t">
                <td class="py-3 px-4">2</td>
                <td class="py-3 px-4">Adin</td>
                <td class="py-3 px-4">Malang</td>
                <td class="py-3 px-4">Perempuan</td>
                <td class="py-3 px-4">081234567890</td>
                <td class="py-3 px-4 flex justify-center gap-2">
                    <button class="bg-white border p-4 rounded hover:bg-gray-200">
                        <img src="images/cursor.png" alt="Klik" class="w-4 h-4"> <!-- Gambar untuk Klik -->
                    </button>
                    <button class="bg-white border p-4 rounded hover:bg-gray-200">
                        <img src="images/ubah.png" alt="Ubah" class="w-4 h-4"> <!-- Gambar untuk Ubah -->
                    </button>
                    <button class="bg-red-500 p-4 rounded hover:bg-red-600" onclick="openPopup()">
                        <img src="images/delete.png" alt="Hapus" class="w-4 h-4"> <!-- Gambar untuk Hapus -->
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Button Tambah Pelanggan -->
<div class="flex justify-start">
    <button class="bg-[#1E3A8A] text-white py-2 px-4 rounded hover:bg-blue-900">
        Tambah Pelanggan
    </button>
</div>

</div>


  <!-- Pop-Up Hapus -->
<!-- Pop-Up Hapus -->
<div class="fixed inset-x-0 top-[calc(5%)] flex items-center justify-center z-10 hidden" id="popup-hapus" style="transform: translateX(10%);">
<div class="bg-white rounded-lg p-9 shadow-md text-center" style="width: 700px;">

        <p class="text-lg font-bold mb-4">Apakah anda yakin menghapus data ini?</p>
        <div class="flex justify-center gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300" onclick="closePopup()">Cancel</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
        </div>
    </div>
</div>

    <!-- Script untuk Pop-Up -->
<script>
    function openPopup() {
        document.getElementById('popup-hapus').classList.remove('hidden');
    }

    function closePopup() {
        document.getElementById('popup-hapus').classList.add('hidden');
    }
</script>
</body>
</html>
