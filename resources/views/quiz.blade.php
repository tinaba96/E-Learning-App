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
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h1>{{$categories->title }}</h1>
                <p>{{$categories->description }}</p>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-md-10">
        <form align='right' action='/admin/categories/{{ $categories->id }}/quiz/create' method='GET'>
            @csrf
            <button type='submit' class='btn btn-primary' style='background-color:#0e2feb'>New Quiz</button>
        </form
    </div>
</div>

<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Question</th>
        <th>Choices</th>
        <th>Actions</th>
    </tr>
</thead>
@foreach ($quizzes as $quiz)
    <tbody>
        <tr>
            <td>{{ $quiz->id }}</td>
            <td>{{ $quiz->text }}</td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                        @if($quiz->answer == '1')
                        <font color="#ff0000">{{ $quiz->choice1 }}</font>
                        @else
                        {{ $quiz->choice1 }}
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if($quiz->answer == '2')
                        <font color="#ff0000">{{ $quiz->choice2 }}</font>
                        @else
                        {{ $quiz->choice2 }}
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if($quiz->answer == '3')
                        <font color="#ff0000">{{ $quiz->choice3 }}</font>
                        @else
                        {{ $quiz->choice3 }}
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if($quiz->answer == '4')
                        <font color="#ff0000">{{ $quiz->choice4 }}</font>
                        @else
                        {{ $quiz->choice4 }}
                        @endif
                    </div>
                </div>
            </td>
            <td>
                <div class="row">
                    <div class="col-md-2">
                <form action='/admin/categories/{{ $categories->id }}/quiz/{{$quiz->id }}/edit' method='GET'>
                    @csrf
                    <button type='submit' class='btn btn-primary' style='background-color:#046604'>Edit</button>
                </form>
                </div>
                    <div class="col-md-2">
                    <form action='/admin/categories/{{ $categories->id }}/quiz/{{$quiz->id}}/edit' method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-warning' style='background-color:red'>DELETE</button>
                    </div>
                </form>
                </div>
            </td>
        </tr>
    </tbody>
@endforeach
</table>



</div>
@endsection
