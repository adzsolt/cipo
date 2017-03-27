<template>
    <div>
        <nav class="navbar navbar-inverse">
            <a class="navbar-brand" href="/">Cipőárúház</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/adding">Hozzáadás(add)</a>
                </li>
                <li>
                    <a href="/adding">Szerkesztes(edit)</a>
                </li>
                <li>
                    <a href="/adding">Törles(delete)</a>
                </li>
            </ul>
        </nav>
    </div>
</template>
<style>

</style>
<script>

    export default{
        data(){
            return{
                msg:'hello vue'
            }
        },

    }
</script>
