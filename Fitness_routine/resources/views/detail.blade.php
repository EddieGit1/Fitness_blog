@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Detail Workout') }}</div>
                    <a href="{{ route('create') }}">Create new Routine</a>
                    <h2>My workout routine</h2>
                    <p>{{ $workoutItem -> full_name }}</p>
                    <p>{{ $workoutItem -> workout_title}}</p>
                    <p>{{ $workoutItem -> category->name}}</p>
                    <p>{{ $workoutItem -> monday}}</p>
                    <p>{{ $workoutItem -> tuesday}}</p>
                    <p>{{ $workoutItem -> wednesday}}</p>
                    <p>{{ $workoutItem -> thursday}}</p>
                    <p>{{ $workoutItem -> friday}}</p>
                    <p>{{ $workoutItem -> saterday}}</p>
                    <p>{{ $workoutItem -> sunday}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
