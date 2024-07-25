<?php

namespace App\Http\Controllers;
use App\Models\Jenis_kepribadian;

use Illuminate\Http\Request;

class Jenis_kepribadianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_kepribadian = Jenis_kepribadian::latest()->paginate(5);
        return view ('jenis_kepribadian.index', compact('jenis_kepribadian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_kepribadian = Jenis_kepribadian::all();
        return view('jenis_kepribadian.create', compact('jenis_kepribadian'));
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
        'jenis_kepribadian' => 'required|min:5',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'pengertian' => 'required|min:5',
        'kekurangan' => 'required|min:5',
        'kelebihan' => 'required|min:5',

    ]);

    $jenis_kepribadian = new Jenis_kepribadian();

    $jenis_kepribadian->jenis_kepribadian = $request->jenis_kepribadian;
    $jenis_kepribadian->pengertian = $request->pengertian;
    $jenis_kepribadian->kekurangan = $request->kekurangan;
    $jenis_kepribadian->kelebihan = $request->kelebihan;
    $jenis_kepribadian->karir = $request->karir;

    if ($request->hasFile('gambar')) {
        $image = $request->file('gambar');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $filename);
        $jenis_kepribadian->gambar = $filename;
    }

    $jenis_kepribadian->save();

    return redirect()->route('jenis_kepribadian.index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis_kepribadian = Jenis_kepribadian::findOrFail($id);
        return view('jenis_kepribadian.show', compact('jenis_kepribadian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_kepribadian = Jenis_kepribadian::findOrFail($id);
        return view('jenis_kepribadian.edit', compact('jenis_kepribadian'));
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
        'jenis_kepribadian' => 'required|min:5',
        'pengertian' => 'required|min:5',
        'kekurangan' => 'required|min:5',
        'kelebihan' => 'required|min:5',
        'karir' => 'required|min:5',
    ]);

    // Temukan data jenis_kepribadian berdasarkan ID
    $jenis_kepribadian = Jenis_kepribadian::findOrFail($id);


    $jenis_kepribadian->jenis_kepribadian = $request->jenis_kepribadian;
    $jenis_kepribadian->pengertian = $request->pengertian;
    $jenis_kepribadian->kekurangan = $request->kekurangan;
    $jenis_kepribadian->kelebihan = $request->kelebihan;
    $jenis_kepribadian->karir = $request->karir;

    // Simpan perubahan
    $jenis_kepribadian->save();

    // Redirect ke halaman index
    return redirect()->route('jenis_kepribadian.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_kepribadian = Jenis_kepribadian::findOrFail($id);
        $jenis_kepribadian->delete();
        return redirect()->route('jenis_kepribadian.index');
    }
}
