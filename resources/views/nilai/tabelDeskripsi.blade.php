@extends('layout.indexLayout')
@section('content')
    <div class="ml-16">
        <!-- Informasi Statistik -->
        <h1 class="text-white ml-20 mb-4" style="font-size: xx-large" >Hasil</h1>
        <div style="font-size: large" class=" text-white ml-20">
            <h1>Nilai Maksimal: {{ $maxValue }}</h1>
            <h1>Nilai Minimal: {{ $minValue }}</h1>
            <h1>Nilai Rata-rata: {{ $averageValue }}</h1>
            <h1>Jumlah Data: {{ $totalData }}</h1>
        </div>

        <!-- Tabel Data -->
        <div class="ml-16">
            <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
                <table class="table-auto w-full bg-white shadow-lg rounded-lg border border-gray-300">
                    <thead>
                        <tr>
                            <th class="font-poppins px-6 py-3 border-b-2 border-gray-300">Keterangan</th>
                            <th class="font-poppins px-6 py-3 border-b-2 border-gray-300">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-poppins px-6 py-3 border-b-2 border-gray-300">Nilai Maksimal:</td>
                            <td class="font-poppins px-6 py-3">{{ $maxValue }}</td>
                        </tr>
                        <tr>
                            <td class="font-poppins px-6 py-3 border-b-2 border-gray-300">Nilai Minimal:</td>
                            <td class="font-poppins px-6 py-3">{{ $minValue }}</td>
                        </tr>
                        <tr>
                            <td class="font-poppins px-6 py-3 border-b-2 border-gray-300">Nilai Rata-rata:</td>
                            <td class="font-poppins px-6 py-3">{{ $averageValue }}</td>
                        </tr>
                        <tr>
                            <td class="font-poppins px-6 py-3">Jumlah Data:</td>
                            <td class="font-poppins px-6 py-3">{{ $totalData }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        
        
    </div>
@endsection
