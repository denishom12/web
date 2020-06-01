<template>
    <div>
        <b-carousel controls indicators>
            <b-carousel-slide v-for="imag in imags"
                              caption=""
                              :img-src="imag.image"
            ></b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>
    import HTTP from "./http";

    export default {
        name: "PiarCarousel",
        data() {
            return {
                imags:[

                ],
            };
        },
        methods: {

        },
        created(){
            HTTP.get('/piars')
                .then(response => (this.imags = response.data));
        }
    }
</script>

<style >

</style>