@extends('layout.indexLayout')
@section('content')

    <div class="container mx-auto px-16 py-8 w-3/5">
        <!-- Create Section -->
        <h1 class="text-3xl font-bold text-center -mt-12 text-white mb-20">Masukkan Nilai</h1>
        <a href="{{ route('nilai.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold mt-3 mb-6 py-2 px-4 rounded">Kembali</a>
        <form method="post" action="{{ route('nilai.store') }}" class="mt-4 bg-white p-6 ">
            @csrf
            @method('post')
            <div class="mb-4">
                <label for="nilai_siswa" class="block text-gray-700 font-semibold">Nilai</label>
                <input type="text" id="nilai_siswa" name="nilai_siswa" placeholder="Masukkan nilai 1-100" class="w-full p-2 border rounded">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Tambah</button>
            </div>
        </form>
    </div>
@endsection
