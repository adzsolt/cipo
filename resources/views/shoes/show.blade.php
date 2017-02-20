@extends ('layout')
@section('active1',"active")
@section('content')
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Cipo azonosito {{$shoe->id}}</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">Meret:{{$shoe->size}}</li>
                    <li class="list-group-item">Tipus:{{$shoe->type}}</li>
                    <li class="list-group-item">Szin:{{$shoe->color}}</li>
                    <li class="list-group-item">Ar:{{$shoe->price}}</li>
                    <li class="list-group-item">
                        <a href="/{{$shoe->id}}/edit">{{$shoe->user->name}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/index">Összes</a>
                    </li>
                </ul>
                <form action="/{{$shoe->id}}" method="POST" class="form-inline">
                    {{method_field('DELETE')}}
                    <div align="center">
                    <button type="submit" class="btn btn-danger">Torol</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@stop