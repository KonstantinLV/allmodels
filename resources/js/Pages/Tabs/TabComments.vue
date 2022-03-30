<template>
    <div class="comments_group">
        <h4 class="tabs_block_text">Sign in to join the discussion</h4>
        <div class="tabs_date">
            <select class="tabs_box_select">
                <option>Sort by date</option>
                <option>Sort by name</option>
            </select>
            <i class="fa fa-angle-down" style="color: black;" aria-hidden="true"></i>
        </div>
        <div class="tabs_group">
            <div class="tabs_comments">
                <div class="tabs_buyer" v-for="(item, index) in toBeShown" :key="index.id">
                    <div class="tabs_buyer_avatar">
                        <img :src="item.img" alt="avatar" class="tabs_buyer_avatar_icon">
                        <div class="tabs_buyer_like">
                            <img :src="'/images/collection/like.svg'" v-on:click="item.like++" alt="like" class="tabs_buyer_like_icon">
                            <p class="tabs_buyer_number">{{ item.like }}</p>
                            <img :src="'/images/collection/dislike.svg'" v-on:click="item.like--" alt="dlike" class="tabs_buyer_like_icon">
                        </div>
                    </div>
                    <div class="tabs_buyer_block">
                        <div class="tabs_buyer_name">
                            <div class="tabs_firstname_block">
                                <h3 class="tabs_buyer_firstname">{{ item.name }}</h3>
                                <div :class="{tabs_firstname_icon: item.star}"></div>
                            </div>
                            <div class="tabs_data_block">
                                <p class="tabs_buyer_data">{{ item.date }}</p>
                                <img :src="'/images/tools-mini.svg'" alt="dlike" :class="{fab: item.star}">
                            </div>
                        </div>
                        <div class="tabs_buyer_text">
                            <p class="tabs_buyer_text_title">
                                {{ item.description }}
                            </p>
                        </div>
                        <div class="tabs_buyer_reply_block" >
                            <div class="tabs_buyer_reply">
                                <a href="#" class="tabs_buyer_reply_link">Reply</a>
                                <button v-on:click="imageUserId = item.id; isShow = !isShow" v-if="!!item.list" type="submit" class="tabs_reply_button_show">
                                    {{ isShow && imageUserId == item.id ? 'Hide' : 'Show'}} {{item.list.length}} reply
                                    <img :src="'/images/down.svg'" alt="updown" class="tabs_data_icon">
                                </button>
                            </div>
                            <div v-show="isShow && imageUserId == item.id">
                                <div v-for="(reply, index) in item.list" :key="index.id">
                                    <transition name="fade" >
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
                                                            <h3 class="tabs_buyer_firstname">{{reply.nameSeller}}</h3>
                                                            <div :class="{tabs_firstname_icon: reply.starOk}"></div>
                                                            <div :class="{tabs_firstname_icon_zvezda: reply.starSeller }"></div>
                                                            <img :src="'/images/link-name.svg'" alt="link-name" class="tabs_firstname_icon_name">
                                                            <h4 class="tabs_buyer_firstname_link">Layne Staley</h4>
                                                        </div>
                                                        <p class="tabs_buyer_seller_text">{{reply.profiSeller}}</p>
                                                    </div>                                                    
                                                    <div class="tabs_data_block">
                                                        <p class="tabs_buyer_data">{{reply.dateSeller}}</p>
                                                        <img :src="'/images/tools-mini.svg'" alt="dlike" class="tabs_data_icon">
                                                    </div>
                                                </div>
                                                <div class="tabs_buyer_text">
                                                    <p class="tabs_buyer_text_title">
                                                        {{reply.descriptionSeller}}
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
    </div>
</template>

<script>
export default {
    name: 'tab-comments',
    data() {
        return {
            isShow: false,
            imageUserId: null,
            commentList: [
                {
                    id: 1,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 2,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 3,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 4,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 5,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 6,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 7,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 8,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 9,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 10,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 11,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 12,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 13,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 14,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 15,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 16,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 17,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 18,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 19,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 20,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 21,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 22,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 23,
                    img: '/images/avatar-layne.png', 
                    like: 1, 
                    name: 'Layne Staley',
                    star: true,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
                        {
                            idSeller: 1,
                            image: '/images/avatar-devin.png',
                            likeReply: 2,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: true,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        }
                    ]
                },
                {
                    id: 24,
                    img: '/images/avatar-mikael.png', 
                    like: 0, 
                    name: 'Devin Townsend',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                    list: [
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
                        {
                            image: '/images/avatar-devin.png',
                            likeReply: 1,
                            nameSeller: 'Devin Townsend',
                            starOk: true,
                            starSeller: false,
                            dateSeller: '08.09.21',
                            profiSeller: 'Seller',
                            descriptionSeller: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                        },
                    ]
                },
                {
                    id: 25,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
                {
                    id: 26,
                    img: '/images/avatar-kristoffer.png', 
                    like: 0, 
                    name: 'Kristoffer Rygg',
                    star: false,
                    date: '08.09.21',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse officiis eaque numquam minus. Ut impedit illo, veniam voluptates praesentium autem deserunt, nisi officia quisquam incidunt saepe!',
                },
            ],
            currentPage: 1,
        }
    },
    computed: {
        toBeShown() {
            return this.commentList.slice(0, this.currentPage * 10);
        },
        totalPages() {
            return Math.ceil(this.commentList.length / 10);
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
    transition: all 0.9s else;
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
    background: url("/images/a-ok.svg") no-repeat center center;
    width: 20px;
    height: 20px;
    margin-left: 13px;
}
.tabs_firstname_icon_zvezda {
    background: url("/images/zvezda.svg") no-repeat center center;
    width: 20px;
    height: 20px;
    margin-left: 13px;
}
.tabs_firstname_icon_name {
    width: 18px;
    height: 18px;
    margin: 0 13px;
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
.fade-enter-active,
.fade-leave-active {
    transition: opacity .8s easi-in-out;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
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