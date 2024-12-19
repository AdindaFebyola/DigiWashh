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

        <!-- Content -->
        <main class="flex-1 p-10">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center" style="font-family: 'Poppins', sans-serif;">Edit Paket Laundry</Label></h1>
            
            <!-- Form Edit Paket -->
            <form action="#" method="POST">
                <div class="space-y-4"> <!-- Menambahkan jarak antara setiap elemen -->
                    <!-- Jenis Laundry -->
                    <div class="mb-4"> <!-- Margin bawah -->
                        <label for="jenis_laundry" class="block text-gray-700 font-medium mb-2">Jenis Laundry:</label>
                        <select id="jenis_laundry" name="jenis_laundry" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">
                            <option value="kilat" selected>Cuci Kilat</option>
                            <option value="reguler">Cuci Reguler</option>
                            <option value="deluxe">Cuci Deluxe</option>
                        </select>
                    </div>

                    <!-- Harga -->
                    <div class="mb-4"> <!-- Margin bawah -->
                        <label for="harga" class="block text-gray-700 font-medium mb-2">Harga:</label>
                        <input type="text" id="harga" name="harga" value="10000" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan harga">
                    </div>

                    <!-- Proses Pengerjaan -->
                    <div class="mb-4"> <!-- Margin bawah -->
                        <label for="proses" class="block text-gray-700 font-medium mb-2">Proses Pengerjaan:</label>
                        <select id="proses" name="proses" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-blue-500 outline-none">
                            <option value="1" selected>1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-700 transition">Update Paket</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
