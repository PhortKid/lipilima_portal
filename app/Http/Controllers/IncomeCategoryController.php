<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_categories=IncomeCategory::all();
        return view('dashboard.income_category.index')->with('income_categories',$income_categories);
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
               'category_name'=>['required'],
            ]
            );


            $inc_categories=new IncomeCategory;
            $inc_categories->name=$request->input('category_name');
            $inc_categories->save();
            return redirect('/dash/income_category')->with('success','Income Category Created');
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
        $inc_categories =IncomeCategory::find($id);
        $inc_categories->delete();
        return redirect('/dash/income_category')->with('success','Income Category Deleted');
    }
}
