<template>
    <div class="buyers_feedback_group">
        <div class="buyers_leave">
            <img :src="'/images/like-pink.svg'" alt="like" class="buyers_leave_like_image">
            <p class="buyers_do_text">Do it! Do it Do it!</p>
            <div class="buyers_leave_block">
                <button class="buyers_leave_feedback">Leave Your Feedback</button>
            </div>
            <p class="buyers_really_text">It will really help!</p>
            <img :src="'/images/feedback-pink.svg'" alt="feedback" class="buyers_leave_fon_image">
        </div>
        <div class="tabs_buyer_border">
            <div class="tabs_buyer_avatar">
                <img :src="'/images/ask-foto.jpg'" alt="avatar" class="tabs_buyer_avatar_icon">
                <div class="tabs_buyer_like">
                    <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                    <p class="tabs_buyer_number">0</p>
                    <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                </div>
            </div>
            <div class="tabs_buyer_block">
                <div class="tabs_buyer_name">
                    <div class="tabs_firstname_block">
                        <h3 class="tabs_buyer_firstname">Peter Hayes (you)</h3>
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
                        autem deserunt, nisi officia quisquam incidunt saepe!
                    </p>                                        
                </div>
                <div class="tabs_buyer_icons_block">
                    <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    <img :src="'/images/zvezda-n.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                </div>
                <div class="add_feed_group_items">
                    <div class="add_feed">
                        <img :src="'/images/add-feedback-pink.svg'" alt="add" class="add_feedback_image">
                        <div class="add_feed_group">
                            <button class="add_feedback_file" type="file">
                                <img :src="'/images/add-feedback.svg'" alt="file" class="add_feedback_file_image">
                            </button>
                            <p class="add_feedback_text">Add images to your feedback</p>
                            <p class="add_feedback_title_text">It can be photos of printed object or screenshots of your project involving
                                this item. Anything to showcase the use of it!
                            </p>
                        </div>                    
                    </div>
                </div>                
                <div class="tabs_buyer_reply_block">
                    <div class="tabs_buyer_reply">                        
                        <button v-on:click="show = !show" type="submit" class="tabs_reply_button_show">
                            {{ show ? 'Hide' : 'Show'}} 1 reply
                            <img :src="'/images/down.svg'" alt="updown" class="tabs_data_icon">
                        </button>
                        <a href="#" class="tabs_buyer_reply_link">
                            <img :src="'/images/edit-feedback.svg'" alt="edit" class="tabs_buyer_edit_image">
                        </a>
                    </div>
                </div>                                    
            </div>
        </div>
        <div class="buyers_feedback_block">
            <div class="feedback_checkbox">
                <input class="feedback_checkbox_input" type="checkbox" name="onlyimages" value="Only with images" />
                <label for="onlyimages">Only with images</label>
            </div>
            <div class="tabs_date_feedback">
                <select class="tabs_box_select">
                    <option>Sort by date</option>
                    <option>Sort by name</option>
                </select>
                <i class="fa fa-angle-down" style="color: black;" aria-hidden="true"></i>
            </div>
        </div>                        
        <div class="tabs_comments">
            <div class="tabs_buyer">
                <div class="tabs_buyer_avatar">
                    <img :src="'/images/avatar-josh.jpg'" alt="avatar" class="tabs_buyer_avatar_icon">
                    <div class="tabs_buyer_like">
                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                        <p class="tabs_buyer_number">0</p>
                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                    </div>
                </div>
                <div class="tabs_buyer_block">
                    <div class="tabs_buyer_name">
                        <div class="tabs_firstname_block">
                            <h3 class="tabs_buyer_firstname">Josh Homme</h3>
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
                    <div class="tabs_buyer_icons_block">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-n.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    </div>
                    <div class="tabs_foto_slide">
                        <div class="tabs_foto_slide_items">
                            <img :src="'/images/bf-1.jpg'" alt="foto" class="tabs_foto_slide_item">
                            <img :src="'/images/bf-2.jpg'" alt="foto" class="tabs_foto_slide_item">
                            <img :src="'/images/bf-3.jpg'" alt="foto" class="tabs_foto_slide_item">
                        </div>
                        <a href="" class="tabs_slide_left"></a>
                        <a href="" class="tabs_slide_right"></a>
                    </div>
                    <div class="tabs_buyer_reply_block">
                        <div class="tabs_buyer_reply">
                            <a href="#" class="tabs_buyer_reply_link">Reply</a>
                            <button v-on:click="show = !show" type="submit" class="tabs_reply_button_show">
                                {{ show ? 'Hide' : 'Show'}} 1 reply
                                <img :src="'/images/down.svg'" alt="updown" class="tabs_data_icon">
                            </button>
                        </div>
                        <transition name="fade">
                            <div v-if="show" class="tabs_buyer" style="margin-top: 40px; margin-bottom: 0;">
                                <div class="tabs_buyer_avatar" style="width: 135px;">
                                    <img :src="'/images/avatar-devin.png'" alt="avatar" class="tabs_buyer_avatar_icon">
                                    <div class="tabs_buyer_like">
                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                        <p class="tabs_buyer_number">0</p>
                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                    </div>
                                </div>
                                <div class="tabs_buyer_block">
                                    <div class="tabs_buyer_name">
                                        <div class="tabs_buyer_seller" style="display: flex; flex-direction: column;">
                                            <div class="tabs_firstname_block">
                                                <h3 class="tabs_buyer_firstname">Devin Townsend</h3>
                                                <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                                <img :src="'/images/zvezda.svg'" alt="zvezda" class="tabs_firstname_icon">
                                                <img :src="'/images/link-name.svg'" alt="link-name" class="tabs_firstname_icon">
                                                <h4 class="tabs_buyer_firstname_link">Josh Homme</h4>
                                            </div>
                                            <p class="tabs_buyer_seller_text">Seller</p>
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
                        </transition>
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
                    <div class="tabs_buyer_icons_block">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-n.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
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
    </div>
