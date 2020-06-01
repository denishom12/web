<template>
    <div>
        <section>
            <div class="sidebar">
                <router-link class="nav-link active" to="/catalog">Главная</router-link>
                <router-link class="nav-link" to="/">Европейские кухни</router-link>
                <router-link class="nav-link" to="/">Японские кухни</router-link>
                <router-link class="nav-link" to="/">Азиатские кухни</router-link>
                <router-link class="nav-link" to="/">Кухни модерн</router-link>
                <router-link class="nav-link" to="/">Обеденные столы</router-link>
                <router-link class="nav-link" to="/">Стулья</router-link>
                <router-link class="nav-link" to="/">Подвесные полки</router-link>
                <router-link class="nav-link" to="/">Нео-классика</router-link>
                <router-link class="nav-link" to="/">Шкафы</router-link>
                <router-link class="nav-link" to="/">Вытяжки</router-link>
                <router-link class="nav-link" to="/">Аксессуары</router-link>
            </div>

            <!-- Содержимое страницы -->
            <div class="content">
                <section class="piar">
                    <piar-carousel></piar-carousel>
                </section>
                <section class="piar1">
                    <top-variant></top-variant>
                </section>
                <section class="album">
                    <h1>Лидеры продаж</h1>
                    <album></album>
                </section>
                <section class="kitchencatalogmain">
                    <h1 class="otst">Лучшие варианты</h1>
                    <kitchen-catalog-main :category-id="1"></kitchen-catalog-main>
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
    .otst{
        margin-top: 55px;
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