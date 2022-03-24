<template>
    <div class="review_gallery">
        <p class="review_gallery_image">Image gallery</p>
        <div class="review_group_slider">
            <transition-group :style="{ 'margin-left': '-' + (100 * currentImage) + '%'}" class="review_slider_margin" name="fade" tag="div">
                <div class="tabs_foto_slide" v-for="(img, index) in images" :key="index">                    
                    <div class="tabs_foto_slide_items" v-for="item in img.list" :key="item">
                        <div class="tabs_foto_slide_item" v-bind:style='"background-image: url(" + item + ")"'></div>
                    </div>
                </div>
            </transition-group>
            <a @click="prev" href="#" class="prev tabs_slide_left"></a>
            <a @click="next" href="#" class="next tabs_slide_right"></a>
        </div>        
    </div>
</template>

<script>
export default {
    name: 'slide-reviews',
    data() {
        return {
            show: false,
            images: [
                { id: 1, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
                { id: 2, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
                { id: 3, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
                { id: 4, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
                { id: 5, list: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg' ]},
            ],
            currentImage: 0
        }
    },
    methods: {
        next: function() {
            if (this.currentImage >= this.images.length -1) {
                this.currentImage = 0;
            } else {
                this.currentImage += 1;
            }
        },
        prev: function() {
            if (this.currentImage > 0) {
                this.currentImage -=1;
            }
        }
    }
}
</script>

<style scoped>
.review_gallery {
    position: relative;
    width: 100%;
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
}
.review_slider_margin {
    display: flex;
    overflow: hidden;
    transform: all 0.9s ease;
}
.tabs_foto_slide {
    width: 100%;
    margin: 15px 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.tabs_slider_group {
    display: flex;
    align-items: center;
    justify-content: center;
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
    background-size: cover;
}
.tabs_slide_left {
    background: url("/images/left.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 55%;
    left: 0;
    transition: 0.7s ease;
    text-decoration: none;
    user-select: none;
}
.tabs_slide_right {
    background: url("/images/right.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 55%;
    right: 0;
    transition: 0.7s ease;
    text-decoration: none;
    user-select: none;
}
</style>