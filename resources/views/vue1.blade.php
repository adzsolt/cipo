<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div id="root">
    <div class="radio">
        <label>
            <input type="radio" name="red" v-model="colors" id="inputID" value="red">
            Red
        </label>
    </div>
    <div class="radio1">
        <label>
            <input type="radio" name="brown" v-model="colors" id="inputID1" value="brown">
            Brown
        </label>
    </div>
    <div class="radio2">
        <label>
            <input type="radio" name="yellov" v-model="colors" id="inputID2" value="yellow">
            Yellov
        </label>
    </div>

    <div class="col-sm-4">
        <h1 v-on:click="changeColor">Alma</h1>
    </div>

    <div class="col-sm-4">
        <div :style="styleObject" class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                Panel body ...
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.3/vue.js"></script>

<script>
    var vm = new Vue({
        el: '#root',
        data: {
            colors: ''
        },
        computed: {
            styleObject: function () {
                return 'background-color:' + this.colors;
            }
        },
        methods: {
            changeColor: function () {
                this.colors='yellow'
            }
        }
    })
</script>


</body>
</html>
