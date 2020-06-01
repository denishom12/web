<template>
    <div class="contacts">
        <h1>Контакты</h1>
        <h2>Адрес нашего офиса</h2>
        <p>308214,<br> г. Белгород<br>
            ул. какая-то, дом какой-то</p>
        <h2 >Телефоны</h2>
        <p>820342344 <br> 325346547 <br>3462546547<br> 456456456345<br></p>
        <h2>Мы в соцсетях</h2>
        <p class="ssilca"><img src="../../public/instagram.png" height="35" width="35"/> aasfsadfds123@mail.com <br><br>
            <img src="../../public/instagram.png" height="35" width="35"/> asdwa.vk.com<br><br>
            <img src="../../public/instagram.png" height="35" width="35"/> asad.od.ru<br><br>
            <img src="../../public/instagram.png" height="35" width="35"/> fas.fb.com<br><br>
            <img src="../../public/instagram.png" height="35" width="35"/> sdfs@dasinf<br><br>
            <img src="../../public/instagram.png" height="35" width="35"/> asdwad<br>
        </p>
    </div>
</template>

<script>
    export default {
        name: "Contacts"
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
</style>