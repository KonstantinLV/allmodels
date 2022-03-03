<template>
    <div class="coll_slider">
        <div class="coll_path">
            <a href="#" class="coll_path_text">All 3D Models</a> / <a class="current">Collection: Awesome Crocodiles</a>
        </div>
        <div class="coll_slider_group">
            <div class="coll_slider_icons">
                <img :src="'/images/collection/image 38.jpg'" style="width: 232px;" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 30.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 32.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 34.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/4.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 40.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 37.jpg'" style="width:232px;" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 29.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 31.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 33.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 35.jpg'" alt="icon" class="coll_slider_icon" />
                <img :src="'/images/collection/image 39.jpg'" alt="icon" class="coll_slider_icon" />
            </div>
            <div class="coll_slider_buttons">
                <div class="coll_slider_left"></div>
                <div class="coll_slider_right"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'slider-collection'
}
</script>

<style scoped>
.coll_slider {
    position: relative;
    width: 100%;
    max-height: 400px;
}
.coll_path {
    position: absolute;
    left: 13%;
    top: 9%;
    width: 690px;
    height: 17px;
    display: flex;
    align-items: center;
}
.coll_path_text, .current {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    display: flex;
    align-items: center;
    color: #000000;
    padding: 0 5px;
}
.coll_slider_icons {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}
.coll_slider_icon {
    height: 200px;
}
</style>
