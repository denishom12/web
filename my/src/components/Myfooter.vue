<template>
    <div>
        <footer>
            <section>
                <div class="footer-container row">
                    <article class="footer-end">
                        <h1 class="li-footer">
                            Покупателям
                        </h1>
                        <ul>
                            <li>
                                <router-link class="nav-link" to="/">Как сделать заказe</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Как снимают размеры</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Хватит ли места для кухни</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Вопрос-ответ</router-link>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-end">
                        <h1 class="li-footer">
                            Партнерам
                        </h1>
                        <ul>
                            <li>
                                <router-link class="nav-link" to="/">Как начать сотрудничать</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Преимущества</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Партнерская программа</router-link>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-end">
                        <h1 class="li-footer">
                            Компания
                        </h1>
                        <ul>
                            <li>
                                <router-link class="nav-link" to="/">О нас</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Реквизиты</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Контакты</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Наши скидки</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Программы лояльности</router-link>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-end">
                        <h1 class="li-footer">
                            Мы в соцсетях
                        </h1>
                        <ul>
                            <li>
                                <router-link class="nav-link" to="/">Вконтакте</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Одноклассники</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Facebook</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">Instagram</router-link>
                            </li>
                            <li>
                                <router-link class="nav-link" to="/">YouTube</router-link>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </footer>
    </div>
</template>

<script>
    export default {
        name: "Myfooter"
    }
</script>

<style>
    .footer-container.row{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .footer-end{
        margin: 5px;
        padding: 15px;
        border: 5px white;
    }
    .footer-end a{
        color:dimgrey;
        font-size: 15px;
    }
    .li-footer{
        color:#392f26;
        font-size: 20px;
    }
    .footer-end a:hover{
        transition-duration: 1s;
        color:#392f26;
        cursor: pointer;
    }
    footer{
        margin-top: 15px;
        padding: 15px;
        background-color: #c8b29a;
        color: black;
        font-size: 12px;
        text-align: center;
    }
</style>