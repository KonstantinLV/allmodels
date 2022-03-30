<template>
    <div class="review_gallery">
        <p class="review_gallery_image">Image gallery</p>
        <div class="review_group_slider">
            <Carousel v-slot="{ currentSlide }">
                <Slide v-for="(slide, index) in carouselSlides" :key="index">
                    <div class="slide_info" v-show="currentSlide === index + 1">
                        <div class="tabs_foto_slide_items" v-for="item in slide.list" :key="item">
                            <img class="tabs_foto_slide_item" :src="item" alt="img">
                        </div>
                    </div>
                </Slide>
            </Carousel>
        </div>        
    </div>
</template>

<script>
import Carousel from './SliderComment/Carousel.vue'
import Slide from './SliderComment/Slide.vue'

export default {
    name: 'slide-reviews',
    components: {
        Carousel,
        Slide
    },
    setup() {
        const carouselSlides = [ 
            { id: 1, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
            { id: 2, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
            { id: 3, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
            { id: 4, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
            { id: 5, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
        ];
        return { carouselSlides };
    }
}
</script>

<style scoped>
.review_gallery {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.review_gallery_image {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
}
.review_group_slider {
    position: relative;
    width: 100%;
    margin: 20px 0;
}
.slide_info {
    display: flex;
    justify-content: center;
    align-items: center;
}
.tabs_foto_slide_items {
    width: 265px;
    height: 198px;
    margin: 0 20px;
}
.tabs_foto_slide_item {
    height: 100%; 
    width: auto; 
    max-width: 100%;
    object-fit: cover;
}
.tabs_slide_left {
    background: url("/images/left.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 50%;
    left: 0;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    text-decoration: none;
    user-select: none;
    cursor: pointer;
}
.tabs_slide_right {
    background: url("/images/right.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 50%;
    right: 0;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    text-decoration: none;
    user-select: none;
    cursor: pointer;
}
</style>