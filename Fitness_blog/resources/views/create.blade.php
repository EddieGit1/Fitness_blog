@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Blog') }}</div>
                    <form method="post" action="home">
                        @csrf
                        <div>
                            <label for="firstname">First Name:</label>
                            <input type="text" name="firstname"/>
                        </div>
                        <div>
                            <label for="blogtitle">Blog Title:</label>
                            <input type="text" name="blogtitle"/>
                        </div><br>
                        <label for="category">Categories</label><br>
                            <input type="checkbox" name="categories" value="Fitness">
                        <label for="category">Fitness</label>
                            <input type="checkbox" name="categories" value="BodyBuilder">
                        <label for="category">Bodybuilder</label><br>
                            <input type="checkbox" name="categories" value="Fat Loss">
                        <label for="category">Fat loss</label>
                            <input type="checkbox" name="categories" value="Gain Muscle">
                        <label for="category">Gain muscle</label><br><br>
                        <label for="blogpost">Blog Post:</label><br>
                            <textarea name="textarea" rows="10" cols="50"></textarea><br>
                        <button type="submit">Add Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
