<template>
    <div class="coll_slider">
        <div class="coll_slider_group">
            <transition-group :style="{ 'margin-left': '-' + (100 * currentIndex) + '%'}" class="coll_slider_margin" name="fade" tag="div">
                <div class="coll_slider_icons" v-for="(img, index) in imageGallery" :key="index">
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
    name: 'slider-banner',
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
            timer: null,
            currentIndex: 0,
        };
    },

    mounted: function() {
        this.startSlide();
    },

    methods: {
        startSlide: function() {
            this.timer = setInterval(this.next, 6000);
        },

        next: function() {
            if (this.currentIndex >= this.imageGallery.length -1) {
                this.currentIndex = 0;
            } else {
                this.currentIndex += 1;
            }
        },
        prev: function() {
            if (this.currentIndex > 0) {
                this.currentIndex -=1;
            }
        }
    }
};
</script>

<style scoped>
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
.coll_slider_group {
    position: relative;
    width: 100%;
    max-height: 400px;
}
.coll_slider_margin {
    display: flex;
    overflow: hidden;
    transform: all 0.9s ease;
}
.coll_slider_icons {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-height: 400px;
}
.coll_slider_two_block {
    display: flex;
}
.coll_slider_circle {
    height: 200px;
    width: 355px;
}
.coll_slicer_curcle_image {
    height: 100%; 
    width: auto; 
    max-width: 100%;
    background-size: cover;
}
</style>