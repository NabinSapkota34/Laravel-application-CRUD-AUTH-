@extends('Layout.app')


@section('content')
<div class="container">
    <form action="{{route('saveTodo')}}" method="post">
     @csrf
     <input type="text" name="todo" class="form-control" placeholder="Enter your todo">
     <button type="submit" class="btn btn-primary mt-2 btn-center">Add Todo</button>
    </form><br><br><br>
    <table class="table">
            <thead>

                <tr>
                    <th scope="col">Tasks</th>
                    <th scope="col"> Actions </th>
                </tr>
            </thead>

            <tbody>

                @foreach($list as $value)
                <tr>
                    <td>{{$value->title}}</td>
                    <td>
                        <form action="" method="get">
                            <a href="/edit/{{$value->id}}" class="btn btn-success">Edit</a>
                            <a href="/delete/{{$value->id}}" class="btn btn-success">Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
</div><br><br><br><br><br><br>

<div class="container">
<form action="{{route('logout')}}" method="get">
    <button class="btn btn-danger" type="submit">LogOut</button>
</form>
</div>

@endsection