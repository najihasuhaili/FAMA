<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorangPermohonan;

class BorangController extends Controller
{
    /**
     * Display the form for submitting Borang.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('borang');
    }

    /**
     * Handle the submission of Borang.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function borangSubmission(Request $request)
    {
        $request->validate([
            'dari' => 'required|date',
            'hingga' => 'required|date|after:dari',
            'nama_pemohon' => 'required|string|max:255',
            'email_pemohon' => 'required|email|max:255',
            'no_sambungan' => 'required|string|max:20',
            'jawatan' => 'required|string|max:255',
            'unit_bahagian' => 'required|string|max:255',
            'nama_mesyuarat' => 'required|string|max:255',
            'nama_bilik' => 'required|string|max:255',
            'pengerusi' => 'required|string|max:255',
            'bilangan_ahli' => 'required|integer|min:1',
            
        ]);

        $borang = new BorangPermohonan;
        $borang->fill($request->all());

        if ($borang->dari == $borang->hingga) {
            return redirect()->route('borang.form')->with('error', 'Dari and Hingga dates cannot be the same.')->withInput();
        }

        $borang->save();

        return redirect()->route('borang.form')->with('success', 'Borang submitted successfully!');
    }
    public function displayPermohonan()
    {
        $borangs = BorangPermohonan::all();

        return view('pentadbirs.senarai_permohonan', ['borangs' => $borangs]);
    }
}
?>