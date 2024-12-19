<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        <!-- Kotak Sign-Up -->
        <div class="bg-white shadow-md rounded-lg w-full p-7">
            <!-- Tulisan Create Account -->
            <h2 class="text-2xl font-bold text-center mb-6 text-blue-900">Sign Up</h2>

            <!-- Form -->
            <form action="{{ route('signup.form') }}" method="POST" class="space-y-4">
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

                <!-- Email -->
                <div>
                    <label for="email" class="text-gray-600 block mb-2">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Enter your email"
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

                <!-- Role -->
                <div>
                    <label for="role" class="text-gray-600 block mb-2">Role</label>
                    <input 
                        type="text" 
                        id="role" 
                        name="role" 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Enter your role"
                    >
                </div>

                <!-- Button -->
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300"
                >
                    Create
                </button>
            </form>

            <!-- Link ke Login -->
            <div class="text-center mt-6">
                <p class="text-gray-600 text-sm">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>