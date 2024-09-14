<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Budget_Allocation;
use App\Models\Expense;
use App\Models\Budget;

class BudgetAllocation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets=Budget::all();
        $expenses=Expense::all();
        $budget_allocations=Budget_Allocation::all();
        return view('dashboard.budget_allocation.index')->with('budget_allocations',$budget_allocations)->with('expenses',$expenses)->with('budgets',$budgets);
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
                'budget'=>['required'],
                'expense'=>['required'],
                'amount_allocated'=>['required'],

            ]
            );


            $budget_allocation=new Budget_Allocation;        
            $budget_allocation->budget_id=$request->input('budget');
            $budget_allocation->expense_id=$request->input('expense');
            $budget_allocation->amount_allocated=$request->input('amount_allocated');
            $budget_allocation->save();
            return redirect('/dash/budget_allocation')->with('success','Budget Allocation Created Successfully');
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
        $budget_allocation =Budget_Allocation::find($id);
        $budget_allocation->delete();
        return redirect('/dash/budget_allocation')->with('success','Budget Deleted');
    }
}
