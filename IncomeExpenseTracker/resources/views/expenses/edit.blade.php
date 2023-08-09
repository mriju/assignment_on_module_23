@extends('layouts.app')

@section('content')
    <h1>Edit Expense</h1>
    
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $expense->description }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control" value="{{ $expense->amount }}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $expense->date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
