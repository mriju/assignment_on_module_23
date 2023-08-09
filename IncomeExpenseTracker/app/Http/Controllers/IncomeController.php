<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Auth;
use Illuminate\Support\Facades\Redirect;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Auth::user()->incomes()->latest()->paginate(10);
        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Auth::user()->incomes()->create([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->route('incomes.index')->with('success', 'Income added successfully.');
    }

    public function edit(Income $income)
    {
        return view('incomes.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $income->update([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return Redirect::back()->with('success', 'Income deleted successfully.');
    }
}
