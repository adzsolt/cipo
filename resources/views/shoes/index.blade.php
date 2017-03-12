@extends('layout')
@section('active','active')

@section('content')


    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="panel panel-default">
            <div class="panel-body">
                {{--    Panel body ...--}}
                <div class="row">

                    @foreach($shoes as $shoe)
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-body">


                                <div class="list-group" align="center">
                                    <h4 class="list-group-item-heading">Cipo id:{{$shoe->id}}</h4>
                                    <a href="#" id="link1" data-toggle="modal" data-target="#myModal"
                                       data-backdrop="true">
                                        <img id="{{$shoe->id}}" src="{{$shoe->filename}}" alt={{$shoe->id}} height="200"
                                             width="200" class="img-responsive">
                                    </a>

                                    <p class="list-group-item-text small">Meret: {{$shoe->size}}</p>

                                    <p class="list-group-item-text small">Szin: {{$shoe->color}}</p>

                                    <p class="list-group-item-text small">Tipus: {{$shoe->type}}</p>

                                    <p class="list-group-item-text small">Ar: {{$shoe->price}}</p>

                                    {{--<p class="list-group-item-text">Tulajdonos: {{$shoe->user->name}}</p>--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="list-group-item-heading">Cipo id:{{$shoe->id}}</h4>

                                        <p class="list-group-item-text small">Meret: {{$shoe->size}}</p>

                                        <p class="list-group-item-text small">Szin: {{$shoe->color}}</p>

                                        <p class="list-group-item-text small">Tipus: {{$shoe->type}}</p>


                                    </div>
                                    <div class="modal-body">
                                        <ul class="list" list-style-type="none">
                                            <li style="display: none"><img src="/images/image1_1.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_2.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_3.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_4.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_5.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_6.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_7.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_8.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_9.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_10.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_11.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_12.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_13.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_14.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_15.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_16.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_17.jpg"/></li>
                                            <li style="display: none"><img src="/images/image1_18.jpg"/></li>
                                        </ul>
                                    </div>
                                    <div class="modal-body" id="showImg">
                                        <!-- here we create the image dynamically -->
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <div id="shoePrice">
                                                    <p class="list-group-item-text "> {{$shoe->price}} RON</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Bezár

                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
                        <script type="text/javascript" src="/images/script.js"></script>
                        <script type="text/javascript"></script>
                        </div>
                    @endforeach

        </div>
    </div>
    </div>



@endsection


@section('data')
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="/index/size" method="post">
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="All" id="">
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="36" id="">
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="37" id="">
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="38" id="">
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="39" id="">
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="submit" name="meret" value="40" id="">
                        </label>
                    </div>
                </form>


            </div>

        </div>

    </div>
@endsection








