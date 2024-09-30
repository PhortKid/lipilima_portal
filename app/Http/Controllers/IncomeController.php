<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today(); // Pata tarehe ya leo

        $totalAmount = Income::whereDate('date', $today)->sum('amount'); // Jumlisha kiasi chote

       // return $totalAmount;
      
        $incomes=Income::all();
        $income_categories=IncomeCategory::all();
        return view('dashboard.income_management.index')->with('incomes',$incomes)->with('income_categories',$income_categories);
        
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
               'description'=>['nullable'],
            ]
            );


            $income=new Income;
            $income->amount=$request->input('amount');
            $income->category_id=$request->input('category');
            $income->date=$request->input('date');
            $income->description=$request->input('description');
            $income->save();
            return redirect('/dash/income_management')->with('success','Income Created');
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

    public function report()
    {
        $incomes=Income::all();
        $income_categories=IncomeCategory::all();
        return view('dashboard.income_management.report')->with('incomes',$incomes)->with('income_categories',$income_categories);
    }
}
