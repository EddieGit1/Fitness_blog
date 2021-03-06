@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Workout') }}</div>
                    <a href="{{ route('profiles') }}">Profile</a>
                    <a href="{{ route('categories') }}">Categories</a>
                <table class="routine">
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
                    </tr>
                    @foreach($workoutItems as $workoutItem)
                    <tr>
                        <td>{{ $workoutItem->id }}</td>
                        <td>{{ $workoutItem->full_name }}</td>
                        <td>{{ $workoutItem->workout_title }}</td>
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
        </div>
    </div>
</div>
@endsection
