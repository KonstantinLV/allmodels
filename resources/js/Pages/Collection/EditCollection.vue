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
                    <div class="edit_coll_image">
                        <img src="" alt="" />
                        <button type="submit">Change preview</button>
                    </div>
                    <div class="edit_coll_button_group">
                        <button class="edit_coll_merge">Merge with...</button>
                        <button class="edit_coll_delete">Delete collection</button>
                    </div>
                    <div class="edit_coll_next">
                        <a href="#" class="edit_coll_next_link">Next collection</a>
                    </div>
                </div>
                <div class="edit_coll_text">
                    <div class="edit_coll_name">
                        <label for="name" class="edit_coll_label">Name</label>
                        <input type="text" name="name" />
                    </div>
                    <div class="edit_coll_name">
                        <label for="description" class="edit_coll_label">Description</label>
                        <input type="text" name="description" />
                    </div>
                    <div class="edit_coll_name">
                        <label for="tags" class="edit_coll_label">Tags</label>
                        <input type="text" name="tags" />
                    </div>
                </div>
                <drag-item-collection />
            </div>
        </main>
        <my-footer></my-footer>
    </section>
</template>

<script>
import HeaderCollection from '@/Common/HeaderCollection.vue'
import EditSlider from '@/Common/EditSlider.vue'
import DragItemCollection from '@/Common/DragItemCollection.vue'
import MyFooter from '@/Common/Footer.vue'

export default {
    name: 'edit-collection',
    components: {
        HeaderCollection,
        EditSlider,
        DragItemCollection,
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

</style>