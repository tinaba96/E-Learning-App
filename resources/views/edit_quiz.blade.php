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
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h1>Add a Quiz</h1>
                <form align='right' method='POST' action='/admin/categories/{{ $categories->id }}/quiz/{{ $quizzes->id }}/edit'>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <Label align='left'>Quiz Text
                        <input size='120' type='text' name='text' class='form-control form-control-lg' value = '{{ $quizzes->text }} '>
                        </Label>
                        @csrf
                    </div>
                    <div class="col-md-1">
                    </div>

                    <div class="col-md-5">
                        <Label align='left'>Choice1
                        <input size='30' type='text' name='choice1' class='form-control form-control-lg' value='{{ $quizzes->choice1 }}'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            @if($quizzes->answer == '1')
                            <input class="form-check-input" type="radio" id="radio01" name="answer" value="1" checked="checked">
                            @else
                            <input class="form-check-input" type="radio" id="radio01" name="answer" value="1">
                            @endif
                            <label class="form-check-label" for="radio01">Answer</label>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <Label align='left'>Choice2
                        <input size='30' type='text' name='choice2' class='form-control form-control-lg' value=' {{ $quizzes->choice2 }}'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            @if($quizzes->answer == '2')
                            <input class="form-check-input" type="radio" id="radio02" name="answer" value="2" checked="checked">
                            @else
                            <input class="form-check-input" type="radio" id="radio02" name="answer" value="2">
                            @endif
                            <label class="form-check-label" for="radio02">Answer</label>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <Label align='left'>Choice3
                        <input size='30' type='text' name='choice3' class='form-control form-control-lg' value='{{ $quizzes->choice3 }}'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            @if($quizzes->answer == '3')
                            <input class="form-check-input" type="radio" id="radio03" name="answer" value="3" checked="checked">
                            @else
                            <input class="form-check-input" type="radio" id="radio03" name="answer" value="3">
                            @endif
                            <label class="form-check-label" for="radio03">Answer</label>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <Label align='left'>Choice4
                        <input size='30' type='text' name='choice4' class='form-control form-control-lg' value='{{ $quizzes->choice4 }}'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            @if($quizzes->answer == '4')
                            <input class="form-check-input" type="radio" id="radio04" name="answer" value="4" checked="checked">
                            @else
                            <input class="form-check-input" type="radio" id="radio04" name="answer" value="4">
                            @endif
                            <label class="form-check-label" for="radio04">Answer</label>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                @method('PATCH')
                <button class = 'btn btn-primary' type='submit' >Add Quiz</button>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>



</div>
@endsection
