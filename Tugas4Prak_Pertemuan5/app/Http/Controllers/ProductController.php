<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $nilai = null; // atau angka default seperti 0
        return view('product.index', compact('nilai'));
    }

    public function create() {}

    public function store(Request $request) {}

    /**
     * Display the specified resource.
     * a. Pesan alert "Nilai ini adalah ganjil/genap".
        b. Alert type:
        ganjil → "warning"
        genap → "success"
     */
    public function show($nilai)
    {
        $type = ($nilai % 2 == 0) ? 'success' : 'warning';
        $pesan = "Nilai ini adalah " . (($nilai % 2 == 0) ? 'genap' : 'ganjil');

        return view('product', compact('type', 'pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
