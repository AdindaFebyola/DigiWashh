<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADP Laundry - Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <!-- Logo and Text -->
        <div class="flex items-center justify-center mb-6">
            <!-- Logo Image -->
            <img src="{{ asset('images/logo.jpg') }}" alt="ADP Laundry Logo" class="w-10 h-10 mr-4">
            <!-- Title -->
            <h1 class="text-xl font-bold text-blue-800">ADP LAUNDRY</h1>
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font-semibold text-gray-700 mb-4">Create your account</h2>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-4">
            <!-- Username -->
            <div>
                <label for="username" class="block text-gray-700 mb-1">Username</label>
                <input id="username" type="text" placeholder="Enter username"
                    class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 mb-1">Email</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-gray-400">@</span>
                    <input id="email" type="email" placeholder="Enter email"
                        class="w-full pl-8 pr-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 mb-1">Password</label>
                <input id="password" type="password" placeholder="Enter password"
                    class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="block text-gray-700 mb-1">Role</label>
                <input id="role" type="text" placeholder="Enter role"
                    class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
                    Create
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account?
            <a href="#" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
</body>
</html>
