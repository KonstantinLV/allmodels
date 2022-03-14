<template>
    <section class="all_collection">
        <header-collection></header-collection>
        <slider-collection></slider-collection>
        <main class="coll_main">
            <div class="coll_path">
                <a href="#" class="coll_path_text">All 3D Models</a> / <a class="current">Collection: Awesome Crocodiles</a>
            </div>
            <div class="main_info">
                <div class="coll_desk">
                    <div class="my_coll_desk">
                        <div class="my_coll_desk_text">
                            <h2 class="coll_desk_title">Awesome Crocodiles</h2>
                            <h3 class="coll_desk_name">by <b>Peter Hayes (you)</b></h3>
                        </div>
                        <a href="#" class="my_coll_link">
                            <img class="my_coll_edit_icon" :src="'/images/collection/edit-text.svg'" alt="edit" />
                        </a>
                    </div>                    
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
                                    <img :src="'/images/collection/like.svg'" style="width: 17px; height: 15px; margin-right: 5px;" alt="like" class="coll_okko_icon">
                                    <p class="coll_okko_text">1890</p>
                                </div>
                                <div class="coll_like" style="justify-content: flex-end;">
                                    <img :src="'/images/collection/dislike.svg'" style="width: 17px; height: 15px; margin-right: 5px;" alt="dislike" class="coll_okko_icon">
                                    <p class="coll_okko_text">49</p>
                                </div>
                            </div>
                            <div class="coll_like_meter">
                                <span class="coll_like_meter_plus"></span>
                                <span class="coll_like_meter_minus"></span>
                            </div>
                        </div>
                        <div class="coll_mark_link">
                            <img :src="'/images/collection/link.svg'" style="width: 18px; height: 18px;" alt="link" class="coll_okko_icon">
                        </div>
                        <div class="coll_mark_link">
                            <img :src="'/images/collection/tools.svg'" style="width: 4px; height: 18px; " alt="tools" class="coll_okko_icon">
                        </div>
                    </div>
                    <div class="add_coll">
                        <button type="submit" class="add_coll_button">
                            <img class="edit_collection_icon" :src="'/images/collection/edit_coll.svg'" style="width: 140px; height: 30px; " alt="edit" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="coll_sort">
                <div class="coll_sort_block">
                    <div class="coll_sort_search">
                        <img class="coll_sort_logo_icon" style="width: 7px; height: 34px;" :src="'/images/collection/[.svg'" alt="sk" />
                        <input type="text" class="coll_sort_search_text" placeholder="Search within the collection"/>
                        <img class="coll_sort_search_icon" style="width: 14px; height: 14px;" :src="'/images/collection/search.svg'" alt="cart" />
                        <img class="coll_sort_logo_icon" style="width: 8px; height: 34px;" :src="'/images/collection/].svg'" alt="ks" />
                    </div>
                    <div class="coll_sort_date">
                        <select class="coll_box_select">
                            <option>Sort by date</option>
                            <option>Sort by name</option>
                        </select>
                        <i class="fa fa-angle-down" style="color: black; position: absolute; right: 10px; top: 4px;" aria-hidden="true"></i>
                    </div>
                </div>
                <item-collection></item-collection>  
            </div>
            <recommendation-collection></recommendation-collection>
            <copy-collection></copy-collection>
            <other-collection></other-collection>
        </main>
        <my-footer></my-footer>
    </section>
</template>

<script>
import HeaderCollection from '@/Common/HeaderCollection.vue'
import SliderCollection from '@/Common/SliderCollection.vue'
import ItemCollection from '@/Common/ItemCollection.vue'
import RecommendationCollection from '@/Common/RecommendationCollection.vue'
import CopyCollection from '@/Common/CopyCollection.vue'
import OtherCollection from '@/Common/OtherCollection.vue'
import MyFooter from '@/Common/Footer.vue'

export default {
    name: 'all-collection',
    components: {
        HeaderCollection,
        SliderCollection,
        ItemCollection,
        RecommendationCollection,
        CopyCollection,
        OtherCollection,
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
.coll_path {
    margin-top: 19px;
    width: 690px;
    height: 17px;
    display: flex;
    align-items: center;
}
.coll_path_text, .current {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    display: flex;
    align-items: center;
    color: #000000;
    padding: 0 5px;
}
.main_info {
    display: flex;
    align-items: flex-start;
    width: 100%;
}
.my_coll_desk {
    display: flex;
}
.coll_desk_title {
    font-family: Montserrat-SemiBold;
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
.my_coll_edit_icon {
    width: 125px;
    height: 30px;
    margin-top: 36px;
    margin-left: 20px;
}
.coll_desk_name b {
    width: 220px;
    height: 65px;
    font-family: Montserrat-SemiBold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
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
    width: 510px;
    height: 0;
    box-shadow: none;
    padding-left: 0;
}
.coll_sort_search_text::placeholder {
    color: black;
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
</style>