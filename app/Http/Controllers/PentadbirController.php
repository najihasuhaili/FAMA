<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pentadbir;

class PentadbirController extends Controller
{
    public function index()
    {
        $pentadbirs = Pentadbir::all();
        return view('pentadbirs.index', ['pentadbirs' => $pentadbirs]);
    }

    public function login(Request $request)
    {
        $nama_pentadbir = $request->input('nama_pentadbir');
        $email_pentadbir = $request->input('email_pentadbir');
        $no_sambungan = $request->input('no_sambungan');

        $admin = Pentadbir::where('nama_pentadbir', $nama_pentadbir)
            ->where('no_sambungan', $no_sambungan)
            ->first();

        if ($admin) {
            // Authentication successful
            // You can add your logic here, maybe set a session or redirect to a dashboard
            return redirect()->route('pentadbir.index')->with('success', 'Login successful!');
        } else {
            // Authentication failed
            return redirect()->route('pentadbir.index')->with('error', 'Login failed. Invalid credentials.');
        }
    }
}

