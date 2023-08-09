@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Income Expense Tracker</h1>
        <p>Manage your finances effectively with our simple and intuitive web application.</p>
        <a href="{{ route('incomes.index') }}" class="btn btn-primary btn-lg">Get Started</a>
    </div>
@endsection
