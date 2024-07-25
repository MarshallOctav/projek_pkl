<?php

namespace App\Http\Controllers;

use App\Models\Jenis_kepribadian;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::latest()->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        $jenis_kepribadian = Jenis_kepribadian::all();

        return view('pertanyaan.create', compact('jenis_kepribadian'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
    'pertanyaan' => 'required',
    'id_jenis_kepribadian' => 'required', // tambahkan validasi untuk jenis kepribadian
]);


        $pertanyaan = new Pertanyaan();
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->id_jenis_kepribadian = $request->id_jenis_kepribadian;
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jenis_kepribadian= Jenis_kepribadian::all();
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact('pertanyaan', 'jenis_kepribadian'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',

        ]);

        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->id_jenis_kepribadian = $request->id_jenis_kepribadian;
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }

    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index');

    }
}
