<template>
    <div>
        <div class="container row4">
            <article class="big">
                <img src="../../public/works1.jpg"/>
            </article>
            <article class="little">
                <h5>Я к вам пишу – чего же боле?<br>
                    Что я могу еще сказать?<br>
                    Теперь, я знаю, в вашей воле<br>
                    Меня презреньем наказать.<br>
                    Но вы, к моей несчастной доле<br>
                   </h5>
            </article>
        </div>
        <div class="container row5">
            <article class="little">
                <h5>Я к вам пишу – чего же боле?<br>
                    Что я могу еще сказать?<br>
                    Теперь, я знаю, в вашей воле<br>
                    Меня презреньем наказать.<br>
                    Но вы, к моей несчастной доле<br>
                </h5>
            </article>
            <article class="big">
                <img src="../../public/works2.jpg"/>
            </article>
        </div>
        <div class="container row6">
            <article class="big">
                <img src="../../public/works1.jpg"/>
            </article>
            <article class="little">
                <h5>Я к вам пишу – чего же боле?<br>
                    Что я могу еще сказать?<br>
                    Теперь, я знаю, в вашей воле<br>
                    Меня презреньем наказать.<br>
                    Но вы, к моей несчастной доле<br>
                </h5>
            </article>
        </div>
        <section class="material">
        <h1>Мы работает только с качественными породами дерева</h1>
            <div class="container row7">
                <article class="dubph">
                    <img class="bliz" src="../../public/dub1.jpg"/>
                </article>
                <article class="dubtxt">
                    <h5>Наши лесорубы валят все, что видят, <br>
                        а наши кухни потом из этого всего делаются.
                        <br>
                        Вот так вот))0)
                    </h5>
                </article>
                <article class="dubph">
                    <img class="bliz" src="../../public/dub2.jpg"/>
                </article>
            </div>
        </section>
        <section class="sborka">
            <h1>Кухни от Kitchen-shop-
                это ручная сборка и
                наивысшее качство</h1>
            <div class="container row8">
                <article class="sborkaph">
                    <img class="bliz" src="../../public/sborka1.jpg"/>
                </article>
                <article class="sborkaph">
                    <img class="bliz" src="../../public/sborka2.jpg"/>
                </article>
                <article class="sborkaph">
                    <img class="bliz" src="../../public/sborka1.jpg"/>
                </article>
            </div>
        </section>
        <section>
            <Myfooter></Myfooter>
        </section>
    </div>
</template>

<script>
    import Myfooter from "../components/Myfooter";
    export default {
        name: "OurWorks",
        components: {Myfooter}
    }
</script>

<style>
    .row4{
        display: flex;
        flex-direction: row;
        justify-content:flex-start;
        background-color: #c8b29a;
    }
    .row5{
        display: flex;
        flex-direction: row;
        justify-content:flex-end;
        margin-top: 5px;

    }
    .row6{
        display: flex;
        flex-direction: row;
        justify-content:flex-start;
        margin-top: 5px;
        background-color: #c8b29a;
    }
    .big{
        flex-grow: 3;
    }
    .little{
        flex-grow: 2;
        flex:none;
        text-align: center;
        margin-top: 18%;
        margin-left: 10px;
        margin-right: 10px;
    }
    img {
        width: 100%;
    }


    .material h1{
        text-align: center;
        color: black;
        margin-top: 55px;
        margin-bottom: 55px;
        font-size: 42px;
    }
    .row7{
        display: flex;
        flex-direction: row;
        justify-content:space-between;
        margin-top: 5px;
    }
    .dubph{
        width: 100%;
    }
    .dubtxt{
        text-align: center;
        flex:none;
        margin-top: 8%;
        margin-right: 10px;
        margin-left: 10px;
    }
    .row8{
        display: flex;
        flex-direction: row;
        justify-content:space-between;
        margin-top: 5px;
    }
    .sborkaph{

    }
    .sborka h1{
        margin-top: 55px;
        margin-bottom: 55px;
        text-align: center;
    }
</style>