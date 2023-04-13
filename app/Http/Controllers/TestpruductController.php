<?php

namespace App\Http\Controllers;

use App\Models\testpruduct;
use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;

class TestpruductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = testpruduct::get();
        return view('welcome', compact('product'));
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
        $request->validate([
            'excel_file' => 'required|mimes:xlsx',
        ]);

        Excel::import(new ProductImport, $request->file('excel_file'));

        return redirect('/')->with('success', 'All good!');
    }

    /**
     * Display the specified resource.
     */
    public function show(testpruduct $testpruduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testpruduct $testpruduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testpruduct $testpruduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testpruduct $testpruduct)
    {
        //
    }
}
