<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\ExpenseType;

class ExpenseManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $expenses=Expense::all();
        $expense_categories=ExpenseType::all();
        return view('dashboard.expense_management.index')->with('expenses',$expenses)->with('expense_categories',$expense_categories);
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
               'amount'=>['required'],
               'category'=>['required'],
               'date'=>['required'],
               'status'=>['required'],
               'description'=>['nullable'],
            ]
            );


            $expense=new Expense;
            $expense->amount=$request->input('amount');
            $expense->category_id=$request->input('category');
            $expense->date=$request->input('date');
            $expense->status=$request->input('status');
            $expense->description=$request->input('description');
            $expense->save();
            return redirect('/dash/expense_management')->with('success','Expense Created Success');

            

            
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
        $expense =Expense::find($id);
        $expense->delete();
        return redirect('/dash/expense_management')->with('success','Expense Deleted');
    }
}
