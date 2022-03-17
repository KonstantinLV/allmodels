<template>
    <div class="comment_tabs">
        <div id="tabs_block">
            <TabNav :tabs="['Comments', 'BuyersFeedback', 'Reviews', 'Q&A']" :selected="selected" @selected="setSelected">
                <h4 class="tabs_block_text">Sign in to join the discussion</h4>
                <div class="tabs_date">
                    <select class="tabs_box_select">
                        <option>Sort by date</option>
                        <option>Sort by name</option>
                    </select>
                    <i class="fa fa-angle-down" style="color: black;" aria-hidden="true"></i>
                </div>
                <div class="tabs_group">
                    <Tab :isSelected="selected === 'Comments'">
                        <div class="tabs_comments">
                            <div class="tabs_buyer">
                                <div class="tabs_buyer_avatar">
                                    <img :src="'/images/avatar-layne.png'" alt="avatar" class="tabs_buyer_avatar_icon">
                                    <div class="tabs_buyer_like">
                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                        <p class="tabs_buyer_number">0</p>
                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                    </div>
                                </div>
                                <div class="tabs_buyer_block">
                                    <div class="tabs_buyer_name">
                                        <div class="tabs_firstname_block">
                                            <h3 class="tabs_buyer_firstname">Layne Staley</h3>
                                            <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                        </div>
                                        <div class="tabs_data_block">
                                            <p class="tabs_buyer_data">08.09.21</p>
                                            <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                        </div>
                                    </div>
                                    <div class="tabs_buyer_text">
                                        <p class="tabs_buyer_text_title">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                            officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium 
                                            autem deserunt, nisi officia quisquam incidunt saepe! Libero?
                                        </p>
                                    </div>
                                    <div class="tabs_buyer_reply_block">
                                        <div class="tabs_buyer_reply">
                                            <a href="#" class="tabs_buyer_reply_link">Reply</a>
                                            <a href="#" class="tabs_buyer_reply_link">Hide 1 reply
                                                <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                            </a>
                                        </div>
                                        <div class="tabs_buyer">
                                            <div class="tabs_buyer_avatar">
                                                <img :src="'/images/avatar-devin.png'" alt="avatar" class="tabs_buyer_avatar_icon">
                                                <div class="tabs_buyer_like">
                                                    <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                    <p class="tabs_buyer_number">0</p>
                                                    <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                                </div>
                                            </div>
                                            <div class="tabs_buyer_block">
                                                <div class="tabs_buyer_name">
                                                    <div class="tabs_firstname_block">
                                                        <h3 class="tabs_buyer_firstname">Devin Townsend</h3>
                                                        <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                                        <img :src="'/images/zvezda.svg'" alt="zvezda" class="tabs_firstname_icon">
                                                        <img :src="'/images/link-name.svg'" alt="link-name" class="tabs_firstname_icon">
                                                        <h4 class="tabs_buyer_firstname_link">Layne Staley</h4>
                                                    </div>
                                                    <div class="tabs_data_block">
                                                        <p class="tabs_buyer_data">08.09.21</p>
                                                        <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                                    </div>
                                                </div>
                                                <div class="tabs_buyer_text">
                                                    <p class="tabs_buyer_text_title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                        officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium 
                                                        autem deserunt, nisi officia quisquam incidunt saepe! Libero?
                                                    </p>
                                                </div>
                                                <div class="tabs_buyer_reply">
                                                    <a href="#" class="tabs_buyer_reply_link">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="tabs_buyer">
                                <div class="tabs_buyer_avatar">
                                    <img :src="'/images/avatar-mikael.png'" alt="avatar" class="tabs_buyer_avatar_icon">
                                    <div class="tabs_buyer_like">
                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                        <p class="tabs_buyer_number">0</p>
                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                    </div>
                                </div>
                                <div class="tabs_buyer_block">
                                    <div class="tabs_buyer_name">
                                        <div class="tabs_firstname_block">
                                            <h3 class="tabs_buyer_firstname">Mikael Akerfeldt</h3>
                                            <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                        </div>
                                        <div class="tabs_data_block">
                                            <p class="tabs_buyer_data">08.09.21</p>
                                            <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                        </div>
                                    </div>
                                    <div class="tabs_buyer_text">
                                        <p class="tabs_buyer_text_title">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                            officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium 
                                            autem deserunt, nisi officia quisquam incidunt saepe! Libero?
                                        </p>
                                    </div>
                                    <div class="tabs_buyer_reply">
                                        <a href="#" class="tabs_buyer_reply_link">Reply</a>
                                        <a href="#" class="tabs_buyer_reply_link">Show 5 replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_buyer">
                                <div class="tabs_buyer_avatar">
                                    <img :src="'/images/avatar-kristoffer.png'" alt="avatar" class="tabs_buyer_avatar_icon">
                                    <div class="tabs_buyer_like">
                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                        <p class="tabs_buyer_number">0</p>
                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                    </div>
                                </div>
                                <div class="tabs_buyer_block">
                                    <div class="tabs_buyer_name">
                                        <div class="tabs_firstname_block">
                                            <h3 class="tabs_buyer_firstname">Kristoffer Rygg</h3>
                                            <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                        </div>
                                        <div class="tabs_data_block">
                                            <p class="tabs_buyer_data">08.09.21</p>
                                            <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                        </div>
                                    </div>
                                    <div class="tabs_buyer_text">
                                        <p class="tabs_buyer_text_title">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                            officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium 
                                            autem deserunt, nisi officia quisquam incidunt saepe! Libero?
                                        </p>
                                    </div>
                                    <div class="tabs_buyer_reply">
                                        <a href="#" class="tabs_buyer_reply_link">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_button">
                                <button type="submit" class="tabs_button_show">Show 10 more</button>
                            </div>
                        </div>
                    </Tab>
                    <Tab :isSelected="selected === 'BuyersFeedback'">
                        <h2>BuyersFeedback</h2>
                    </Tab>
                    <Tab :isSelected="selected === 'Reviews'">
                        <h2>Reviews</h2>
                    </Tab>
                    <Tab :isSelected="selected === 'Q&A'">
                        <h2>Q&A</h2>
                    </Tab>
                </div>
            </TabNav>
        </div>
    </div>
