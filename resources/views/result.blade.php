<style>

    .post-card {
      margin-top: 10px;
      margin-bottom: 10px;
    }


</style>

@extends('layouts.app')

@section('content')
<div class="container">



                <h1>{{$category->title }}</h1>
                <p>{{$category->description }}</p>

<table class="table table-striped">
<thead>
    <tr>
        <th>Status</th>
        <th>Question</th>
        <th>Your Answer</th>
        <th>Correct Answer</th>
    </tr>
</thead>
@foreach ($results as $result)
    <tbody>
        <tr>
            <td>
            @if($result->status == 'Wrong')
                <font color="#ff0000">
                    {{ $result->status }}
                </font>
            @else
                <font color="#0000ff">
                    {{ $result->status }}
                </font>
            @endif
            </td>
            <td>{{ $result->quiz->text }}</td>
            <td>
                @if ($result->ur_answer == 1)
                    {{ $result->quiz->choice1 }}
                @elseif ($result->ur_answer == 2)
                    {{ $result->quiz->choice2 }}
                @elseif ($result->ur_answer == 3)
                    {{ $result->quiz->choice3 }}
                @elseif ($result->ur_answer == 4)
                    {{ $result->quiz->choice4 }}
                @endif
            </td>
            <td>
                @if ($result->quiz->answer == 1)
                    {{ $result->quiz->choice1 }}
                @elseif ($result->quiz->answer == 2)
                    {{ $result->quiz->choice2 }}
                @elseif ($result->quiz->answer == 3)
                    {{ $result->quiz->choice3 }}
                @elseif ($result->quiz->answer == 4)
                    {{ $result->quiz->choice4 }}
                @endif
            </td>
        </tr>
    </tbody>
@endforeach
</table>



</div>
@endsection
