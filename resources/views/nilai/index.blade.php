@extends('layout.indexLayout')
@section('content')
    
    <div class="mx-16">
        <div class="container mx-auto px-12">
            <h1 class=" text-4xl font-semibold  mb-8 mt-10  text-white">Tabel Nilai</h1>
            
            <div class="mb-4">
                <a href="{{ route('nilai.create') }}" class=" bg-blue-500 hover:bg-blue-400 hover:font-bold text-white font-semibold py-2 px-4 rounded mb-4">Tambah Data</a>
            </div>
            <div>
                @if(session()->has('success'))
                <div class=" bg-green-200 text-green-800 px-6 py-4 mt-6 rounded-lg">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
        <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md ">
            <table id="myTable" class="text-center table-auto pb-2 w-full bg-white shadow-lg rounded-lg border border-gray-300 ">
                <thead>
                    <tr>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">No</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Nilai</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nilai as $dataSiswa)
                    <tr>
                        <td class=" w-12 border border-r-2 border-b-2 px-6 py-4 text-center">{{ $loop->iteration }}</td>
                        <td style="text-align: center" class=" border border-r-2 border-b-2 px-6 py-4 ">{{ $dataSiswa->nilai_siswa }}</td>
                        <td class=" w-36 border border-r-2 border-b-2 px-6 py-4 text-center">
                            <a href="{{ route('nilai.edit', ['dataSiswa' => $dataSiswa]) }}" class="bg-blue-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <form method="post" action="{{ route('nilai.delete', ['dataSiswa' => $dataSiswa]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection