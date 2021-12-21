@extends('layouts.app')
@section('content')
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">{{$task['title']}}</h5>
            <p class="card-text">{{$task['description']}}</p>
            <p class="card-text">{{$task['created_at']}}</p>
            <a href="{{route('showTasks')}}" class="btn btn-primary">Вернуться к задачам</a>
        </div>
    </div>
@endsection
