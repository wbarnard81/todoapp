@extends('layouts.master') 
@section('content')

<form method="POST" action="{{ route('update', ['id'=>$task->id]) }}" class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input name="task" value="{{ $task->content }}" id="task2" type="text" class="validate">
            <label for="task2">Edit task</label>
        </div>
    </div>
    @include('partials.coworkers')

    <button type="submit" class="waves-effect waves-light btn">Save</button> @csrf
</form>
@endsection