<!-- resources/views/profile.blade.php -->
@extends('app')

@section('content')
<div class="bg-white shadow rounded-lg p-6 flex space-x-6">
    <!-- Profile Image -->
    <div class="w-32 h-32 bg-gray-200 rounded-full"></div>
    
    <!-- Profile Details -->
    <div class="flex-1 space-y-4">
        <div>
            <h2 class="text-gray-700 text-lg font-semibold">Nama: Eriza Dinda</h2>
        </div>
        <div>
            <p class="text-gray-500">Email: eriza@gmail.com</p>
        </div>
        <div>
            <p class="text-gray-500">No Telepon: 082134567891</p>
        </div>
        <div>
            <p class="text-gray-500">Alamat: Griya Shanta</p>
        </div>
    </div>
</div>

<!-- Edit Button -->
<div class="mt-6">
    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Edit Profil
    </button>
</div>
@endsection