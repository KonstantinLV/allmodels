<template>
    <div class="tabs_nav_block">
        <ul class="tabs_nav_title">
            <li v-for="tab in tabs" :key="tab" class="tabs_nav_item">
                <a class="tabs_nav_link" :class='{ "tab_active": (tab === selected) }' @click="setTab(tab)"> 
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
    margin-top: 20px;
    height: 75px;
    width: 100%;
}
.tabs_nav_item {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.tabs_nav_link {
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
li.tabs_nav_item:first-child > .tab_active {
    background: url("/images/active-tab.svg") no-repeat center center;
    width: 100%;
    height: 100%;
    font-family: Montserrat;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
li.tabs_nav_item:nth-child(2) > .tab_active {
    background: url("/images/bf-svg.svg") no-repeat center center;
    width: 100%;
    height: 100%;
    font-family: Montserrat;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
li.tabs_nav_item:nth-child(3) > .tab_active {
    background: url("/images/reviews.svg") no-repeat center center;
    width: 100%;
    height: 100%;
    font-family: Montserrat;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
li.tabs_nav_item:nth-child(4) > .tab_active {
    background: url("/images/q-a.svg") no-repeat center center;
    width: 100%;
    height: 100%;
    font-family: Montserrat;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
.tab_active:before {
    content: "";
    background: url("/images/collection/[.svg") no-repeat center center;
    width: 8px;
    height: 35px;
}
.tab_active:after {
    content: "";
    background: url("/images/collection/].svg") no-repeat center center;
    width: 8px;
    height: 35px;
}
</style>
