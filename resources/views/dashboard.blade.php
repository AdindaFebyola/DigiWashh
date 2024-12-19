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

        <div class="flex-1 p-6">
    <div class="bg-[#1E3A8A] rounded-lg p-8 shadow-md max-w-[98%] mx-auto">
        <h1 class="text-2xl text-white font-bold text-center">Selamat Datang </h1>

        <div class="mt-8 space-y-4">
            <!-- Customers Card -->
            <div class="bg-white p-6 rounded-lg shadow-md max-w-[98%] mx-auto">
                <h2 class="text-xl font-bold mb-4">Customers</h2>
                <div class="flex items-center  text-xl font-semibold">
                    <img src="images/customer.png" alt="Customer" class="w-16 h-16 mr-4">
                    <span>2</span>
                </div>
            </div>

            <!-- Reports Chart Placeholder -->
<!-- Reports Chart Placeholder -->
<div class="bg-white p-5 rounded-lg shadow-md max-w-[98%] mx-auto relative">
    <img src="images/grafik.png" alt="Chart" style="width: 60%; height: auto; margin-top: 5px;" />


</div>

        </div>
    </div>
</div>

        </div>
    </div>
</body>
</html>
