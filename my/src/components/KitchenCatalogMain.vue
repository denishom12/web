<template>
    <div>
        <div class="container row3">
            <article class="kitchencatalogmain" v-for="kitchenmain in kitchenmains">
                <h3>{{kitchenmain.title}}</h3>
                <router-link class="nav-link"  :to="{name: 'KitchenOne', params: {id: kitchenmain.id}}">
                    <img v-bind:src="kitchenmain.image" class="img-fluid" style="width: 300px">
                </router-link>
                <p class="description-o" style="font-size: 15px; font-weight: bolder">{{kitchenmain.cost}} ₽</p>

            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";
    export default {
        name: "KitchenCatalogMain",
        props: ["categoryId"],
        data(){
            return{
                kitchenmains:[

                ]
            }
        },
        created(){
            HTTP.get('/kitchen-catalog-mains?categoryId='+this.categoryId)
                .then(response => {
                    this.kitchenmains = response.data;
                })

        }
    }
</script>

<style>

    .row3{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .kitchencatalogmain h3{
        text-align: center;
    }
    .kitchencatalogmain img{
        width: 100%;
        -webkit-filter: none;
        -moz-filter: none;
        -ms-filter: none;
        -o-filter: none;
        filter: none;
    }
    .kitchencatalogmain img:hover{
        cursor: pointer;
        overflow: auto;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
        filter: gray;
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
        transform: scale(0.98);
        transition-duration: 1s;
    }

    .kitchencatalogmain{
        margin: 5px 5px;
        padding: 15px;
        border: 5px white;
    }
    .kitchencatalogmain.description{
        color: black;
        text-align: center;
    }
</style>