</template>

<script>
export default {
    name: 'tab-feedback',
    data() {
        return {
            show: false,
        }
    },
};
</script>

<style scoped>
.buyers_leave {
    width: 330px;
    height: 136px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px auto 10px;
    position: relative;
}
.buyers_leave_like_image {
    width: 29px;
    height: 25px;
    position: absolute;
    top: 14px;
    left: 0;
    z-index: 0;
}
.buyers_leave_block {
    position: absolute;
    z-index: 1;
}
.buyers_do_text {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    transform: rotate(8deg);
    position: absolute;
    right: 0;
    top: 10px;
    z-index: 1;
}
.buyers_leave_feedback {
    width: 252px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #6546FF;
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #fff;
    border-radius: 10px;
}
.buyers_really_text {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    transform: rotate(8deg);
    position: absolute;
    left: 40px;
    bottom: 7px;
    z-index: 1;
}
.buyers_leave_fon_image {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 0;
}
.add_feed_group_items {
    position: relative;
    width: 524px;
    height: 200px;
    margin: 35px auto;
}
.add_feed {
    position: absolute;
    width: 524px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
}
.add_feedback_image {
    position: absolute;
    width: 470px;
    height: 230px;
    z-index: 0;
}
.add_feed_group {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    border: 1px dashed #000;
    box-sizing: border-box;
}
.add_feedback_file {
    width: 80px;
    height: 68px;
    border: 2px solid #000;
    box-sizing: border-box;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.add_feedback_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin: 18px 0;
}
.add_feedback_title_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    width: 85%;
    text-align: center;
}
.buyers_feedback_block {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 40px;
    margin: 40px 0 30px;
}
.feedback_checkbox {
    width: 180px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.feedback_checkbox_input {
    width: 20px;
    height: 20px;
    border: 1px solid #000;
    box-sizing: border-box;
}
.feedback_checkbox label {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
    margin-left: 10px;
}
.tabs_date {
    position: relative;
    width: 100%;
    height: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.tabs_date_feedback {
    position: relative;
    width: 120px;
    height: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-left: 35px;
}
.tabs_box_select {
    appearance: none;
    box-shadow: none;
    background-image: none;
    width: 110px;
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
    margin-bottom: 20px;
    justify-content: space-between;
}
.tabs_buyer_border {
    display: flex;
    margin-bottom: 20px;
    justify-content: space-between;
    border-bottom: 1px solid #000;
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
    max-width: 940px;
}
.tabs_buyer_name {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
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
.tabs_buyer_seller_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
    width: 65px;
    height: 22px;
    background: #f6f5f1;
    border-radius: 11px;
    padding-left: 5px;
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
.tabs_buyer_icons_block {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: 20px;
}
.tabs_buyer_icons_item {
    margin-right: 10px;
}
.tabs_foto_slide {
    display: flex;
    width: 100%;
    margin: 22px 0;
    position: relative;
}
.tabs_foto_slide_items {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
}
.tabs_slide_left {
    background: url("/images/left.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 50%;
    left: 0;
}
.tabs_slide_right {
    background: url("/images/right.svg") no-repeat center center;
    width: 13px;
    height: 18px;
    position: absolute;
    top: 50%;
    right: 0;
}
.fade-enter-active {
    transition: all .8s ease;
}
.fade-leave-active {
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
}
.tabs_buyer_reply_block {
    width: 100%;
}
.tabs_buyer_reply {
    width: 100%;
    display: flex;
    height: 20px;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
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
.tabs_buyer_edit_image {
    width: 52px;
    height: 34px;
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
    margin-bottom: 30px;
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