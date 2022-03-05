<template>
    <div class="coll_slider">
        <div class="coll_path">
            <a href="#" class="coll_path_text">All 3D Models</a> / <a class="current">Collection: Awesome Crocodiles</a>
        </div>
        <div class="coll_slider_group">
            <transition-group style="display: flex;" name="fade" tag="div">
                <div class="coll_slider_icons" v-for="img in images" :key="img">
                    <img class="" style="width: 355px; height: 200px;" :src="img.src" alt="image"/>
                    <div >
                        <img class="" style="width: 355px; height: 200px;" :src="img.thumbnail" alt="image"/>
                    </div>
                </div>
            </transition-group>
            <a class="prev" @click="prev" href="#">&#10094;</a>
            <a class="next" @click="next" href="#">&#10095;</a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'slider-collection',
    data() {
        return {
            images: [
                {src: '/images/collection/1.jpg', thumbnail: '/images/collection/7.png'},
                {src: '/images/collection/2.jpg', thumbnail: '/images/collection/8.png'},
                {src: '/images/collection/3.png', thumbnail: '/images/collection/9.png'},
                {src: '/images/collection/4.jpg', thumbnail: '/images/collection/10.png'},
                {src: '/images/collection/5.png', thumbnail: '/images/collection/11.png'},
                {src: '/images/collection/6.png', thumbnail: '/images/collection/12.png'},
            ],
            timer: null,
            currentIndex: 0
        };
    },

    methods: {
        next: function() {
            this.currentIndex += 1;
        },
        prev: function() {
            this.currentIndex -= 1;
        }
    },

    computed: {
        currentImg: function() {
            return this.images[Math.abs(this.currentIndex) % this.images.length];
        }
    }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: all 0.9s ease;
    overflow: hidden;
    visibility: visible;
    position: absolute;
    width: 100%;
    opacity: 1;
}
.fade-enter,
.fade-leave-to {
    visibility: hidden;
    width: 100%;
    opacity: 0;
}
img {
    height: 600px;
    width: 100%;
}
.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.7s ease;
    border-radius: 0 4px 4px 0;
    text-decoration: none;
    user-select: none;
}
.next {
    right: 0;
}
.prev {
    left: 0;
}
.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.9);
}

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
.coll_slider_group {
    position: relative;
    width: 100%;
    max-height: 400px;
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
