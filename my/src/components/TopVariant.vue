<template>
    <div>
        <div class="container row">
            <article class="topvariant item" v-for="imag in imags">
                <router-link class="nav-link" :to="{name:'About'}">
                    <img v-bind:src="imag.image" class="img-fluid" style="width: 500px">
                </router-link>
            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";

    export default {
        name: "TopVariant",
        data() {
            return {
                imags:[

                ],
            };
        },
        methods: {

        },
        created(){
            HTTP.get('/top-variants')
                .then(response => (this.imags = response.data));
        }
    }
</script>

<style>
    .row{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        flex-wrap: wrap;
        max-width: 700px; /* макс ширина */
        margin: 0 auto; /* выровняем по центру */
    }
    .topvariant h3{
        text-align: center;
    }
    .topvariant img{
        width: 100%;
    }
    .topvariant img:hover{
        cursor: pointer;
        transform: scale(1.1);
        transition-duration: 1s;
    }
    .topvariant{
        margin: 5px 5px;
        padding: 15px;
        border: 5px white;
    }
    .item{
        flex:1 1 calc(33.33% - 30px); /* отнимем margin и скажем растягиваться */
        margin:5px;
        box-sizing:border-box; /* чтобы внутренний отступ не влиял когда там будет текст... */
        min-width:170px; /* мин. ширина блока, чтобы переносились на другой ряд */
        padding:0px 0px;
        font-size:400%;
        text-align:center;
    }

</style>