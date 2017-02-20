@extends('layout')
@section('content')
    <h1>Hozzáadás</h1>
    {{--<form action="/index/add" method="POST" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="number" class="form-control" name="size" id="" placeholder="Meret ...">
            <input type="text" class="form-control" name="color" id="" placeholder="Szin ...">
            <input type="text" class="form-control" name="type" id="" placeholder="Tipus ...">
            <input type="number" class="form-control" name="price" id="" placeholder="Ar ...">
            <input type="number" class="form-control" name="user_id" id="" placeholder="User_id">

        </div>
        <button type="submit" class="btn btn-primary">Hozzáad</button>
    </form>--}}


    {{Form::open(array('url' => '/index/add','files'=>'true'))}}
    <div class="form-group">
        <div class="col-sm-4">
            {{Form::number('size',null,['class'=>'form-control','placeholder'=>"Meret..."])}}
            {{Form::text('color',null,['class'=>'form-control','placeholder'=>"Szín..."])}}
            {{Form::text('type',null,['class'=>'form-control','placeholder'=>"Típus..."])}}
            {{Form::number('price',null,['class'=>'form-control','placeholder'=>"Ár..."])}}
            {{Form::file('filename')}}
            {{Form::submit('Hozzáad')}}
        </div>
    </div>
    {{Form::close()}}

    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <hr>
    <a class="btn btn-default" href="/shoes">Vissza</a>
    @if(Session::has('message'))
        <div class="alert alert-info alert-dismissable">{{Session::get('message')}}</div>
    @endif

@endsection

