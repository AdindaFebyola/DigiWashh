<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm">
<!-- Logo dan Tulisan DigiWash -->
<div class="flex items-center justify-center -space-x-1">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-16 object-contain relative top-1">
        <!-- Teks DigiWash -->
        <h1 class="text-3xl font-bold text-blue-900">Digi<span class="font-bold">Wash</span></h1>
</div>

        <!-- Kotak Login -->
        <div class="bg-white shadow-md rounded-lg w-full p-8">
            <!-- Tulisan Login (Diperbesar) -->
            <h2 class="text-2xl font-bold text-center mb-6 text-blue-900">Login to Your Account</h2>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                <!-- Username -->
                <div>
                    <label for="username" class="text-gray-600 block mb-2">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Enter your username"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="text-gray-600 block mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Enter your password"
                    >
                </div>

                <!-- Button -->
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300"
                >
                    Login
                </button>
            </form>

            <!-- Link ke Sign Up -->
            <div class="text-center mt-6">
                <p class="text-gray-600 text-sm">
                    Don't have an account? 
                    <a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Create an account</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>