<template>
    <div class="recommen_coll">
        <h3 class="recommen_coll_name">... from people who copied your collection</h3>
        <div class="recommen_coll_block" >
            <div class="recommen_coll_group" :v-if="collectionIndex <= copyCollectionToShow" v-for="collectionIndex in copyCollectionToShow" :key="collectionIndex">
                <a class="recommen_coll_link_mygroup" href="#">
                    <img :src="IconCopyCollection[collectionIndex - 1].src" alt="croconut" class="recommen_coll_images">
                </a>           
                <div class="recommen_name_block">
                    <div class="recommen_coll_name_title">
                        <h3 class="recommen_coll_text">{{IconCopyCollection[collectionIndex - 1].name}}</h3>
                        <h4 class="recommen_coll_username">by {{IconCopyCollection[collectionIndex - 1].userName}}</h4>
                    </div>
                    <p class="recommen_coll_name_price">${{IconCopyCollection[collectionIndex - 1].price}}</p>
                </div>    
            </div>
        </div>
        <div class="recommen_coll_button_show" v-if="copyCollectionToShow < IconCopyCollection.length || IconCopyCollection.length > copyCollectionToShow">
            <button class="recommen_coll_show_name" type="submit" @click="copyCollectionToShow += 3" >Show</button>
        </div>                             
    </div>
</template>

<script>
export default {
    name: 'copy-collection',
    data() {
        return {
            IconCopyCollection: [
                { src: '/images/copy/c-1.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/copy/c-2.jpg', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/copy/c-3.jpg', name: 'The Mouse adventurer', userName: 'Username', price: '35' },

                { src: '/images/copy/c-1.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/copy/c-2.jpg', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/copy/c-3.jpg', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
                
                { src: '/images/copy/c-1.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/copy/c-2.jpg', name: 'TreeDriver', userName: 'Username', price: '35' },
                { src: '/images/copy/c-3.jpg', name: 'The Mouse adventurer', userName: 'Username', price: '35' },
            ],
            copyCollectionToShow: 3,
            showMore: true,
        };
    },
    viewMore() {
        this.copyCollectionToShow += 3;
        this.showMore = this.copyCollectionToShow === this.IconCopyCollection.length;
    }
}
</script>

<style scoped>
.recommen_coll {
    display: flex;
    flex-direction: column;
    margin-top: 100px;
    align-items: center;
    justify-content: center;
}
.recommen_coll_name {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
    padding-bottom: 50px;
}
.recommen_coll_block {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    height: 100%;
}
.recommen_coll_group {
    width: 465px;
    height: 315px;
    margin-bottom: 75px;
}
.recommen_coll_images {
    width: 460px;
    height: 260px;
}
.recommen_name_block {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 15px;
}
.recommen_coll_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.recommen_coll_username {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.recommen_coll_name_price {
    font-family: Montserrat-SemiBold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.recommen_coll_button_show {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.recommen_coll_show_name {
    width: 100px;
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