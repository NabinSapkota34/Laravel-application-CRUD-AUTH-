@extends('Layout.app')


@section('content')

<div class="container">
<form action="{{route('updateTodo')}}" method="post">
         @csrf
        <input type="text" class="form-control" name="todo" value='{{$data->title}}'>
        <input type="hidden" name="id" value={{$data->id}}>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>

@endsection