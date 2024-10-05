<?php


namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseType;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    public function index(Request $request)
{
    // Initialize variables for the report
    $expenses = collect(); // Initialize as a collection
    $totalAmount = 0;

    // Check if start date and end date are provided
    if ($request->has('start_date') && $request->has('end_date')) {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Fetch expenses within the date range
        $expenses = Expense::whereBetween('date', [$startDate, $endDate])->with('expensetype')->get(); // This returns a collection
        $totalAmount = $expenses->sum('amount');
    }

    // Check if a month is provided
    if ($request->has('month')) {
        $month = $request->input('month');
        $year = $request->has('year') ? $request->input('year') : date('Y'); // Use current year if year is not provided

        // Fetch expenses for the selected month
        $expenses = Expense::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->with('expensetype')
            ->get();
        $totalAmount = $expenses->sum('amount');
    }

    // Fetch all expense categories for dropdown
    $expense_categories = ExpenseType::all();

    return view('dashboard.expense_management.report', compact('expenses', 'totalAmount', 'expense_categories'));
}

    
}
