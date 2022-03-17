<template>
    <div class="tabs_nav_block">
        <ul class="tabs_nav_title">
            <li v-for="tab in tabs" :key="tab" class="tabs_nav_item">
                <a class="tabs_nav_link" :class="{ active: tab === selected }" @click="setTab(tab)"> 
                    {{ tab }}
                </a>
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'tabNav',
    props: {
        tabs: {
            type: Array,
            required: true,
        },
        selected: {
            type: String,
            required: true,
        }
    },
    methods: {
        setTab(tab) {
            this.$emit('selected', tab);
        }
    },
};
</script>

<style scoped>
.tabs_nav_block {
    width: 100%;
    display: flex;
    flex-direction: column;
}
.tabs_nav_title {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 25px;
    padding-top: 40px;
}
.tabs_nav_link {
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
</style>
