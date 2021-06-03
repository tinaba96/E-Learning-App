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
                <form align='right' method='POST' action='/admin/categories/{{ $categories->id }}'>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <Label align='left'>Quiz Text
                        <input size='120' type='text' name='text' class='form-control form-control-lg'>
                        </Label>
                        @csrf
                    </div>
                    <div class="col-md-1">
                    </div>

                    <div class="col-md-5">
                        <Label align='left'>Choice1
                        <input size='30' type='text' name='choice1' class='form-control form-control-lg'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="radio01" name="answer" value="1">
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
                        <input size='30' type='text' name='choice2' class='form-control form-control-lg'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="radio02" name="answer" value="2">
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
                        <input size='30' type='text' name='choice3' class='form-control form-control-lg'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="radio03" name="answer" value="3">
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
                        <input size='30' type='text' name='choice4' class='form-control form-control-lg'>
                        </Label>
                        @csrf
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="radio04" name="answer" value="4">
                            <label class="form-check-label" for="radio04">Answer</label>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <button class = 'btn btn-primary' type='submit' >Create Quiz</button>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>



</div>
@endsection
