<template>
    <div class="coll_sort_group_block">
        <h3 class="coll_drag_text">Drag items to put them in custom order</h3>
        <div class="coll_drag_foto_group">
            <div class="coll_sort_foto" :v-if="collectionIndex <= collectionToShow" v-for="collectionIndex in collectionToShow" :key="collectionIndex">
                <div class="coll_sort_group">
                    <a class="coll_sort_link_mygroup" href="#">
                        <img :src="IconCollection[collectionIndex - 1].src" alt="croconut" class="coll_sort_images">
                        <img :src="'/images/delete.svg'" alt="delete" class="coll_drag_icon_delete">
                    </a>                
                    <div class="coll_sort_name">
                        <div class="coll_sort_name_title">
                            <h3 class="coll_sort_text">{{IconCollection[collectionIndex - 1].name}}</h3>
                            <h4 class="coll_sort_username">by {{IconCollection[collectionIndex - 1].userName}}</h4>
                        </div>
                        <p class="coll_sort_name_price">${{IconCollection[collectionIndex - 1].price}}</p>
                    </div>    
                </div>
            </div>
            <div class="coll_button_show">
                <button type="submit" class="coll_show_name">Discard Changes</button>
                <div class="drag_button_apply">
                    <img :src="'/images/apply.svg'" alt="apply" class="drag_button_apply_icon">
                    <button type="submit" class="drag_button_apply_text">Apply Changes</button>
                </div>
                
            </div>
        </div>        
    </div>
</template>

<script>

export default {
    name: 'drag-item-collection',
    data() {
        return {
            IconCollection: [
                { src: '/images/collection/2.jpg', name: 'Croconut', userName: 'Username', price: '35' },
                { src: '/images/collection/1.jpg', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/3.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/5.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/6.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/8.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/9.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/10.png', name: 'Zlin city', userName: 'Username', price: '35' },

                { src: '/images/collection/11.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/12.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/5.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/6.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/8.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/9.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/10.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/11.png', name: 'TreeDriver', userName: 'Username', price: '35' },

                { src: '/images/collection/12.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/5.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/6.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
            ],
            collectionToShow: 24,
            showMore: true,
        };
    }
}
</script>

<style scoped>
.coll_sort_group_block {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 950px;
    height: 100%;
    margin-bottom: 140px;
}
.coll_drag_text {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin: 13px 0 33px;
}
.coll_drag_foto_group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.coll_sort_group {
    width: 300px;
    height: 255px;
}
.coll_sort_link_mygroup {
    position: relative;
    display: flex;
}
.coll_sort_images {
    width: 300px;
    height: 170px;
}
.coll_drag_icon_delete {
    position: absolute;
    width: 16px;
    height: 18px;
    top: 14px;
    right: 16px;
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
.coll_sort_text, .coll_sort_username {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_sort_name_price {
    font-family: Montserrat-SemiBold;
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
    margin-top: 90px;
}
.coll_show_name {
    width: 303px;
    height: 68px;
    border: 2px solid #000;
    border-radius: 10px;
    box-sizing: border-box;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    color: #000000;
    justify-content: center;
    margin-right: 28px;
}
.drag_button_apply {
    position: relative;
    display: flex;
    width: 303px;
    height: 68px;
}
.drag_button_apply_icon {
    width: 18px;
    height: 18px;
    position: absolute;
    left: 64px;
    top: 25px;
}
.drag_button_apply_text {
    width: 303px;
    height: 68px;
    border: 2px solid #1C9558;
    border-radius: 10px;
    box-sizing: border-box;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    color: #1C9558;
    justify-content: center;
    padding-left: 19px;
}
</style>