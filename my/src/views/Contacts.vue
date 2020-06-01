<template>
    <div class="contacts">
        <h1>Контакты</h1>
        <h2>Адрес нашего офиса</h2>
        <p>308214,<br> г. Белгород<br>
            ул. какая-то, дом какой-то</p>
        <h2 >Телефоны</h2>
        <p>820342344 <br> 325346547 <br>3462546547<br> 456456456345<br></p>
        <h2>Мы в соцсетях</h2>
        <p class="ssilca"><img src="../../public/instagram.png" /> aasfsadfds123@mail.com <br><br>
            <img src="../../public/instagram.png" /> asdwa.vk.com<br><br>
            <img src="../../public/instagram.png" /> asad.od.ru<br><br>
            <img src="../../public/instagram.png" /> fas.fb.com<br><br>
            <img src="../../public/instagram.png" /> sdfs@dasinf<br><br>
            <img src="../../public/instagram.png" /> asdwad<br>
        </p>
        <section>
            <Myfooter></Myfooter>
        </section>
    </div>
</template>

<script>
    import Myfooter from "../components/Myfooter";
    export default {
        name: "Contacts",
        components: {Myfooter}
    }
</script>

<style >
    .contacts{
        background-color: white;
        padding: 10px;
    }
    h1{
        font-size: 45px;
    }
    p{
        color: dimgrey;
    }
    .ssilca img:hover{
        cursor: pointer;
        transform: scale(1.5);
        transition-duration: 1s;
    }
    .ssilca img{
        height: 35px;
        width: 35px;
    }
</style>