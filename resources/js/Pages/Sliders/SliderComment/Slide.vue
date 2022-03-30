<template>
    <div class="slide">
        <transition name="slide">
            <slot />
        </transition>
    </div>  
</template>

<script>
export default {
    name: "Slide"
}
</script>

<style>
.slide-enter-active,
.slide-leave-active {
    transition: all 0.3s ease;
    overflow: hidden;
    visibility: visible;
}
.slide-enter-from,
.slide-leave-to {
    visibility: hidden;
    opacity: 0;
}

.slide-enter-to,
.slide-leave-from {
    opacity: 1;
}
</style>