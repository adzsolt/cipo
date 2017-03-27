<template>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" v-for="item in items">
                <div class="panel panel-default">
                    <div class="panel-heading">Cipő ID:{{item.id}}</div>

                    <div class="panel-body">

                        <div class="list-group" align="center">
                            <h4 class="list-group-item-heading">Cipo id:{{item.id}}</h4>
                            <a href="#" id="link1" data-toggle="modal" data-target="#myModal"
                               data-backdrop="true">
                                <img :id="item.id" :src="item.filename" :alt="item.id" height="200"
                                     width="200" class="img-responsive">
                            </a>

                            <p class="list-group-item-text small">Meret: {{item.size}}</p>

                            <p class="list-group-item-text small">Szin: {{item.color}}</p>

                            <p class="list-group-item-text small">Tipus: {{item.type}}</p>

                            <p class="list-group-item-text small">Ar: {{item.price}}</p>

                        </div>

                    </div>
                </div>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="list-group-item-heading">Cipo id:{{item.id}}</h4>

                            <p class="list-group-item-text small">Meret: {{item.size}}</p>

                            <p class="list-group-item-text small">Szin: {{item.color}}</p>

                            <p class="list-group-item-text small">Tipus: {{item.type}}</p>
                            <p class="list-group-item-text small">Ar: {{item.price}}</p>

                        </div>
                        <!--<div class="modal-body">
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
                        </div>-->

                        <div class="modal-body">
                            <!-- here we create the image dynamically -->
                            <img :id="item.id" :src="item.filename" :alt="item.id" height="200"
                                 width="200" class="img-responsive">
                        </div>

                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div id="shoePrice">
                                        <p class="list-group-item-text "> {{item.price}} RON</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Bezárom
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </div>

</template>


<script>
    export default {

       props:['shoes'],

       data:function(){
                return {
              items:[]
              }
             },
    watch:{
        shoes:function(){
        this.getShoes();
        }
        },



       mounted() {

            console.log('Component ready1.');
        },
         created:function(){
        this.getShoes();
    },


   methods:{
        getShoes:function(){
        this.$http.post('index/size', {"meret": this.shoes}).then(response =>
                  this.items=response.body
                  )
        }

    }

}
</script>
