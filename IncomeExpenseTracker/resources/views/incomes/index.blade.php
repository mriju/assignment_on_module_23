@extends('layouts.app')

@section('content')
    <h1>Income List</h1>
    
    <a href="{{ route('incomes.create') }}" class="btn btn-success">Add Income</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incomes as $income)
                <tr>
                    <td>{{ $income->description }}</td>
                    <td>{{ $income->amount }}</td>
                    <td>{{ $income->date }}</td>
                    <td>
                        <a href="{{ route('incomes.edit', $income->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('incomes.destroy', $income->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $incomes->links() }}
@endsection
