<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Invoice;
use App\Models\InvoiceItem;

class InvoiceController extends Controller
{
    // Display the form to create a new invoice
    public function create()
    {
        $customers = Guest::all();
        return view('dashboard.invoices.create', compact('customers'));
    }

    // Store a new invoice
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'invoice_number' => 'required|unique:invoices',
            'customer_id' => 'required',
            'issue_date' => 'required|date',
            'items.*.description' => 'required',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.price' => 'required|numeric|min:0.01',
        ]);

        

        // Create new invoice
        $invoice = Invoice::create([
            'invoice_number' => $request->invoice_number,
            'customer_id' => $request->customer_id,
            'issue_date' => $request->issue_date,
            'payment_info' => $request->payment_info,
            'total_amount' => 0 // Will calculate later
        ]);

        $totalAmount = 0;

        // Add invoice items
        foreach ($request->items as $item) {
            $subtotal = $item['quantity'] * $item['price'];
            $totalAmount += $subtotal;

            InvoiceItem::create([
                'invoice_id' => $invoice->id,
             
                'description' => $item['description'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'subtotal' => $subtotal
            ]);
        }

        // Update total amount of invoice
        $invoice->update(['total_amount' => $totalAmount]);

        return redirect('dash/invoices')->with('success', 'Invoice created successfully.');

      
    }

    // Show all invoices
    public function index()
    {
        //$invoices = Invoice::with('customer')->get();
        //return $invoices;
        //return view('dashboard.invoices.index', compact('invoices'));

        $invoices = Invoice::with(['customer', 'invoiceItems'])->get();
        return view('dashboard.invoices.index', compact('invoices'));
    }
}
