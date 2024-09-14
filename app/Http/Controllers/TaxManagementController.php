<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Tax;

class TaxManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxs=Tax::all();
        return view('dashboard.tax_management.index')->with('taxs',$taxs);
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
        $data= $request->validate(
            [
               'tax_name'=>['required'],
               'tax_rate'=>['required'],
               'tax_description'=>['required'],
            ]
            );


            $tax=new Tax;
            $tax->tax_name=$request->input('tax_name');
            $tax->rate=$request->input('tax_rate');
            $tax->description=$request->input('tax_description');
            $tax->save();
            return redirect('/dash/tax_management')->with('success','Tax Created Success');

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
        $tax =Tax::find($id);
        $tax->delete();
        return redirect('/dash/tax_management')->with('success','Tax info Deleted');
    }
}