</template>

<script>
import TabNav from './TabNav.vue'
import Tab from './Tab.vue'

export default {
    name: 'tab-page',
    components: {
        TabNav,
        Tab
    },
    data() {
        return {
            selected: 'Home'
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
.tabs_block_text {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    margin: 73px 0 43px;
    text-align: center;
}
.tabs_date {
    position: relative;
    width: 100%;
    height: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.tabs_box_select {
    appearance: none;
    box-shadow: none;
    background-image: none;
    width: 95px;
    border: 0;
    padding: 0;
    position: relative;
}
.tabs_box_select option {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_buyer {
    display: flex;
    margin-bottom: 60px;
}
.tabs_buyer_avatar {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 60px;
    height: 90px;
}
.tabs_buyer_avatar_icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.tabs_buyer_like {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}
.tabs_buyer_like_icon {
    width: 17px;
    height: 14px;
}
.tabs_buyer_number {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_buyer_block {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 19px;
    max-width: 830px;
}
.tabs_buyer_name {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 23px;
}
.tabs_firstname_block {
    min-width: 160px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.tabs_buyer_firstname {
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.tabs_buyer_firstname_link {
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_firstname_icon {
    width: 18px;
    height: 18px;
    margin-left: 13px;
}
.tabs_data_block {
    min-width: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.tabs_buyer_data {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.tabs_buyer_text {
    height: 102px;
}
.tabs_buyer_reply {
    width: 200px;
    display: flex;
    height: 20px;
    justify-content: space-between;
    align-items: center;
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