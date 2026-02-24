<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of expenses.
     */
    public function index()
    {
        $expenses = Expense::orderBy('expense_date', 'desc')->get();
        
        // Calculate category totals for chart
        $categoryTotals = Expense::selectRaw('category, SUM(amount) as total')
            ->groupBy('category')
            ->orderBy('total', 'desc')
            ->get();
        
        // Calculate total spending
        $totalSpending = $expenses->sum('amount');
        
        // Prepare data for Chart.js with safety checks
        $chartLabels = $categoryTotals->pluck('category')->toArray();
        $chartData = $categoryTotals->pluck('total')->map(function($amount) {
            return (float) $amount;
        })->toArray();
        
        return view('expenses.index', compact('expenses', 'categoryTotals', 'totalSpending', 'chartLabels', 'chartData'));
    }

    /**
     * Store a newly created expense.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'expense_date' => 'required|date',
        ]);

        Expense::create($validated);

        return redirect()->route('expenses.index')
            ->with('success', 'Expense added successfully!');
    }
}
