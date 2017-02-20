Vue.component('task', {
    template: '#task-template',

    data: function () {
        return {
            list: []
        };
    },

    created: function () {
        $.getJSON('api/task', function (data) {
            this.list = data;
        }.bind(this));
    }
})
new Vue({
    el: '#example'

});

/*
 Vue.component('task', {
 template: '#task-template',

 props: ['list'],

 computed:  {
 listJson:function(){
 return JSON.parse(this.list);

 }
 }
 })

 new Vue({
 el: '#example'

 });
 */
