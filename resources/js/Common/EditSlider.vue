<template>
    <div class="coll_slider">
        <div class="coll_slider_group">
            <transition-group style="display: flex; transition: all 0.9s ease;" name="fade" tag="div">
                <div class="coll_slider_icons" v-for="(img, index) in [currentImg]" :key="index">
                    <div class="coll_slider_two_block">
                        <div class="coll_slider_circle" v-for="item in img.list" :key="item">
                            <div class="coll_slicer_curcle_image" v-bind:style='"background-image: url(" + item + ")"' ></div>
                        </div>
                    </div>
                    <div class="coll_slider_two_block">
                        <div class="coll_slider_circle" v-for="item in img.list.slice().reverse()" :key="item">
                            <div class="coll_slicer_curcle_image" v-bind:style='"background-image: url(" + item + ")"' ></div>
                        </div>
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
    name: 'edit-slider',
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
                ]
            },
            {
                userId: 2,
                list: [
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
                ]
            }
            ],
            currentIndex: 0,
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
    top: 25%;
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
    max-height: 120px;
}
.coll_slider_group {
    position: relative;
    width: 100%;
    max-height: 120px;
}
.coll_slider_icons {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-height: 120px;
    overflow: hidden;
    width: 100%;
}
.coll_slider_two_block {
    display: flex;
}
.coll_slider_circle {
    height: 60px;
    width: 355px;
}
.coll_slicer_curcle_image {
    height: 100%; 
    width: auto; 
    max-width: 100%;
    background-size: cover;
}
</style>