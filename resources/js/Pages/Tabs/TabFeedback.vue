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
            <div class="tabs_buyer" v-for="(feed, index) in toBeShown" :key="index.id">
                <div class="tabs_buyer_avatar">
                    <img :src="feed.iconFeedback" alt="avatar" class="tabs_buyer_avatar_icon">
                    <div class="tabs_buyer_like">
                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                        <p class="tabs_buyer_number">{{ feed.likeAvatar }}</p>
                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                    </div>
                </div>
                <div class="tabs_buyer_block">
                    <div class="tabs_buyer_name">
                        <div class="tabs_firstname_block">
                            <h3 class="tabs_buyer_firstname">{{ feed.nameFeedback }}</h3>
                        </div>
                        <div class="tabs_data_block">
                            <p class="tabs_buyer_data">{{ feed.feedbackDate }}</p>
                            <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                        </div>
                    </div>
                    <div class="tabs_buyer_text">
                        <p class="tabs_buyer_text_title">{{ feed.descriptionFeedback }}</p>                                     
                    </div>
                    <div class="tabs_buyer_icons_block">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-active.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                        <img :src="'/images/zvezda-n.svg'" style="width: 19px; height: 18px;" alt="zvezda" class="tabs_buyer_icons_item">
                    </div>
                    <slide-review v-if="feed.imageFeedback != 0"></slide-review>
                    <div class="add_feed_group_items" v-else>
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
                        <div class="tabs_buyer_reply_feedback">
                            <a href="#" class="tabs_buyer_reply_link">Reply</a>
                            <button v-on:click="feedbackId = feed.id; showFeedback = !showFeedback" v-if="feed.listFeedback != 0" type="submit" class="tabs_reply_button_show">
                                {{ showFeedback && feedbackId == feed.id ? 'Hide' : 'Show'}} {{feed.listFeedback.length}} reply
                                <img :src="'/images/down.svg'" alt="updown" class="tabs_data_icon">
                            </button>
                            <a href="#" class="tabs_buyer_edit_link" v-if="feed.imageFeedback == 0">
                                <img :src="'/images/edit-feedback.svg'" alt="edit" class="tabs_buyer_edit_image">
                            </a>
                        </div>
                        <div v-show="showFeedback && feedbackId == feed.id">
                            <div v-for="(reply, index) in feed.listFeedback" :key="index.id">
                                <transition name="fade">                            
                                    <div class="tabs_buyer" style="margin-top: 40px; margin-bottom: 0;">
                                        <div class="tabs_buyer_avatar" style="width: 135px;">
                                            <img :src="reply.image" alt="avatar" class="tabs_buyer_avatar_icon">
                                            <div class="tabs_buyer_like">
                                                <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                <p class="tabs_buyer_number">{{reply.likeReply}}</p>
                                                <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                            </div>
                                        </div>
                                        <div class="tabs_buyer_block">
                                            <div class="tabs_buyer_name">
                                                <div class="tabs_buyer_seller" style="display: flex; flex-direction: column;">
                                                    <div class="tabs_firstname_block">
                                                        <h3 class="tabs_buyer_firstname">{{ reply.nameSeller }}</h3>
                                                        <img :src="'/images/a-ok.svg'" alt="a-ok" class="tabs_firstname_icon">
                                                        <img :src="'/images/zvezda.svg'" alt="zvezda" class="tabs_firstname_icon">
                                                        <img :src="'/images/link-name.svg'" alt="link-name" class="tabs_firstname_icon">
                                                        <h4 class="tabs_buyer_firstname_link">Josh Homme</h4>
                                                    </div>
                                                    <p class="tabs_buyer_seller_text">{{ reply.profiSeller }}</p>
                                                </div>                                                    
                                                <div class="tabs_data_block">
                                                    <p class="tabs_buyer_data">{{ reply.dateSeller }}</p>
                                                    <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                                </div>
                                            </div>
                                            <div class="tabs_buyer_text">
                                                <p class="tabs_buyer_text_title">{{ reply.descriptionSeller }}
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
                </div>
            </div>
            <div class="tabs_button">
                <button type="submit" @click="nextPage" v-if="currentPage != totalPages" class="tabs_button_show">Show 10 more</button>
                <button type="submit" @click="prevPage" v-else-if="currentPage != 1" class="tabs_button_show">Show 10 less</button>
                <p v-else></p>
            </div>
        </div>
    </div>
</template>

<script>
import SlideReview from '../Sliders/SlideReview.vue'

export default {
    name: 'tab-feedback',
    components: { SlideReview },
    data() {
        return {
            showFeedback: false,
            feedbackId: null,
            feedbackList: [
                {
                    id: 1,
                    iconFeedback: '/images/ask-foto.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Peter Hayes (you)',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 2,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 3,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 4,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 5,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 6,
                    iconFeedback: '/images/ask-foto.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Peter Hayes (you)',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 7,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 8,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 9,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 10,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 11,
                    iconFeedback: '/images/ask-foto.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Peter Hayes (you)',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 12,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 13,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 14,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 15,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 16,
                    iconFeedback: '/images/ask-foto.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Peter Hayes (you)',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 17,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 18,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 19,
                    iconFeedback: '/images/avatar-josh.jpg',
                    likeAvatar: 0,
                    nameFeedback: 'Josh Homme',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [ '/images/bf-1.jpg', '/images/bf-2.jpg', '/images/bf-3.jpg'],
                    listFeedback: [
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: false,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 20,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
                {
                    id: 21,
                    iconFeedback: '/images/avatar-kristoffer.png',
                    likeAvatar: 0,
                    nameFeedback: 'Kristoffer Rygg',
                    feedbackDate: '08.09.21',
                    descriptionFeedback: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe! Libero?',
                    starFeedback: true,
                    imageFeedback: [],
                    listFeedback: []
                },
            ],
            currentPage: 1,
        }
    },
    computed: {
        toBeShown() {
            return this.feedbackList.slice(0, this.currentPage * 10);
        },
        totalPages() {
            return Math.ceil(this.feedbackList.length / 10);
        }
    },
    methods: {
        nextPage() {
            if(this.currentPage < this.totalPages) {
                this.currentPage++
            }
        },
        prevPage() {
            this.currentPage = this.currentPage - 1 || 1;
        }
    }
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
.tabs_buyer_reply_edit {
    width: 100%;
    display: flex;
    height: 20px;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
}
.tabs_buyer_reply_feedback {
    width: 100%;
    display: flex;
    height: 20px;
    justify-content: flex-start;
    align-items: center;
    margin: 20px 0;
    position: relative;
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
.tabs_buyer_edit_link {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    position: absolute;
    right: 0;
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
    margin-left: 20px;
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