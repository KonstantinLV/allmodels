<template>
    <section class="all_collection">
        <header-collection></header-collection>
        <slider-collection></slider-collection>
        <main class="coll_main">
            <div class="main_info">
                <div class="coll_desk">
                    <h2 class="coll_desk_title">Awesome Crocodiles</h2>
                    <h3 class="coll_desk_name">by <b>Niko Knappe</b></h3>
                    <div class="call_desk_items">
                        <p class="coll_desk_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus neque facere harum facilis 
                            aliquam officiis esse laborum dolore ipsam quasi itaque provident, molestias reprehenderit. 
                            Magni esse aperiam animi sapiente molestias?
                        </p>
                    </div>
                    <p class="coll_desk_tag">
                        #Star-Wars #Republic-Commando #The-Clone-Wars #helmet #Star-Wars-Prop #Commando #armor #Gregor #Captain-Gregor
                    </p>
                </div>
                <div class="coll_mark">
                    <div class="coll_mark_group">
                        <div class="coll_okko">
                            <div class="coll_okko_block">
                                <img :src="'/images/okko.svg'" style="width: 19px; height: 14px;" alt="okko" class="coll_okko_icon" />
                                <img :src="'/images/okko-min.svg'" style="width: 6px; height: 6px; position: absolute;" alt="okko" class="coll_okko_icon" />
                            </div>
                            <p class="coll_okko_text">10k.</p>
                        </div>
                        <div class="coll_like_group">
                            <div class="coll_like_block">
                                <div class="coll_like">
                                    <img :src="'/images/collection/like.png'" style="width: 17px; height: 15px; margin-right: 5px;" alt="like" class="coll_okko_icon">
                                    <p class="coll_okko_text">1890</p>
                                </div>
                                <div class="coll_like" style="justify-content: flex-end;">
                                    <img :src="'/images/collection/dislike.png'" style="width: 17px; height: 15px; margin-right: 5px;" alt="dislike" class="coll_okko_icon">
                                    <p class="coll_okko_text">49</p>
                                </div>
                            </div>
                            <div class="coll_like_meter">
                                <span class="coll_like_meter_plus"></span>
                                <span class="coll_like_meter_minus"></span>
                            </div>
                        </div>
                        <div class="coll_mark_link">
                            <img :src="'/images/collection/link.png'" style="width: 18px; height: 18px;" alt="link" class="coll_okko_icon">
                        </div>
                        <div class="coll_mark_link">
                            <img :src="'/images/collection/tools.png'" style="width: 2px; height: 16px; " alt="tools" class="coll_okko_icon">
                        </div>
                    </div>
                    <div class="add_coll">
                        <button type="submit" class="add_coll_button">Add to your collections</button>
                    </div>
                </div>
            </div>
            <div class="coll_sort">
                <div class="coll_sort_block">
                    <div class="coll_sort_search">
                        <img class="coll_sort_logo_icon" style="width: 12px; height: 44px;" :src="'/images/collection/sk.png'" alt="sk" />
                        <p>Search within the collection</p>
                        <input type="text" class="coll_sort_search_text"/>
                        <img class="coll_sort_search_icon" style="width: 14px; height: 14px;" :src="'/images/collection/search.png'" alt="cart" />
                        <img class="coll_sort_logo_icon" style="width: 12px; height: 44px;" :src="'/images/collection/ks.png'" alt="ks" />
                    </div>
                    <div class="coll_sort_date">
                        <select class="coll_box_select">
                            <option>Sort by date</option>
                            <option>Sort by name</option>
                        </select>
                        <i class="fa fa-angle-down" style="color: black; position: absolute; right: 10px; top: 4px;" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="coll_sort_group_block">
                    <div class="coll_sort_foto">
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/2.jpg'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">Croconut</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/1.jpg'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">TreeDriver</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/3.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">The Mouse adventurer</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/4.jpg'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">Zlin city</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/5.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">TreeDriver</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/6.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">The Mouse adventurer</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/7.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">Zlin city</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/8.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">TreeDriver</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/9.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">The Mouse adventurer</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/10.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">Zlin city</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/11.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">TreeDriver</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                        <div class="coll_sort_group">
                            <img :src="'/images/collection/12.png'" alt="croconut" class="coll_sort_images">
                            <div class="coll_sort_name">
                                <div class="coll_sort_name_title">
                                    <h3 class="coll_sort_text">The Mouse adventurer</h3>
                                    <h4 class="coll_sort_username">by Username</h4>
                                </div>
                                <p class="coll_sort_name_price">$35</p>
                            </div>    
                        </div>
                    </div>
                    <div class="coll_button_show">
                        <button type="submit" class="coll_show_name">Show 9 more</button>
                    </div>
                </div>   
            </div>
            <div class="coll_order">
                <h3 class="coll_order_name">Order collections like this one</h3>
                <div class="coll_order_block">
                    <div class="coll_order_items">
                        <div class="call_order_image_group">
                            <img :src="'/images/collection/22.png'" alt="" class="coll_order_foto" />
                            <div class="coll_order_image_border"></div>
                        </div>                        
                        <div class="coll_order_items_text">
                            <p class="coll_order_item_text">From artists</p>
                            <div class="coll_order_icon">
                                <div class="coll_order_icon_block">
                                    <p class="coll_order_icon_count">100</p>
                                    <p class="coll_order_icon_name">items</p>
                                </div>
                                <div class="coll_order_like">
                                    <img :src="'/images/collection/like.png'" alt="like" class="coll_order_like_icon">
                                    <p class="coll_order_like_count">1890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll_order_items">
                        <div class="call_order_image_group">
                            <img :src="'/images/collection/21.png'" alt="" class="coll_order_foto">
                            <div class="coll_order_image_border"></div>
                        </div>
                        <div class="coll_order_items_text">
                            <p class="coll_order_item_text">3D Portraits</p>
                            <div class="coll_order_icon">
                                <div class="coll_order_icon_block">
                                    <p class="coll_order_icon_count">78</p>
                                    <p class="coll_order_icon_name">items</p>
                                </div>
                                <div class="coll_order_like">
                                    <img :src="'/images/collection/like.png'" alt="like" class="coll_order_like_icon">
                                    <p class="coll_order_like_count">2k</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll_order_items">
                        <div class="call_order_image_group">
                            <img :src="'/images/collection/23.png'" alt="" class="coll_order_foto">
                            <div class="coll_order_image_border"></div>
                        </div>
                        <div class="coll_order_items_text">
                            <p class="coll_order_item_text">Environment</p>
                            <div class="coll_order_icon">
                                <div class="coll_order_icon_block">
                                    <p class="coll_order_icon_count">347</p>
                                    <p class="coll_order_icon_name">items</p>
                                </div>
                                <div class="coll_order_like">
                                    <img :src="'/images/collection/like.png'" alt="like" class="coll_order_like_icon">
                                    <p class="coll_order_like_count">2k</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coll_order_show">
                    <button class="coll_order_button">Show all 10</button>    
                </div>                              
            </div>
        </main>
        <my-footer></my-footer>
    </section>
