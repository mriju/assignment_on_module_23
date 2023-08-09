@extends('layouts.app')

@section('content')
    <h1>Edit Income</h1>
    
    <form action="{{ route('incomes.update', $income->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $income->description }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control" value="{{ $income->amount }}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $income->date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
