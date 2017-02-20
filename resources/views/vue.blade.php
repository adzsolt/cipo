<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>Contents...</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="example">
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
    <task list="{{$shoes}}"></task>
</div>
{{--<div id="example">
    <task list="{{$shoes}}"></task>

</div>--}}
<template id="task-template">
    <div>
        <ul class="list-group">
            <li class="list-group-item" v-for="shoe in list">

                @{{shoe.id}}
                @{{shoe.type}}
                @{{shoe.size}}
                @{{shoe.color}}
                @{{shoe.price}}
            </li>
        </ul>
    </div>
</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.3/vue.js"></script>
<script src="/js/main.js"></script>


</body>
</html>

