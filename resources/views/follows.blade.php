<style>

    .post-card {
      margin-top: 10px;
      margin-bottom: 10px;
    }


</style>

@extends('layouts.app')

@section('content')
@if($follows->isEmpty())
    <div class="row justify-content-center">
        <div align='center' class="col-md-10">
            <h1>No one</h1>
        </div>
    </div>
@endif

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach ($follows as $follow)
                {{-- @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id) --}}

                <div class="card post-card">
                    <div class="car-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h1>{{ $follow->name }}</h1>
                                <a>{{ $follow->nationality }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>



</div>
@endsection
