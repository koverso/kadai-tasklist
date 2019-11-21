@extends('layouts.app')

@section('content')

    <h1>To Doリスト</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>To Do</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tasks->links('pagination::bootstrap-4') }}
        {!! link_to_route('tasks.create', '新規タスク', [], ['class' => 'btn alert-success mb-3']) !!}

@endsection