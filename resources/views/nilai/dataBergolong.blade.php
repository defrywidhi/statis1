@extends('layout.indexLayout')
@section('content')

    <div class="mx-16">
        <div class="container mx-auto px-12">
            <h1 class=" text-5xl text-center font-semibold  mb-24 -mt-12  text-white">DESKRIPSI DATA</h1>
            
            
        </div>
        <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
            <table id="myTable" class="table-auto pb-2 w-full bg-gray-100 shadow-lg rounded-lg border border-gray-300 ">
                <thead class="bg-blue-100">
                    <tr>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">No</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Nilai</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Median</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Frekuensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scoreGroups as $dataSiswa)
                    <tr>
                        <td class=" w-12 border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $loop->iteration }}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $dataSiswa['interval']}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center">{{ $dataSiswa['mid_value']}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center">{{ $dataSiswa['frequency']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
@endsection