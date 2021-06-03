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
            @foreach ($users as $user)
                <div class="card post-card">
                    <div class="car-body">
                        <div class="row">
                            <div class="col-md-10">
                                <a href = "{{ url('/users/' . $user->id) }} ">
                                <h1>{{ $user->name }}</h1>
                                </a>
                                <a>{{ $user->nationality }}</a>
                            </div>
                            <div class="d-flex align-items-center">
                                @if (Auth::user()->id != $user->id)
                                    @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
                                    <div align='right' class="ml-auto">
                                        <form action='/users/{{ $user->id }}/unfollow' method='POST'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class='btn btn-warning' style='background-color:red'>Unfollow</button>
                                        </form>
                                    </div>
                                    @else
                                    <div align='right' class="ml-auto" >
                                        <form action='/users/{{ $user->id }}/follow' method='POST'>
                                        @csrf
                                        <button type='submit' class='btn btn-warning' style='background-color:rgb(197, 197, 247)'>Follow</button>
                                        </form>
                                    </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>



</div>
@endsection
