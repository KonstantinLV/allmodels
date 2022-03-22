<template>
    <div class="comment_tabs">
        <div id="tabs_block">
            <TabNav :tabs="['Comments', 'BuyersFeedback', 'Reviews', 'Q&A']" :selected="selected" @selected="setSelected">
                    <Tab :isSelected="selected === 'Comments'">
                        <tab-comments></tab-comments>
                    </Tab>
                    <Tab :isSelected="selected === 'BuyersFeedback'">
                        <tab-feedback></tab-feedback>
                    </Tab>
                    <Tab :isSelected="selected === 'Reviews'">
                        <tab-reviews></tab-reviews>
                    </Tab>
                    <Tab :isSelected="selected === 'Q&A'">
                        <TabQA></TabQA>
                    </Tab>
            </TabNav>
        </div>
    </div>
</template>

<script>
import TabNav from './TabNav.vue'
import Tab from './Tab.vue'
import Button from '../../Jetstream/Button.vue'
import TabComments from './TabComments.vue'
import TabFeedback from './TabFeedback.vue'
import TabReviews from './TabReviews.vue'
import TabQA from './TabQA.vue'

export default {
    name: 'tab-page',
    components: {
        TabNav,
        Tab,
        Button,
        TabComments,
        TabFeedback,
        TabReviews,
        TabQA
    },
    data() {
        return {
            selected: 'Comments',
            show: false,
        }
    },
    methods: {
        setSelected(tab) {
            this.selected = tab;
        }
    }
}
</script>

<style scoped>
#tabs_block {
    position: relative;
    width: 1024px;
    min-height: 910px;
    margin: 0 auto;
}
</style>