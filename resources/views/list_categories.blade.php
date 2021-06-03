<style>

    .post-card {
      margin-top: 20px;
      margin-bottom: 20px;
    }

</style>

@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Categories</h1>

    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-6">
            <div class="card post-card">
                <div class="card-body">
                    <h2>{{ $category->title }} </h2>
                    <h5>{{ $category->description }} </h5>
                    <form align='right' method='POST' action='/categories/lessons/ '>
                        @csrf
                        <button class ='btn btn-primary' type='submit' name="category_id" value="{{ $category->id }}" >Take Quiz</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


