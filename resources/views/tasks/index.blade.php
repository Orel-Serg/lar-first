@extends('layouts.app')

@section('content')

<a href="{{route('tasks.create')}}" class="btn btn-success">Create new task</a>
@if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Текущая задача
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Заголовок таблицы -->
                <thead>
                <th>Task</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Тело таблицы -->
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <!-- Имя задачи -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        <td>
                            <!-- TODO: Кнопка Редактивировать -->
                            <form method="get" action="{{route('tasks.edit', $task->id)}}">
                                {{method_field('get')}}
                                {{csrf_field()}}
                                <button class="btn btn-warning"><i class="fa fa-pencil" style="font-size:14px"></i></button>
                            </form>
                            <!-- TODO: Кнопка Удалить -->
                           <form method="post" action="{{route('tasks.delete', $task->id)}}">
                               {{method_field('delete')}}
                               {{csrf_field()}}

                               <button class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:14px"></i></button>
                           </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection