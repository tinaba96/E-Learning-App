@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3>Page : {{ $quizzes->currentPage() }} / {{ $quizzes->lastPage() }} </h3>
            <div class="card">
                <div class="card-body">

                    @foreach ($quizzes as $quiz)
                        <h1>{{ $quiz->text }}</h1>
                    {{-- <a href="{{ $quizzes->nextPageUrl() }}">next</a> --}}
                        <form align='center' method='POST' action="{{ $quizzes->nextPageUrl() }}">
                            <input type="hidden" name="nextPageUrl" value="{{ $quizzes->nextPageUrl() }}">
                            @if ($quizzes->currentPage() == $quizzes->lastPage())
                                <input type="hidden" name="nextPageUrl" value="end">
                            @endif
                            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                            @csrf
                            {{-- <input type="hidden" name="ur_answer" value=1> --}}
                            <h4><button style="width:100%;height:40px" class ='btn btn-primary' type='submit' name="ur_answer" value=1>{{ $quiz->choice1 }}</button></h4>
                        </form>
                        <form align='center' method='POST' action="{{ $quizzes->nextPageUrl() }}">
                            <input type="hidden" name="nextPageUrl" value="{{ $quizzes->nextPageUrl() }}">
                            @if ($quizzes->currentPage() == $quizzes->lastPage())
                                <input type="hidden" name="nextPageUrl" value="end">
                            @endif
                            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                            @csrf
                            {{-- <input type="hidden" name="ur_answer" value=2> --}}
                            <h4><button style="width:100%;height:40px" class ='btn btn-primary' type='submit' name="ur_answer" value=2>{{ $quiz->choice2 }}</button></h4>
                        </form>
                        <form align='center' method='POST' action="{{ $quizzes->nextPageUrl() }}">
                            <input type="hidden" name="nextPageUrl" value="{{ $quizzes->nextPageUrl() }}">
                            @if ($quizzes->currentPage() == $quizzes->lastPage())
                                <input type="hidden" name="nextPageUrl" value="end">
                            @endif
                            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                            @csrf
                            {{-- <input type="hidden" name="ur_answer" value=3> --}}
                            <h4><button style="width:100%;height:40px" class ='btn btn-primary' type='submit' name="ur_answer" value=3>{{ $quiz->choice3 }}</button></h4>
                        </form>
                        <form align='center' method='POST' action="{{ $quizzes->nextPageUrl() }}">
                            <input type="hidden" name="nextPageUrl" value="{{ $quizzes->nextPageUrl() }}">
                            @if ($quizzes->currentPage() == $quizzes->lastPage())
                                <input type="hidden" name="nextPageUrl" value="end">
                            @endif
                            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                            @csrf
                            {{-- <input type="hidden" name="ur_answer" value=4> --}}
                            <h4><button style="width:100%;height:40px" class ='btn btn-primary' type='submit' name="ur_answer" value=4>{{ $quiz->choice4 }}</button></h4>
                        </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ $quizzes->links() }} --}}
</div>
@endsection

