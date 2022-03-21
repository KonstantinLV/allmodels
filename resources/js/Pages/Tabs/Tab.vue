<template>
    <div class="active_tabs_block" v-show="isActive" v-if="isSelected">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'tab',
    props: {
        isSelected: {
            type: Boolean,
        }
    },
    data () {
        return {
            isActive: true
        }
    }
};
</script>

<style scoped>
.active_tabs_block {
    margin: 0 auto;
}
</style>