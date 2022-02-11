@extends('layouts.app')

@section('content')

<a href="{{route('tasks.create')}}" class="btn btn-success">Create new task</a>
    <!-- TODO: Текущие задачи -->
@endsection