</template>

<script>
import HeaderCollection from '@/Common/HeaderCollection.vue'
import SliderCollection from '@/Common/SliderCollection.vue'
import MyFooter from '@/Common/Footer.vue'

export default {
    name: 'all-collection',
    components: {
        HeaderCollection,
        SliderCollection,
        MyFooter
    }
}
</script>

<style scoped>
.all_collection {
    position: relative;    
}
.coll_main {
    width: 1450px;
    height: 100%;
    position: relative;
    margin: 0 auto;
}
.main_info {
    display: flex;
    align-items: flex-start;
    width: 100%;
}
.coll_desk_title {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 39px;
    color: #000000;
    margin-top: 30px;
}
.coll_desk_name {
    width: 220px;
    height: 65px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
    margin-top: 5px;
}
.coll_desk_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
    width: 80%;
}
.coll_desk_tag {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin: 50px 0;
}
.coll_mark {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.coll_mark_group {
    display: flex;
    width: 310px;
    height: 20px;
    justify-content: space-between;
    align-items: center;
    margin: 40px 0 60px 0;
}
.coll_mark {
    display: flex;
}
.coll_okko {
    display: flex;
    width: 78px;
    height: 18px;
    justify-content: flex-start;
    align-items: center;
}
.coll_okko_block {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
}
.coll_okko_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_like_group {
    display: flex;
    flex-direction: column;
    width: 130px;
    position: relative;
}
.coll_like_block {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 130px;
    height: 18px;
}
.coll_like_meter {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 130px;
    position: absolute;
    bottom: -13px;
}
.coll_like_meter_plus {
    width: 85%;
    border-bottom: 2px solid #F09FE8;
}
.coll_like_meter_minus {
    width: 15%;
    border-bottom: 2px solid #541B1B;
}
.coll_like {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 80px;
    height: 17px;
}
.add_coll {
    width: 300px;
    height: 70px;
}
.add_coll_button {
    width: 100%;
    height: 100%;
    border: 2px solid #000000;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #000000;
}
.coll_sort {
    position: relative;
}
.coll_sort_block{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.coll_sort_search {
    width: 600px;
    height: 44px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 25px 0;
}
.coll_sort_search p {
    font-family: Montserrat-Italic;
    font-size: 16px;
    line-height: 20px;
    display: flex;
    align-items: center;
    color: #000;
    font-style: italic;
}
.coll_sort_search_text {
    background: none;
    margin-bottom: 4px;
    line-height: 2.4em;
    border-bottom: 1px solid #000;
    transition: all .2s ease;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width: 290px;
    height: 0;
    box-shadow: none;
}
.coll_sort_date {
    position: relative;
    width: 120px;
    height: 17px;
}
.coll_box_select {
    appearance: none;
    box-shadow: none;
    background-image: none;
    width: 95px;
    border: 0;
    padding: 0;
    position: relative;
}
.coll_box_select option {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_sort_foto {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    height: 100%;
}
.coll_sort_group {
    width: 465px;
    height: 315px;
    margin-bottom: 75px;
}
.coll_sort_images {
    width: 460px;
    height: 260px;
}
.coll_sort_name {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 15px;
}
.coll_sort_name {
    position: relative;
}
h3.coll_sort_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
h4.coll_username {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.coll_sort_name_price {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.coll_button_show {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.coll_show_name {
    width: 180px;
    height: 68px;
    border: 2px solid #000;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    color: #000000;
    justify-content: center;
}
.coll_order {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 150px;
}
.coll_order_name {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
}
.coll_order_block {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 60px 0;
}
.coll_order_items {
    width: 470px;
    height: 290px;
}
.call_order_image_group {
    position: relative;
    width: 460px;
    height: 260px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.coll_order_foto {
    width: 460px;
    height: 260px;
}
.coll_order_image_foto {
    width: 435px;
    height: 235px;
    border: 1px dashed #fff;
    box-sizing: border-box;
    position: absolute;
}
.coll_order_items_text {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 20px;
    margin: 9px 0;
}
.coll_order_items_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.coll_order_icon {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 200px;
}
.coll_order_icon_block
 {
    display: flex;
    width: 84px;
    justify-content: space-around;
    align-items: center;
}
.coll_order_like{
    display: flex;
    width: 70px;
    justify-content: space-around;
    align-items: center;
    margin-right: 10px;
}
.coll_order_icon_count,
.coll_order_icon_name,
.coll_order_like_count {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_order_show {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.coll_order_button {
    width: 150px;
    height: 68px;
    border: 2px solid #000;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    color: #000000;
    justify-content: center;
}
</style>
