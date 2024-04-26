@extends('layouts.app')

@section('content')
    <h1>Car Categories</h1>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection