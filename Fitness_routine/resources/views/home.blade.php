@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yours Workout') }}</div>
                    <a href="{{ route('create') }}">Create new Routine</a>
                <table>
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
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($workoutItems as $workoutItem)
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
                        <td><a href="{{ route('edit',$workoutItem->id)}}">Edit</a></td>
                        <td>
                            <form method="get" action="{{ route('destroy', $workoutItem->id) }}">
                               @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
