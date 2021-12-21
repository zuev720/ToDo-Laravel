@extends('layouts.app')
@section('content')
    <div class="list-group mt-5">
        @foreach($tasks as $key => $value)
            <a href="{{route('showTask', $value['id'])}}"
               class="list-group-item list-group-item-action d-flex justify-content-between" aria-current="true">
                <span>#{{$value['id']}}</span>
                <p class="ms-5 mb-0 flex-grow-1">{{$value['title']}}</p>
                <p class="ms-5 mb-0">{{$value['created_at']}}</p>
            </a>
        @endforeach
    </div>
    <a href="{{route('showForm')}}" class="btn btn-primary mt-5">Добавить задачу</a>
@endsection
