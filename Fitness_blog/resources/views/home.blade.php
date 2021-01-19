@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yours blogs') }}</div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Blog Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($blogItems as $blogItem)
                    <tr>
                        <td>{{ $blogItem->id }}</td>
                        <td>{{ $blogItem->firstname }}</td>
                        <td>{{ $blogItem->blogtitle }}</td>
                        <td>{{ $blogItem->categories }}</td>
                        <td>{{ $blogItem->textarea }}</td>
                    </tr>
                    @endforeach
                </table>


            </div>
        </div>
    </div>
</div>
@endsection
