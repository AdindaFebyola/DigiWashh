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
            <!-- Layanan Paket -->
    
           
            <!-- Search Bar -->
                <div class="bg-[#1E3A8A] p-20 rounded-lg shadow-lg mb-4" style="margin-top: 4px; margin-bottom: 15px;">
                <h2 class="text-5xl text-white text-center font-bold mb-4" style="margin-top: -40px;">Layanan Paket Laundry</h2>

                <div class="flex justify-end" style="position: relative; top: 30px; padding: 10px;">
    <input type="text" placeholder="Search"
           style="width: 950px;" class="px-6 py-3 rounded-l-md outline-none">
    <button class="bg-[#4963A0] text-white px-6 py-3 rounded-r-md hover:bg-blue-600">
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
                <th class="py-3 px-4 text-left">ID Paket</th>
                <th class="py-3 px-4 text-left">Jenis Laundry</th>
                <th class="py-3 px-4 text-left">Harga</th>
                <th class="py-3 px-4 text-left">Proses Pengerjaan</th>
                <th class="py-3 px-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-white-700" style="background-color: #4963A0; color: white;">
            <tr class="border-t">
                <td class="py-3 px-4">1</td>
                <td class="py-3 px-4">Adin</td>
                <td class="py-3 px-4">Rp 50.000</td>
                <td class="py-3 px-4">3 Hari</td>
                <td class="py-3 px-4 flex justify-center gap-2">
                <button 
    class="bg-white border p-4 rounded hover:bg-gray-200" 
    onclick="window.location.href='http://127.0.0.1:8000/tambah_Pemesanan'">
    <img src="images/ubah.png" alt="Ubah" class="w-4 h-4"> <!-- Gambar untuk Ubah -->
</button>
                    <button class="bg-red-500 p-4 rounded hover:bg-red-600" onclick="openPopup()">
                        <img src="images/delete.png" alt="Hapus" class="w-4 h-4"> <!-- Gambar untuk Hapus -->
                    </button>
                </td>
            </tr>
            <tr class="border-t">
                <td class="py-3 px-4">2</td>
                <td class="py-3 px-4">Paket Cuci Kering</td>
                <td class="py-3 px-4">Rp 75.000</td>
                <td class="py-3 px-4">2 Hari</td>
                <td class="py-3 px-4 flex justify-center gap-2">
                <button 
    class="bg-white border p-4 rounded hover:bg-gray-200" 
    onclick="window.location.href='http://127.0.0.1:8000/tambah_Pemesanan'">
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
        Tambah Paket
    </button>
</div>



  
<!-- Pop-Up Hapus -->
<div class="fixed inset-x-0 top-[calc(5%)] flex items-center justify-center z-10 hidden" id="popup-hapus" style="transform: translateX(10%);">
    <div class="bg-white rounded-3xl p-9 shadow-md text-center" style="width: 700px;">
        <p class="text-left font-bold mb-4">Apakah anda yakin menghapus data ini?</p>
        <div class="flex justify-end gap-4 mt-4">
    <button class="bg-gray-200 px-4 py-2 rounded-xl hover:bg-gray-300" onclick="closePopup()">Cancel</button>
    <button class="bg-red-500 text-white px-4 py-2 rounded-xl hover:bg-red-600">Delete</button>
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