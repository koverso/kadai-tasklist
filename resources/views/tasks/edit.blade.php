@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', '新しいステータスを入力') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                <div class="form-group">
                    {!! Form::label('content', '新しいタスクを入力') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn alert-success']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection