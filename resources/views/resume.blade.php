@extends('layout')

@section('content')
    <div class="left">
        <div class="inner">
            @include('objective')

            @include('experience')

            @include('education')
        </div>
    </div>

    <div class="right">
        <div class="inner">
            @include('skills')
        </div>
    </div>
@endsection
