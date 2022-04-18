@extends('layout.app')
@section('content')
<body>
    @foreach ($tasks as $task)
    <form action="{{url('update_insert')}}" method="POST">
        @csrf
        <center>
        <label>Enter Another Name</label>
        <br>
        <input type="text" name="num">
        <br>
        <input type="submit" name="submit" value="Update">
        </center>
    </form>
    @endforeach
</body>

