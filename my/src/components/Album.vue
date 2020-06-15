<template>
    <div>
        <div class="container row1">
            <article class="album item1" v-for="image in images">
                <router-link class="nav-link" :to="{name:'About'}">
                    <img v-bind:src="image.image" class="img-fluid" style="width: 500px">
                </router-link>
            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";
    export default {
        name: "Album",
        data(){
            return{
                images:[

                ]
            }
        },
        created(){
            HTTP.get('/albums')
                .then(response => (this.images = response.data));
        }
    }
</script>

<style>
    .row1 {
        display: flex;
        overflow:hidden; /*скроем тень*/
        justify-content: left;
        flex-wrap: nowrap;
    }
    .item1 {
        height:150%;
        flex:20%; /* = flex-basis:20%; */
        transition: flex 300ms ease;
        box-shadow: 0 0 19px 3px #000; margin: 1px; /* красивости тени */
    }
    .item1:hover {
        flex: 0.1 0.1 400px;
        background-size: 100% 100%
    }

</style>