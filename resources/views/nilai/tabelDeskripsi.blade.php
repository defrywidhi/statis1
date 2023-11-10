@extends('layout.indexLayout')
@section('content')
<div class="container mx-auto px-12">
    <h1 class=" text-5xl font-semibold text-center mb-24 -mt-12  text-white">TABLE DESKRIPSI DATA</h1>
    
    
</div>
    <div class="mx-16">
        <!-- Informasi Statistik -->
        <h1 class="ml-16 text-4xl font-semibold  mb-4 mt-10  text-white" style="font-size: xx-large" >Hasil</h1>
        <div style="font-size: large" class=" text-white ml-16">
            <h1>Nilai Maksimal: {{ $maxValue }}</h1>
            <h1>Nilai Minimal: {{ $minValue }}</h1>
            <h1>Nilai Rata-rata: {{ $averageValue }}</h1>
            <h1>Jumlah Data: {{ $totalData }}</h1>
        </div>

        <!-- Tabel Data -->
        <div class="mx-16">
            <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
                <table class="table-auto w-full bg-gray-100 shadow-lg rounded-lg border border-gray-300">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class=" px-6 py-3 border-b-2 border-r-2 border-r-2 border-gray-300">Nilai Maksimal</th>
                            <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">Nilai Minimal</th>
                            <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">Nilai Rata-rata</th>
                            <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">Jumlah Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $maxValue }}</td>
                            <td class="text-center px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $minValue }}</td>
                            <td class="text-center px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $averageValue }}</td>
                            <td class="text-center px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $totalData }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
        
        
    </div>
@endsection
