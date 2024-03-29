<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\mustahiq;
use App\Models\muzakki;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MustahiqExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class MustahiqController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // function usia atau fungsi usia //
    {

        $mustahiqs = DB::table('mustahiq')
            ->select('id_mustahiq','nik', 'nama_mustahiq', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'agama', 'pekerjaan', 'penghasilan', 'jumlah_anak', 'ashnaf', 'created_at', DB::raw('usia(tgl_lahir) AS usia'))
            ->get();

        $results = DB::select('SELECT id_mustahiq FROM mustahiq');
        foreach ($results as $result) {
            echo $result->id_mustahiq;
        }

        return view('BackEnd.mustahiq.index', compact('mustahiqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mustahiqr = mustahiq::all();
        return view('BackEnd.mustahiq.create', compact('mustahiqr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama_mustahiq' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'jumlah_anak' => 'required',
            'ashnaf' => 'required',
        ]);

        $mustahiqs = mustahiq::create([
            'nik' => $request->nik,
            'nama_mustahiq' => $request->nama_mustahiq,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'jumlah_anak' => $request->jumlah_anak,
            'ashnaf' => $request->ashnaf,
        ]);

        return redirect()->route('mustahiq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_mustahiq
     * @return \Illuminate\Http\Response
     */
    public function show($id_mustahiq)
    {
        $mustahiqs = mustahiq::where('id_mustahiq', $id_mustahiq)->first();
        return view('BackEnd.mustahiq.detail', compact('mustahiqs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_mustahiq
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mustahiq)
    {
        $mustahiqs = mustahiq::where('id_mustahiq', $id_mustahiq)->first();
        return view('BackEnd.mustahiq.show', [
            "mustahiqs" => $mustahiqs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_mustahiq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mustahiq)
    {
        $this->validate($request, [
            'nik',
            'nama_mustahiq',
            'jenis_kelamin',
            'tgl_lahir',
            'alamat',
            'agama',
            'pekerjaan',
            'penghasilan',
            'jumlah_anak',
            'ashnaf',
        ]);

        $mustahiqs = mustahiq::where('id_mustahiq', $id_mustahiq);
        $mustahiqs->update($request->except('_token', '_method'));
        return redirect()->route('mustahiq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_mustahiq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mustahiq)
    {
        $mustahiqs = mustahiq::find($id_mustahiq);
        $mustahiqs->delete();
        return to_route('mustahiq.index')->with('hapus data berhasil');
    }

    public function export()
    {
        return Excel::download(new MustahiqExport, 'BackEnd.Mustahiq.xlsx');
    }


    public function mustahiq(Request $request)
    {
        // $sum_jumlah = pembayaran::sum('jumlah');
        $tgl_masuk = $request->tgl_masuk;
        $tgl_selesai = $request->tgl_selesai;
        $data = mustahiq::whereBetween('created_at', [$tgl_masuk, $tgl_selesai])->get();
        return view('BackEnd.laporan.mustahiq', compact('data', 'tgl_masuk', 'tgl_selesai'));
    }
}
