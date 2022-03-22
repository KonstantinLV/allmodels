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

.tabs_buyer_reply {
    width: 200px;
    display: flex;
    height: 20px;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}
.tabs_buyer_text_title {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.tabs_buyer_reply_link {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_reply_button_show {
    display: flex; 
    width: 110px; 
    justify-content: space-between; 
    align-items: center;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_group {
    margin: 30px 0;
}
.tabs_button {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.tabs_button_show {
    width: 178px;
    height: 68px;
    border: 2px solid #000;
    border-radius: 10px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
</style>