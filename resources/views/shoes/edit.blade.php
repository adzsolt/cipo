@extends('layout')
@section('content')
    <h1>Edit</h1>
    <form action="/{{$shoe->id}}" method="POST" class="form-inline">
        {{method_field('PATCH')}}
        <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="number" class="form-control" name="size" id="" placeholder="Meret ...">
            <input type="text" class="form-control" name="color" id="" placeholder="Szin ...">
            <input type="text" class="form-control" name="type" id="" placeholder="Tipus ...">
            <input type="number" class="form-control" name="price" id="" placeholder="Ar ...">
            <input type="number" class="form-control" name="user_id" id="" placeholder="User_id">
        </div>
        <button type="submit" class="btn btn-primary">Valtoztat</button>
    </form>

@endsection