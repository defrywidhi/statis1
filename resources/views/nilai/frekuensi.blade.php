@extends('layout.indexLayout')
@section('content')

    <div class="mx-16">
        <div class="container mx-auto px-12">
            <h1 class=" text-4xl font-semibold  mb-8 mt-10  text-white">Data Bergolong</h1>
            
            
        </div>
        <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
            <table id="myTable" class="table-auto pb-2 w-full bg-white shadow-lg rounded-lg border border-gray-300 ">
                <thead>
                    <tr>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">No</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Nilai</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Median</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($scoreFrequencies as $dataSiswa)
                    <tr>
                        <td class=" w-12 border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $loop->iteration }}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $dataSiswa['nilai_siswa']}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center">{{ $dataSiswa['count']}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
@endsection