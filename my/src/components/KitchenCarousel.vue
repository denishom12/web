<template>
    <div>
        <b-carousel controls indicators>
            <b-carousel-slide v-for="image in images"

                    caption="Новые варианты"
                    :text="image.title"
                    :img-src="image.image"
            ></b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>
    import HTTP from "./http";

    export default {
        name: "KitchenCarousel",
        data() {
            return {
                images:[

                ],
            };
        },
        methods: {

        },
         created(){
             HTTP.get('/kitchen-carousels')
                 .then(response => (this.images = response.data));
         }
    }
</script>

<style>

</style>