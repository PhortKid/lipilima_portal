<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseType;
use App\Models\Budget;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $budgets=Budget::all();
        $expense_categories=ExpenseType::all();
        return view('dashboard.budget_management.index')->with('budgets',$budgets)->with('expense_categories',$expense_categories);
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
                'category'=>['required'],
                'budget_amount'=>['required'],
                'start_date'=>['required'],
                'end_date'=>['required'],

            ]
            );


            $budget=new Budget;        
            $budget->category_id=$request->input('category');
            $budget->budget_amount=$request->input('budget_amount');
            $budget->start_date=$request->input('start_date');
            $budget->end_date=$request->input('end_date');
            $budget->save();
            return redirect('/dash/budget_planning')->with('success','Budget Created Success');

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
        $budget =Budget::find($id);
        $budget->delete();
        return redirect('/dash/budget_planning')->with('success','Budget Deleted');
    }
}
