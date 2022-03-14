<template>
    <div class="coll_other">
        <h3 class="coll_other_name">Other collections like this one</h3>
        <div class="coll_other_block" >
            <div class="coll_other_image_block" :v-if="collectionIndex <= otherCollectionToShow" v-for="collectionIndex in otherCollectionToShow" :key="collectionIndex">
                <a class="coll_other_link_mygroup" href="#">
                    <img :src="OtherCollection[collectionIndex - 1].src" alt="croconut" class="coll_other_foto">
                    <div class="coll_other_image_foto"></div>
                </a>           
                <div class="coll_other_name_block">
                    <h3 class="coll_other_text">{{OtherCollection[collectionIndex - 1].name}}</h3>
                    <div class="coll_other_like_block">
                        <div class="coll_other_items">
                            <p class="coll_other_number_item">{{OtherCollection[collectionIndex - 1].itemsNumber}}</p>
                            <p class="coll_other_items_text">items</p>
                        </div>
                        <div class="coll_other_likes">
                            <img class="coll_other_likes_icon" :src="'/images/collection/like.svg'" style="width: 17px; height: 15px; " alt="item" >
                            <p class="coll_other_name_price">{{OtherCollection[collectionIndex - 1].like}}</p>
                        </div>                        
                    </div>                    
                </div>    
            </div>
        </div>
        <div class="coll_other_show" v-if="otherCollectionToShow < OtherCollection.length || OtherCollection.length > otherCollectionToShow">
            <button class="coll_other_button" type="submit" @click="otherCollectionToShow += 10" >Show all 10</button>
        </div>                             
    </div>
</template>

<script>
export default {
    name: 'other-collection',
    data() {
        return {
            OtherCollection: [
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },

                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },

                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
                { src: '/images/other/o-1.png', name: 'From artists', itemsNumber: '100', like: '1890' },
                { src: '/images/other/o-2.png', name: '3D Portraits', itemsNumber: '78', like: '2k' },
                { src: '/images/other/o-3.png', name: 'Environment', itemsNumber: '347', like: '2k' },
            ],
            otherCollectionToShow: 3,
            showMore: true,
        };
    }
}
</script>

<style scoped>
.coll_other {
    display: flex;
    flex-direction: column;
    margin-top: 100px;
    align-items: center;
    justify-content: center;
}
.coll_other_name {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
    margin-bottom: 50px;
}
.coll_other_block {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
    height: 100%;
}
.coll_other_image_block {
    width: 460px;
    height: 260px;
    margin-bottom: 75px;
}
.coll_other_link_mygroup {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.coll_other_foto {
    width: 460px;
    height: 260px;
}
.coll_other_image_foto {
    width: 435px;
    height: 235px;
    border: 1px dashed #ffffff;
    box-sizing: border-box;
    position: absolute;
}
.coll_other_name_block {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 15px;
}
.coll_other_text {
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
}
.coll_other_like_block {
    display: flex;
    width: 35%;
    justify-content: flex-end;
    align-items: center;
}
.coll_other_items, .coll_other_likes {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 50%;
}
.coll_other_number_item {
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_other_items_text {
    margin-left: 5px;
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_other_name_price {
    margin-left: 5px;
    font-family: Montserrat-Medium;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
.coll_other_show {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.coll_other_button {
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