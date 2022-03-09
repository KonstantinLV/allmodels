<template>
    <div class="coll_slider">
        <div class="coll_path">
            <a href="#" class="coll_path_text">All 3D Models</a> / <a class="current">Collection: Awesome Crocodiles</a>
        </div>
        <div class="coll_slider_group">
            <transition-group style="display: flex; transition: all 0.9s ease;" name="fade" tag="div">
                <div class="coll_slider_icons" v-for="(img, index) in [currentImg]" :key="index">
                    <div class="coll_slider_circle" v-for="item in img.list" :key="item">
                        <div class="coll_slicer_curcle_image" v-bind:style='"background-image: url(" + item + ")"' ></div>
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
            imageGallery: [{
                userId: 1,
                list: [
                    '/images/collection/1.jpg',
                    '/images/collection/2.jpg',
                    '/images/collection/3.png',
                    '/images/collection/4.jpg',
                    '/images/collection/5.png',
                    '/images/collection/6.png',
                    '/images/collection/7.png',
                    '/images/collection/8.png',
                    '/images/collection/9.png',
                    '/images/collection/10.png',
                    '/images/collection/11.png',
                    '/images/collection/12.png'
                ]
            },
            {
                userId: 2,
                list: [
                    '/images/collection/2.jpg',
                    '/images/collection/4.jpg',
                    '/images/collection/3.png',
                    '/images/collection/1.jpg',
                    '/images/collection/5.png',
                    '/images/collection/6.png',
                    '/images/collection/7.png',
                    '/images/collection/8.png',
                    '/images/collection/9.png',
                    '/images/collection/10.png',
                    '/images/collection/11.png',
                    '/images/collection/12.png'
                ]
            },
            {
                userId: 3,
                list: [
                    '/images/collection/4.jpg',
                    '/images/collection/1.jpg',
                    '/images/collection/3.png',
                    '/images/collection/2.jpg',
                    '/images/collection/5.png',
                    '/images/collection/8.png',
                    '/images/collection/6.png',
                    '/images/collection/10.png',
                    '/images/collection/7.png',
                    '/images/collection/9.png',
                    '/images/collection/12.png',
                    '/images/collection/11.png'
                ]
            }
            ],
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
            return this.imageGallery[Math.abs(this.currentIndex) % this.imageGallery.length];
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
    z-index: 1;
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
    max-height: 400px;
    overflow: hidden;
}
.coll_slider_circle {
    height: 200px;
    width: 355px;
    flex: 1 1 280px;
}
.coll_slicer_curcle_image {
    height: 100%; 
    width: auto; 
    max-width: 100%;
    background-size: cover;
}
</style>
