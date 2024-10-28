@extends('layout.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Edit Kelas</h1>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST"
        class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <!-- Kelas -->
        <div class="mb-4">
            <label for="kelas" class="block text-gray-700 font-bold mb-2">Kelas</label>
            <input type="text" name="kelas" id="kelas" value="{{ $kelas->kelas }}"
                class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200"
                required>
            @error('kelas')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Ruangan -->
        <div class="mb-4">
            <label for="ruangan" class="block text-gray-700 font-bold mb-2">Ruangan</label>
            <input type="text" name="ruangan" id="ruangan" value="{{ $kelas->ruangan }}"
                class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200"
                required>
            @error('ruangan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Lantai -->
        <div class="mb-4">
            <label for="lantai" class="block text-gray-700 font-bold mb-2">Lantai</label>
            <input type="text" name="lantai" id="lantai" value="{{ $kelas->lantai }}"
                class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200"
                required>
            @error('lantai')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
            Update
        </button>
    </form>
@endsection