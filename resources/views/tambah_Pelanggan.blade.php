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
        <main class="flex-1 p-10">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center" style="font-family: 'Poppins', sans-serif;">Tambah Pelanggan</h1>
            
            <!-- Form -->
            <form action="#" method="POST">
                <!-- Nama Pelanggan -->
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-medium mb-2 text-left relative left-14">Nama Pelanggan:</label>
                    <div class="flex justify-center">
                        <input type="text" id="nama" name="nama" value="Adinn" 
                               class="w-[90%] border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-medium mb-2 text-left relative left-14">Alamat:</label>
                    <div class="flex justify-center">
                        <textarea id="alamat" name="alamat" rows="4" 
                                  class="w-[90%] border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">Malang</textarea>
                    </div>
                </div>

                <!-- Gender -->
                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-medium mb-2 text-left relative left-14">Gender:</label>
                    <div class="flex justify-center">
                        <input type="text" id="gender" name="gender" value="Perempuan" 
                               class="w-[90%] border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>

                <!-- Telp -->
                <div class="mb-6">
                    <label for="telp" class="block text-gray-700 font-medium mb-2 text-left relative left-14">Telp:</label>
                    <div class="flex justify-center">
                        <input type="text" id="telp" name="telp" value="081234567890" 
                               class="w-[90%] border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" class="w-[90%] bg-[#1E3A8A] text-white py-2 rounded-md hover:bg-blue-900 transition">
                        Tambah Pelanggan
                    </button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
