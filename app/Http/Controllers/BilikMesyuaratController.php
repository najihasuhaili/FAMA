<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasiliti;

class BilikMesyuaratController extends Controller
{
    public function senarai()
    {
        $bilikMesyuarats = Fasiliti::all();
        return view('pentadbirs.bilik_mesyuarat.senarai', ['bilikMesyuarats' => $bilikMesyuarats]);
    }

    public function create()
    {
        return view('pentadbirs.bilik_mesyuarat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kapasiti' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
        ]);

        Fasiliti::create($request->all());

        return redirect()->route('bilik-mesyuarat.senarai')->with('success', 'Bilik Mesyuarat added successfully!');
    }

    public function show($id)
    {
        $bilikMesyuarat = Fasiliti::findOrFail($id);
        return view('pentadbirs.bilik_mesyuarat.show', ['bilikMesyuarat' => $bilikMesyuarat]);
    }

    public function edit($id)
    {
        $bilikMesyuarat = Fasiliti::findOrFail($id);
        return view('pentadbirs.bilik_mesyuarat.edit', ['bilikMesyuarat' => $bilikMesyuarat]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kapasiti' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
        ]);

        $bilikMesyuarat = Fasiliti::findOrFail($id);
        $bilikMesyuarat->update($request->all());

        return redirect()->route('bilik-mesyuarat.senarai')->with('success', 'Bilik Mesyuarat updated successfully!');
    }

    public function destroy($id)
    {
        Fasiliti::destroy($id);
        return redirect()->route('bilik-mesyuarat.senarai')->with('success', 'Bilik Mesyuarat deleted successfully!');
    }
}
?>
