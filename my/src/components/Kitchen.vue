<template>
    <div>
        <div class="container row">
            <article class="kitchen" v-for="kitchen in kitchens">
                <h3>{{kitchen.title}}</h3>
                <router-link class="nav-link" :to="{name:'About'}">
                <img v-bind:src="kitchen.image" class="img-fluid" style="width: 300px">
                </router-link>
                <p class="description-o">{{kitchen.opisanie}}</p>
                <div class="btn-group">
                    <button class="btn btn-pay">В корзину</button>
                    <button class="btn btn-favorite">В избранное</button>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";
    export default {
        name: "Kitchen",
        data(){
            return{
                kitchens:[

                ]
            }
        },
        created(){
            HTTP.get('/kitchens')
                .then(response => (this.kitchens = response.data));
        }
    }
</script>

<style>
    .row{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .kitchen h3{
        text-align: center;
    }
    .kitchen img{
        width: 100%;
    }
    .kitchen img:hover{
        cursor: pointer;
        transform: scale(1.5);
        transition-duration: 1s;
    }
    .kitchen{
        margin: 5px 5px;
        padding: 15px;
        border: 5px white;
    }
    .kitchen.description{
        color: black;
        text-align: center;
    }
    .btn{
        padding: 7px 12px;
        font-size: 14px;
        border: none;
        border-radius: 4px;
    }
    .btn:hover{
        cursor: pointer;
    }
    .btn.btn-pay{
        background-color: black;
        color: white;
    }
    .btn.btn-pay:hover{
        background-color: white;
        color: black;
    }
    .btn.btn-favorite{
        background-color: black;
        color:white;
    }
    .btn.btn-favorite:hover{
        background-color: white;
        color: black;
    }
    .btn-group{
        text-align: center;
    }
</style>