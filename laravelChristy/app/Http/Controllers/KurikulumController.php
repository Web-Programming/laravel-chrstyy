<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo"Ini Halaman Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo"Ini Halaman Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo"Ini Halaman Store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo"Ini Halaman Show dengan ID" .$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo"Ini Halaman Edit dengan ID" .$id;
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
