<?php

namespace App\Http\Controllers;
use App\Models\Biodata;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::latest()->paginate(5);
        return view ('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('biodata.create');
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
            'nama' => 'required|min:2',
            'jenis_kelamin' => 'required|min:5',
            'telepon' => 'required|min:5',
            'email' => 'required|min:5',

        ]);

        $biodata = new Biodata();
        $biodata->nama = $request->nama;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        $biodata->save();
        return redirect()->route('tes2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'nama' => 'required|min:2',
        'jenis_kelamin' => 'required|min:5',
        'telepon' => 'required|min:5',
        'email' => 'required|min:5',
    ]);

    $biodata = Biodata::findOrFail($id); // Menggunakan findOrFail untuk mencari data berdasarkan $id
    $biodata->nama = $request->nama;
    $biodata->jenis_kelamin = $request->jenis_kelamin;
    $biodata->telepon = $request->telepon;
    $biodata->email = $request->email;
    $biodata->save();

    return redirect()->route('biodata.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        return redirect()->route('biodata.index');
    }
}
