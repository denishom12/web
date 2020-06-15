<template>
    <div>
        <section class="piar piar1">
            <piar-carousel></piar-carousel>
        </section>
        <div class="cont1">
            <h1 class="name">{{kitchen.title}}</h1>
        </div>
        <section>
            <div class="container row10">
                <article class="opisanie">
                    <h1>{{kitchen.opisanie}}</h1>
                </article>
                <article class="izobr">
                    <img v-bind:src="'/'+kitchen.image" style="width: 715px">
                </article>
            </div>
        </section>
        <section>
            <div class="container row12">
                <article>
                    <div class="container row11">
                        <article class="foto">
                            <img v-bind:src="'/'+kitchen.image1" style="width: 250px">
                        </article>
                        <article class="foto">
                            <img v-bind:src="'/'+kitchen.image2" style="width: 250px">
                        </article>
                        <article class="foto">
                            <img v-bind:src="'/'+kitchen.image3" style="width: 250px">
                        </article>
                    </div>
                </article>
                <article class="aboutkitchen">
                    <div class="container row14">
                        <article class="ak">
                            <h1>Дерево: <span class="mintext"> {{kitchen.tree}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Время сборки: <span class="mintext"> {{kitchen.time}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Размер кухни: <span class="mintext"> {{kitchen.razmer}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Мойка: <span class="mintext"> {{kitchen.moika}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Вытяжка: <span class="mintext"> {{kitchen.vit}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Навесная полка 1:<span class="mintext"> {{kitchen.polka1}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Навесная полка 2: <span class="mintext">{{kitchen.polka2}}</span></h1>
                        </article>
                        <article class="ak">
                            <h1>Навесная полка 3:<span class="mintext"> {{kitchen.polka3}}</span></h1>
                        </article>
                        <article class="max">
                            <h2 class="maxtext"> {{kitchen.cost}} ₽.</h2>
                            <router-link class="nav-link" to="/zakaz"><button class="btn btn-top">Сделать заказ</button></router-link>
                        </article>
                    </div>
                </article>
            </div>

        </section>
        <section>
            <Myfooter></Myfooter>
        </section>
    </div>
</template>

<script>
    import HTTP from "./http";
    import PiarCarousel from "./PiarCarousel";
    import Myfooter from "./Myfooter";
    export default {
        name: "KitchenOne",
        components: {
            Myfooter,
            PiarCarousel,
        },
        data(){
            return{
                kitchen:null
            }
        },
        created() {
            let id = this.$route.params.id;
            HTTP.get('/kitchen-catalog-mains/'+ id)
                .then(response => {
                    this.kitchen = response.data;
                })
        }
    }

</script>

<style>
.name{
    position: absolute;
    font-size: 50px;
    top: 50%;
    margin-top: -40px;
    margin-left: 15%;
}

.cont1{
    margin-top: 55px;
    position: relative;
    background-color: #c8b29a;
    height: 155px;
}
.row10{
    margin-top: 55px;
    display: flex;
    flex-direction: row;
    justify-content: right;

}
    .opisanie{
        text-align: center;
        margin-top: 105px;
    }
    .row11{
        margin-top: 55px;
        display: flex;
        flex-direction: column;
        justify-content: right;
    }
    .foto{
        margin-top:10px;
    }
.row12{
    display: flex;
    flex-direction: row;
    justify-content: right;
}
.ak h1{
    font-size: 20px;
}
.ak h2{
    font-size: 55px;
    text-align: center;
}
.row14{
    margin-top: 100px;
    margin-left: 60px;
    display: flex;
    flex-direction: column;
    justify-content: right;
}
.foto:hover{
    cursor: pointer;
    transform: scale(2);
    transition-duration: 1s;
}
.mintext{
    font-size: 15px;
    opacity: 1;
}
.max{
    background-color: #c8b29a ;
    margin-top: 55px;
    text-align: center;
}
.btn.btn-top{
    background-color: black;
    color: white;
}
.btn.btn-top:hover{
    background-color: #c8b29a;
    color: black;
}
</style>