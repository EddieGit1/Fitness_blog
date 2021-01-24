@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="{{ route('home') }}">All workout</a><br>
    <label>Category filter:</label>
        @foreach($categories as $category)
            <a href="#{{$category->name}}">{{$category->name}}</a>
        @endforeach
    <div class="container">
        <ul>
        @foreach($categories as $category)
            <h3 class="routine" id="{{ $category->name }}">{{ $category->name }}</h3>
            <div class="row">
                <table id="routine">
                    @foreach($category->workoutItems as $workoutItem)
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Workout Title</th>
                        <th>Maandag</th>
                        <th>Dinsdag</th>
                        <th>Woensdag</th>
                        <th>Donderdag</th>
                        <th>Vrijdag</th>
                        <th>Zaterdag</th>
                        <th>Zondag</th>
                    <tr/>
                    <tr>
                        <td>{{ $workoutItem->id }}</td>
                        <td>{{ $workoutItem->full_name }}</td>
                        <td>{{ $workoutItem->category->name }}</td>
                        <td>{{ $workoutItem->monday }}</td>
                        <td>{{ $workoutItem->tuesday }}</td>
                        <td>{{ $workoutItem->wednesday }}</td>
                        <td>{{ $workoutItem->thursday }}</td>
                        <td>{{ $workoutItem->friday }}</td>
                        <td>{{ $workoutItem->saterday }}</td>
                        <td>{{ $workoutItem->sunday }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        @endforeach
        </ul>
    </div>
@endsection

