<style>

    .post-card {
      margin-top: 10px;
      margin-bottom: 10px;
    }


</style>

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1> Create a Category</h1>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form align='right' method='POST' action='/admin/categories/{{ $categories->id }}/edit'>
                            <div class="row justify-content-center">
                            <Label align='left'>Title
                            <input value='{{$categories->title }}' size="50" type='text' name='title' class='form-control form-control-lg'>
                            </Label>
                            @csrf
                        </div>
                            <Label align='left' >Description
                                <textarea align='center' name="description" cols="62" rows="10">{{ $categories->description}}</textarea>
                                @csrf
                            </label>
                            <br>
                            @method('PATCH')
                            <button class = 'btn btn-primary' type='submit' >Update Category</button>
                        </form>
                    </div>
                </div>
            </div
        </div>
    </div>



</div>
@endsection
