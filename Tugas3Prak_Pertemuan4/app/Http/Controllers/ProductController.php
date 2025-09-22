<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // 2. di ProductController (Buat jika belum ada) isi method 'Index' yang
    // menerima 1 parameter dari routes berupa angka, tambah angka tersebut
    public function index($angka)
    {
        // return view(view: 'product');
        $hasil = $angka + 8; // bebas mau tambah berapa
        return view('product.index', ['hasil' => $hasil]);
        // dengan angka berapapun(bebas) lalu lempar datanya ke halaman view.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
