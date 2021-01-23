@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Workout routine') }}</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                    @endif
                    <form method="post" action="{{ route('update', $workoutItem->id) }}">
                        @csrf
                        @method('PATCH')
                        <div>
                            <label for="full_name">Full Name:</label>
                            <input type="text" name="full_name" value="{{ $workoutItem->full_name }}"/>
                        </div>
                        <div>
                            <label for="workout_title">Workout Title:</label>
                            <input type="text" name="workout_title" value="{{ $workoutItem->workout_title }}"/>
                        </div><br>
                        <select id="category" name="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                             @endforeach
                        </select>
                        <label>Days:</label><br>
                        <label>Monday:</label><br>
                        <textarea name="monday" rows="5" cols="40" required >{{ $workoutItem->monday }}</textarea><br>
                        <label>Tuesday:</label><br>
                        <textarea name="tuesday" rows="5" cols="40" required>{{ $workoutItem->tuesday }}</textarea><br>
                        <label>Wednesday:</label><br>
                        <textarea name="wednesday" rows="5" cols="40" required>{{ $workoutItem->wednesday }}</textarea><br>
                        <label>Thursday:</label><br>
                        <textarea name="thursday" rows="5" cols="40" required>{{ $workoutItem->thursday }}</textarea><br>
                        <label>Friday:</label><br>
                        <textarea name="friday" rows="5" cols="40" required>{{ $workoutItem->friday }}</textarea><br>
                        <label>Saterday:</label><br>
                        <textarea name="saterday" rows="5" cols="40" required>{{ $workoutItem->saterday }}</textarea><br>
                        <label>Sunday:</label><br>
                        <textarea name="sunday" rows="5" cols="40" required>{{ $workoutItem->monday }}</textarea><br>
                        <button type="submit">Add Workout Routine</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
