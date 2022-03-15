<template>
    <section class="all_collection">
        <header-collection></header-collection>
        <edit-slider></edit-slider>
        <main class="coll_main">
            <div class="coll_path">
                <a href="#" class="coll_path_text">All 3D Models</a> / <a class="current">Collection: Awesome Crocodiles</a>
            </div>
            <div class="edit_coll">
                <div class="edit_coll_group">
                    <div class="edit_coll_group_block">
                        <div class="edit_coll_image">
                            <img class="edit_coll_image_change" :src="'/images/collection/6.png'" alt="change" />
                            <div class="edit_coll_image_border"></div>
                            <button type="submit" class="edit_change_button">Change preview</button>
                        </div>
                        <div class="edit_coll_button_group">
                            <span class="edit_coll_merge">
                                <a href="" class="edit_coll_link_merge" type="button">
                                    <img class="edit_merge_icon" :src="'/images/merge.svg'" alt="merge" />
                                    Merge with ...
                                </a>
                                <button class="edit_narrow_button" type="button">
                                    <img class="edit_merge_icon_button" :src="'/images/down.svg'" alt="down" />
                                </button>
                            </span>
                            <button class="edit_coll_delete">Delete collection</button>
                        </div>
                    </div>                    
                    <div class="edit_coll_next">
                        <a href="#" class="edit_coll_next_link">Next collection</a>
                    </div>
                </div>
                <div class="edit_coll_text">
                    <div class="edit_coll_name">
                        <label for="name" class="edit_coll_label">Name</label>
                        <input class="edit_coll_name_text" type="text" name="name" value="Awesome Crocodiles"/>
                    </div>
                    <div class="edit_coll_name">
                        <label for="description" style="margin-bottom: 25px;" class="edit_coll_label">Description</label>
                        <textarea class="edit_coll_description_text" cols="86" rows="3" type="text" name="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus neque facere harum facilis aliquam officiis esse laborum dolore ipsam quasi itaque provident, molestias reprehenderit. Magni esse aperiam animi sapiente molestias?</textarea>
                    </div>
                    <div class="edit_coll_name">
                        <label for="tags" style="margin-bottom: 25px;" class="edit_coll_label">Tags</label>
                        <input class="edit_coll_tags_text" type="text" name="tags" 
                            value="#Star-Wars #Republic-Commando #The-Clone-Wars #helmet #Star-Wars-Prop #Commando #armor #Gregor #Captain-Gregor"/>
                    </div>
                </div>
                <div class="edit_drag_recommend">
                    <drag-item-collection />
                    <add-recommendation />
                </div>
            </div>
        </main>
        <my-footer></my-footer>
    </section>
</template>

<script>
import HeaderCollection from '@/Common/HeaderCollection.vue'
import EditSlider from '@/Common/EditSlider.vue'
import DragItemCollection from '@/Common/DragItemCollection.vue'
import AddRecommendation from '@/Common/AddRecommendCollection.vue'
import MyFooter from '@/Common/Footer.vue'

export default {
    name: 'edit-collection',
    components: {
        HeaderCollection,
        EditSlider,
        DragItemCollection,
        AddRecommendation,
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
.edit_coll_group {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 28px 0;
}
.edit_coll_group_block {
    display: flex;
    justify-content: space-between;
    width: 950px;
    align-items: center;
}
.edit_coll_image {
    position: relative;
    display: flex;
    width: 460px;
    height: 260px;
    justify-content: center;
    align-items: center;
}
.edit_coll_image_change {
    width: 460px;
    height: 260px;
}
.edit_coll_image_border {
    width: 435px;
    height: 235px;
    border: 1px dashed #ffffff;
    box-sizing: border-box;
    position: absolute;
}
.edit_change_button {
    position: absolute;
    width: 227px;
    height: 68px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #ffffff;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #ffffff;
}
.edit_coll_button_group {
    display: flex;
    flex-direction: column;
}
.edit_coll_merge {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 303px;
    height: 68px;
    border: 2px solid #000;
    box-sizing: border-box;
    border-radius: 10px;
    margin-bottom: 14px;
}
.edit_coll_link_merge {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
.edit_merge_icon {
    width: 18px;
    height: 15px;
    position: absolute;
    left: 58px;
}
.edit_narrow_button {
    width: 66px;
    height: 100%;
    border-left: 2px solid #000;
    position: absolute;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
.edit_merge_icon_button {
    width: 16px;
    height: 9px;
}
.edit_coll_delete {
    position: relative;
    width: 303px;
    height: 68px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #000;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    padding-left: 20px;
    margin-top: 14px;
}
.edit_coll_delete::before {
    content: '';
    position: absolute;
    background: url('/images/delete.svg') no-repeat;
    width: 18px;
    height: 20px;
    left: 58px;
}
.edit_coll_next {
    width: 165px;
    height: 25px;
    position: relative;
}
.edit_coll_next_link {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    display: flex;
    align-items: center;
}
.edit_coll_next_link:after {
    content: '';
    position: absolute;
    background: url('/images/next.svg') no-repeat;
    width: 22px;
    height: 16px;
    right: 0;
}
.edit_coll_text {
    width: 950px;
}
.edit_coll_name {
    display: flex;
    flex-direction: column;
    margin-bottom: 35px;
}
.edit_coll_label {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
    margin-bottom: 11px;
}
.edit_coll_name_text {
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 39px;
    color: #000;
    padding: 0;
    border: none;
    border-bottom: 1px solid #000;
    box-shadow: none;
}
.edit_coll_description_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    padding: 0;
    border: none;
    border-bottom: 1px solid #000;
    box-shadow: none;
    height: 86px;
    overflow: hidden;
    resize: none;
}
.edit_coll_tags_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
    padding: 0;
    border: none;
    border-bottom: 1px solid #000;
    box-shadow: none;
    padding-bottom: 9px;
}
.edit_drag_recommend {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
</style>