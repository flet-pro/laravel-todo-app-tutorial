@extends('layouts.app')
@section('content')
    <div class="form-container">
        <div class="box form-box">
            <form action="{{ route('task.create') }}" method="post" class="form-width">
                @csrf
                <div class="field is-grouped">
                    <div class="control input-control">
                        <input class="input" type="text" name="name" placeholder="新規メンバー 氏名" value="{{ old('name') }}" required>
                    </div>
                    <div class="control btn-control">
                        <button class="button is-primary" type="submit">追加</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
        @foreach($tasks as $task)
            <div class="columns is-centered">
                <div class="column is-four-fifths">
                    <div class="box">
                        <div class="columns is-vcentered">
                            <div class="column is-three-quarters">
                                <p>{{$task->name}}</p>
                            </div>
                            <div class="column">
                                <button class="button is-primary is-fullwidth">完了</button>
                            </div>
                            <div class="column">
                                <button class="button is-info is-fullwidth">編集</button>
                            </div>
                            <div class="column">
                                <button class="button is-danger is-fullwidth" onclick="location.href='{{route('task.delete', ["id" => $task->id])}}'">削除</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
