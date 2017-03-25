@extends('layout')
@section('active','active')

@section('content')
    <div class="container-fluid" id="app">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="radio">
                    <label>
                        <input type="radio" name="All" id="All" value="All" v-model="size">
                        All
                    </label>
                    <label>
                        <input type="radio" name="36" id="36" value="36" v-model="size">
                        36
                    </label>
                    <label>
                        <input type="radio" name="37" id="37" value="37" v-model="size">
                        37
                    </label>
                    <label>
                        <input type="radio" name="38" id="38" value="38" v-model="size">
                        38
                    </label>
                    <label>
                        <input type="radio" name="39" id="39" value="39" v-model="size">
                        39
                    </label>
                    <label>
                        <input type="radio" name="40" id="40" value="40" v-model="size">
                        40
                    </label>
                </div>
                <example :shoes="size"></example>


            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>

@endsection


 @section('data')
     {{--  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
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

       </div>--}}
@endsection


