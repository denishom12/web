<template>
    <div>
        <section>
            <div class="sidebar">
                <router-link class="nav-link active" to="/catalog">Главная</router-link>
                <router-link class="nav-link" to="/catalog-euro">Европейские кухни</router-link>
                <router-link class="nav-link" to="/catalog-jap">Японские кухни</router-link>
                <router-link class="nav-link" to="/catalog-azia">Азиатские кухни</router-link>
                <router-link class="nav-link" to="/catalog-modern">Кухни модерн</router-link>
                <router-link class="nav-link" to="/catalog-table">Обеденные столы</router-link>
                <router-link class="nav-link" to="/catalog-chair">Стулья</router-link>
                <router-link class="nav-link" to="/catalog-polki">Подвесные полки</router-link>
                <router-link class="nav-link" to="/catalog-neo">Нео-классика</router-link>
            </div>

            <!-- Содержимое страницы -->
            <div class="content">
                <section class="piar">
                    <piar-carousel></piar-carousel>
                </section>
                <section class="kitchencatalogmain">
                    <div class="cont">
                        <h1 class="otstup">Нео-классика</h1>
                    </div>
                    <kitchen-catalog-main :category-id="9"></kitchen-catalog-main>
                </section>
                <section>
                    <myfooter></myfooter>
                </section>
            </div>
        </section>

    </div>
</template>

<script>
    import PiarCarousel from "../components/PiarCarousel";
    import TopVariant from "../components/TopVariant";
    import Album from "../components/Album";
    import KitchenCatalogMain from "../components/KitchenCatalogMain";
    import Myfooter from "../components/Myfooter";
    export default {
        name: "Catalog",
        components: {
            Myfooter,
            KitchenCatalogMain,
            Album,
            TopVariant,
            PiarCarousel
        }
    }

</script>

<style>
    .cont{
        margin-top: 55px;
        position: relative;
        background-color: gray;
        height: 155px;
    }
    .otstup{
        position: absolute;
        font-size: 50px;
        top: 30%;
        color: black;
        margin-bottom: 55px;
        background-color: gray;
        opacity: 0.9;
        margin-left: 20px;
    }
    .album{
        margin-top: 35px;
    }
    .album h1{
        margin-top: 55px;
    }
    .piar {
        margin-top: 15px;
    }
    .piar1 {
        margin-top: 55px;
    }
    .kitchencatalogmain{
        margin-top: 55px;
    }
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #c8b29a;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    /* Сайдбар ссылки */
    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    /* Активная/текущая ссылка */
    .sidebar a.active {
        background-color: grey;
        color: white;
    }

    /* Ссылки при наведении мыши */
    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    /* Содержание страницы. Значение свойства margin-left должно соответствовать значению свойства width боковой панели */
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
    }

    /* На экранах размером менее 400 пикселей панель отображать вертикально, а не горизонтально */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }

</style>