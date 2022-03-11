<template>
    <div class="coll_sort_group_block">
        <div class="coll_sort_foto" :v-if="collectionIndex <= collectionToShow" v-for="collectionIndex in collectionToShow" :key="collectionIndex">
            <div class="coll_sort_group">
                <a class="coll_sort_link_mygroup" href="#">
                    <img :src="IconCollection[collectionIndex - 1].src" alt="croconut" class="coll_sort_images">
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
        <div class="coll_button_show" v-if="collectionToShow < IconCollection.length || IconCollection.length > collectionToShow">
            <button type="submit" @click="collectionToShow += 9" class="coll_show_name">Show 9 more</button>
        </div>
    </div>
</template>

<script>

export default {
    name: 'item-collection',
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
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/8.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/9.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                { src: '/images/collection/10.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/11.png', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/collection/12.png', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
            ],
            collectionToShow: 12,
            showMore: true,
        };
    },
    viewMore() {
        this.collectionToShow += 9;
        this.showMore = this.collectionToShow === this.IconCollection.length;
    }
}
</script>

<style scoped>
.coll_sort_group_block {
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
</style>
