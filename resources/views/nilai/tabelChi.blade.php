@extends('layout.indexLayout')
@section('content')

    <div class="mx-16">
        <div class="container mx-auto px-12">
            <h1 class=" text-4xl font-semibold  mb-8 mt-10  text-white">Tabel Chi</h1>
            
        <form action="{{route('chi')}}" method="post" class="text-center">
            @csrf
            <input class="w-1/2 py-2 rounded-md " type="text" name="chi" id="chi" placeholder="  3.10">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mt-4" type ="submit">Hitung</button>
        </form>
        @if (session()->has('success'))
        <div class=" ">
            {{ session('success') }}
        </div>
        @endif

        </div>
        <div class="container mx-auto width-3/5 px-12 mt-4 bg-white py-6 rounded-md">
            <table id="myTable" class="table-auto pb-2 w-full bg-white shadow-lg rounded-lg border border-gray-300 ">
                <thead>
                    <tr>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Nilai Z</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Nol</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Satu</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Dua</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Tiga</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Empat</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Lima</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Enam</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Tujuh</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Delapan</th>
                        <th class=" px-6 py-3 border-b-2 border-gray-300 border-r-2 border-gray-300">Sembilan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $chi)
                    <tr>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->z}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->nol}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->satu}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->dua}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->tiga}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->empat}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->lima}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->enam}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->tujuh}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->delapan}}</td>
                        <td class=" border border-r-2 border-b-2 px-6 py-4 text-center ">{{ $chi->sembilan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
@endsection