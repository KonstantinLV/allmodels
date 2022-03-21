<template>
    <div class="comment_tabs">
        <div id="tabs_block">
            <TabNav :tabs="['Comments', 'BuyersFeedback', 'Reviews', 'Q&A']" :selected="selected" @selected="setSelected">
                    <Tab :isSelected="selected === 'Comments'">
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
                                                                    <h4 class="tabs_buyer_firstname_link">Layne Staley</h4>
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
                        </div>
                    </Tab>
                    <Tab :isSelected="selected === 'BuyersFeedback'">
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
                    </Tab>
                    <Tab :isSelected="selected === 'Reviews'">
                        <h2>Reviews</h2>
                    </Tab>
                    <Tab :isSelected="selected === 'Q&A'">
                        <div class="q_ask">
                            <img :src="'/images/ask-foto.jpg'" alt="asq" class="q_foto">
                            <div class="q_name">
                                <input class="q_name_text" type="text" name="askQuastion" value="Ask a question..."/>
                            </div>
                        </div>
                        <div class="tabs_date" style="margin-top: 30px; margin-bottom: 20px; width: 100%;">
                            <select class="q_box_select">
                                <option>Sort by answered first</option>
                                <option>Sort by answered second</option>
                            </select>
                            <i class="fa fa-angle-down" style="color: black;" aria-hidden="true"></i>
                        </div>                        
                        <div class="tabs_comments">
                            <div class="tabs_buyer">
                                <div class="q_a_name">
                                    <p class="q_a_name_text">Q:</p>
                                </div>
                                <div class="q_tabs_a_block">
                                    <div class="q_a_block_comment">
                                        <div class="q_a_text">
                                            <p class="tabs_buyer_text_title">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                            </p>
                                            <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                        </div>
                                        <div class="q_a_like">
                                            <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                            <p class="tabs_buyer_number">0</p>
                                            <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                        </div>
                                    </div>
                                    <div class="tabs_comments">
                                        <div class="tabs_buyer">
                                            <div class="q_a_name">
                                                <p class="q_a_name_text">A:</p>
                                            </div>
                                            <div class="tabs_buyer_block">
                                                <div class="q_a_block_comment">
                                                    <div class="q_a_text">
                                                        <p class="a_q_text_title">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                            officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                                        </p>
                                                        <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                                    </div>
                                                    <div class="q_a_like">
                                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                        <p class="tabs_buyer_number">0</p>
                                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                                    </div>
                                                </div>
                                            </div>                                
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="tabs_buyer">
                                <div class="q_a_name">
                                    <p class="q_a_name_text">Q:</p>
                                </div>
                                <div class="q_tabs_a_block">
                                    <div class="q_a_block_comment">
                                        <div class="q_a_text">
                                            <p class="tabs_buyer_text_title">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                            </p>
                                            <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                        </div>
                                        <div class="q_a_like">
                                            <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                            <p class="tabs_buyer_number">0</p>
                                            <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                        </div>
                                    </div>
                                    <div class="tabs_comments">
                                        <div class="tabs_buyer">
                                            <div class="q_a_name">
                                                <p class="q_a_name_text">A:</p>
                                            </div>
                                            <div class="tabs_buyer_block">
                                                <div class="q_a_block_comment">
                                                    <div class="q_a_text">
                                                        <p class="a_q_text_title">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                            officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                                        </p>
                                                        <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                                    </div>
                                                    <div class="q_a_like">
                                                        <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                        <p class="tabs_buyer_number">0</p>
                                                        <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                                    </div>
                                                </div>
                                            </div>                                
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="q_tabs_block">
                                <div class="q_a_name">
                                    <p class="q_a_name_text">Q:</p>
                                </div>
                                <div class="q_tabs_a_block">
                                    <div class="q_a_block_comment">
                                        <div class="q_a_text">
                                            <p class="tabs_buyer_text_title">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                            </p>
                                            <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                        </div>
                                        <div class="q_active_block">
                                            <div class="q_a_like">
                                                <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                <p class="tabs_buyer_number">0</p>
                                                <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                            </div>
                                            <div class="q_active_info">
                                                <img :src="'/images/active-info.svg'" alt="active-info" class="q_active_info_image">
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class="q_tabs_block">
                                <div class="q_a_name">
                                    <p class="q_a_name_text">Q:</p>
                                </div>
                                <div class="q_tabs_a_block">
                                    <div class="q_a_block_comment">
                                        <div class="q_a_text">
                                            <p class="tabs_buyer_text_title">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                            </p>
                                            <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                        </div>
                                        <div class="q_active_block">
                                            <div class="q_a_like">
                                                <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                <p class="tabs_buyer_number">0</p>
                                                <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                            </div>
                                            <div class="q_active_info">
                                                <img :src="'/images/info-active.svg'" alt="info-active" class="q_active_info_image">
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class="q_tabs_block">
                                <div class="q_a_name">
                                    <p class="q_a_name_text">Q:</p>
                                </div>
                                <div class="q_tabs_a_block">
                                    <div class="q_a_block_comment">
                                        <div class="q_a_text">
                                            <p class="tabs_buyer_text_title">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel et ipsum esse 
                                                officiis eaque numquam minus. Ut impedit illo, veniam voluptates.
                                            </p>
                                            <img :src="'/images/tools-mini.svg'" style="width: 4px; height: 16px;" alt="tools" class="q_avatar_icon">
                                        </div>
                                        <div class="q_active_block">
                                            <div class="q_a_like">
                                                <img :src="'/images/collection/like.svg'" alt="like" class="tabs_buyer_like_icon">
                                                <p class="tabs_buyer_number">0</p>
                                                <img :src="'/images/collection/dislike.svg'" alt="dlike" class="tabs_buyer_like_icon">
                                            </div>
                                            <div class="q_active_info">
                                                <img :src="'/images/active-info.svg'" alt="active-info" class="q_active_info_image">
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class="tabs_button">
                                <button type="submit" class="tabs_button_show">Show all 8</button>
                            </div>
                        </div>
                    </Tab>
            </TabNav>
        </div>
    </div>
</template>

<script>
import TabNav from './TabNav.vue'
import Tab from './Tab.vue'
import Button from '../../Jetstream/Button.vue'

export default {
    name: 'tab-page',
    components: {
        TabNav,
        Tab,
        Button
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
.q_ask {
    display: flex;
    align-items: flex-end;
    height: 60px;
    width: 100%;
}
.q_foto {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.q_name {
    margin-left: 19px;
    width: 100%;
}
.q_name_text {
    border: none;
    width: 100%;
    box-shadow: none;
    border-bottom: 1px solid #000;
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
    padding: 14px 0;
}
.q_box_select {
    appearance: none;
    box-shadow: none;
    background-image: none;
    width: 175px;
    border: 0;
    padding: 0;
    position: relative;
}
.q_a_name {
    width: 5%;
}
.q_a_name_text {
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
}
.q_tabs_a_block {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 19px;
    width: 95%;
}
.q_a_block {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    max-width: 970px;
}
.q_a_text {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-height: 100px;
    width: 100%;
}
.q_a_like {
    display: flex;
    width: 60px;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}
.q_a_block_comment {
    margin-bottom: 35px;
    width: 100%;
}
.a_q_text_title {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.q_active_info {
    margin-top: 12px;
    margin-left: 35px;
}
.q_active_info_image {
    width: 16px;
    height: 18px;
}
.q_tabs_block {
    display: flex;
    margin-bottom: 20px;
    justify-content: flex-start;
}
.q_active_block {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
</style>