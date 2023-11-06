@extends('layout.indexLayout')
@section('content')

<div class="mx-16">
    <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
        <h1 class=" text-2xl font-semibold mb-6">Tabel Distribusi Frekuensi</h1>
        <table class="table-auto w-full bg-white shadow-lg rounded-lg border border-gray-300">
            <thead>
                <tr >
                    <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">No</th>
                    <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">Nilai</th>
                    <th class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sameValues as $value)
                <tr>
                    <td class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $loop ->iteration }}</td>
                    <td class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $value->nilai_siswa }}</td>
                    <td class=" px-6 py-3 border-b-2 border-r-2 border-gray-300">{{ $value->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
