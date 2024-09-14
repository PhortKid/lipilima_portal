<?php

namespace App\Http\Controllers;
use App\Models\ExpenseType;

use Illuminate\Http\Request;

class ExpenseCategory extends Controller
{
    public function index()
    {

        $expense_categories=ExpenseType::all();
        return view('dashboard.expense_categories.index')->with('expense_categories',$expense_categories);
    }


    public function store(Request $request)
    {
        $data= $request->validate(
            [
               'category_name'=>['required'],
            ]
            );


            $exp_categories=new ExpenseType;
            $exp_categories->name=$request->input('category_name');
            $exp_categories->save();
            return redirect('/dash/category_expence')->with('success','Category Created Success');
    }

    public function destroy(string $id)
    {
        $exp_categories =ExpenseType::find($id);
        $exp_categories->delete();
        return redirect('/dash/category_expence')->with('success','Category Deleted');
    }
}
