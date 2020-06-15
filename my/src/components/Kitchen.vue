<template>
    <div>
        <div class="container row">
            <article class="kitchen" v-for="kitchen in kitchens">
                <h3>{{kitchen.title}}</h3>
                <router-link  :to="{name:'About'}">
                    <div class="imgCenter"><img v-bind:src="kitchen.image" class="img-fluid" ></div>
                </router-link>
                <p class="description-o">{{kitchen.opisanie}}</p>

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
        padding: 15px;
        border: 5px white;
        width: 400px;
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
        display: inline;
    }
    .btn:hover{
        cursor: pointer;
    }
    .btn.btn-pay{
        background-color: black;
        color: white;
    }
    .btn.btn-pay:hover{
        background-color: #c8b29a;
        color: black;
    }
    .btn.btn-favorite{
        background-color: black;
        color:white;
    }
    .btn.btn-favorite:hover{
        background-color: #c8b29a;
        color: black;
    }
    .btn-group{
        text-align: center;
        width: 100%;
    }
    .description-o{
        text-align: center;
    }
</style>