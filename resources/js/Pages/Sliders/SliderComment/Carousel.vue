<template>
  <div class="carousel">
      <slot :currentSlide="currentSlide"/>
      <div class="carousel_navigate">
          <div class="carousel_navigation left">
              <i @click="prevSlide" class="prev tabs_slide_left"></i>
          </div>
          <div class="carousel_navigation right">
              <i @click="nextSlide" class="next tabs_slide_right"></i>
          </div>
      </div>
  </div>
</template>

<script>
import { ref, onMounted } from "vue"

export default {
    name: "Carousel",
    setup() {
        const currentSlide = ref(1);
        const getSlideCount = ref(null);

        const nextSlide = () => {
            if (currentSlide.value === getSlideCount.value) {
                currentSlide = 1;
                return;
            }
            currentSlide.value += 1;
        };

        const prevSlide = () => {
            if (currentSlide.value === 1) {
                currentSlide.value = 1;
                return;
            }
            currentSlide.value -= 1;
        }

        onMounted(() => {
            getSlideCount.value = document.querySelectorAll(".slide").length;
        });

        return { currentSlide, nextSlide, prevSlide, getSlideCount };
    }
}
</script>

<style scoped>
.carousel {
    display: flex;
    justify-content: center;
    align-items: center;
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