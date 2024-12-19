<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <!-- Tombol untuk membuka modal -->
    <button 
        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
        onclick="openPopup()"
    >
        Open Modal
    </button>

    <!-- Modal -->
    <div id="popup-hapus" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-[400px]">
            <p class="text-lg font-bold mb-4">Apakah Anda yakin ingin menghapus data ini?</p>
            <div class="flex justify-between gap-4">
                <button 
                    class="bg-gray-200 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-300"
                    onclick="closePopup()"
                >
                    Cancel
                </button>
                <button 
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600"
                    onclick="closePopup()"
                >
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function openPopup() {
            const popup = document.getElementById('popup-hapus');
            if (popup) {
                popup.classList.remove('hidden'); // Menampilkan modal
                console.log("Modal opened"); // Debug log
            } else {
                console.error("Modal not found");
            }
        }

        function closePopup() {
            const popup = document.getElementById('popup-hapus');
            if (popup) {
                popup.classList.add('hidden'); // Menyembunyikan modal
                console.log("Modal closed"); // Debug log
            } else {
                console.error("Modal not found");
            }
        }
    </script>
</body>
</html>