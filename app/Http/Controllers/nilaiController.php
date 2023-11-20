<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;
use Illuminate\Support\Facades\DB;

class nilaiController extends Controller
{
    public function index(){
        $nilai = Nilai::all();
        return view('nilai.index',['nilai' => $nilai]);
    }


    public function create(){
        return view('nilai.create');
    }


    public function store(Request $request){
        $data = $request->validate([
            'nilai_siswa' => 'required|numeric',
        ]);
    
        $newNilai = Nilai::create($data); 
    
        return redirect(route('nilai.index'));
    }


    public function edit(Nilai $dataSiswa){
        return view('nilai.edit', ['dataSiswa' => $dataSiswa]);
    }
    public function update(Nilai $dataSiswa, Request $request){
        $data = $request->validate([
            'nilai_siswa' => 'required|numeric',
        ]);

        $dataSiswa->update($data);

        return redirect(route('nilai.index'))->with('success');
    }

    public function delete(Nilai $dataSiswa){
        $dataSiswa->delete();
        return redirect(route('nilai.index'))->with('success');
    }
    
    public function dataBergolong()
    {
        $scores = nilai::all();

        // Mengambil nilai minimum dan maksimum dari skor
        $minScore = $scores->min('nilai_siswa');
        $maxScore = $scores->max('nilai_siswa');

        // Menentukan jumlah kelas interval (bisa disesuaikan)
        $jumlahKelas = 10;

        // Menghitung lebar interval
        $intervalWidth = ceil(($maxScore - $minScore) / $jumlahKelas);

        // Mengelompokkan data skor ke dalam kelas interval
        $scoreGroups = [];
        for ($i = 0; $i < $jumlahKelas; $i++) {
            $lowerBound = $minScore + ($i * $intervalWidth);
            $upperBound = $lowerBound + $intervalWidth - 1;
            $count = $scores->whereBetween('nilai_siswa', [$lowerBound, $upperBound])->count();

            // Menyimpan data kelas interval, nilai tengah, dan frekuensi
            $scoreGroups[] = [
                'interval' => "$lowerBound - $upperBound",
                'mid_value' => ($lowerBound + $upperBound) / 2,
                'frequency' => $count,
            ];
        }
    
        return view('nilai.dataBergolong', compact('scoreGroups'));
    }

    public function distribusiFrekuensi()
    {
        $scoreFrequencies = nilai::groupBy('nilai_siswa')
            ->selectRaw('nilai_siswa, count(*) as count')
            ->orderBy('nilai_siswa', 'asc')
            ->get()
            ->map(function ($item) {
                return $item;
            });

           

        return view('nilai.frekuensi', compact('scoreFrequencies'));
    }

    public function getChiSqure()
    {
        $result = DB::table('tb_zed')->get();

        return view('nilai.tabelChi', compact('result'));
    }

    public function calculateChiSqure(Request $request)
    {

        $chi = DB::table('tb_zed')->where('z', substr($request->chi, 0, -1))->first();
        $lastChi    = substr($request->chi, -1);
        $result = '';

        if ($lastChi === '0') {
            $result = $chi->nol;
        } elseif ($lastChi === '1') {
            $result = $chi->satu;
        } elseif ($lastChi === '2') {
            $result = $chi->dua;
        } elseif ($lastChi === '3') {
            $result = $chi->tiga;
        } elseif ($lastChi === '4') {
            $result = $chi->empat;
        } elseif ($lastChi === '5') {
            $result = $chi->lima;
        } elseif ($lastChi === '6') {
            $result = $chi->enam;
        } elseif ($lastChi === '7') {
            $result = $chi->tujuh;
        } elseif ($lastChi === '8') {
            $result = $chi->delapan;
        } elseif ($lastChi === '9') {
            $result = $chi->sembilan;
        } else {
            $result = $chi->nol;
        }


        return back()->with('success', $result);
    }

    public function tabelDeskripsi()
{
    $maxValue = nilai::max('nilai_siswa'); // Mencari nilai maksimal
    $minValue = nilai::min('nilai_siswa'); // Mencari nilai minimal
    $averageValue = nilai::avg('nilai_siswa'); // Menghitung rata-rata nilai dengan 2 angka di belakang koma
    $averageValueFormatted = number_format($averageValue, 2); // Memformat nilai rata-rata

    $totalData = nilai::count(); // Menghitung jumlah data

    return view('nilai.tabelDeskripsi', compact('maxValue', 'minValue', 'averageValueFormatted', 'totalData'));
}


    public function dataSama()
{
    $sameValues = nilai::select('nilai_siswa', DB::raw('count(*) as total'))
        ->groupBy('nilai_siswa')
        ->get();

    return view('nilai.dataSama', compact('sameValues'));
}



}

