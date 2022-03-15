<template>
    <div class="recommen_coll">
        <h3 class="recommen_coll_name">Recommendations</h3>
        <p class="recommen_add_text">Drag or click '+' to add</p>
        <div class="recommen_coll_block" >
            <div class="recommen_coll_group" :v-if="collectionIndex <= recommendationToShow" v-for="collectionIndex in recommendationToShow" :key="collectionIndex">
                <a class="recommen_coll_link_mygroup" href="#">
                    <img :src="IconRecommendation[collectionIndex - 1].src" alt="croconut" class="recommen_coll_images">
                    <img :src="'/images/add.svg'" alt="add" class="add_recommend_icon">
                </a>           
                <div class="recommen_name_block">
                    <div class="recommen_coll_name_title">
                        <h3 class="recommen_coll_text">{{IconRecommendation[collectionIndex - 1].name}}</h3>
                        <h4 class="recommen_coll_username">by {{IconRecommendation[collectionIndex - 1].userName}}</h4>
                    </div>
                    <p class="recommen_coll_name_price">${{IconRecommendation[collectionIndex - 1].price}}</p>
                </div>    
            </div>
        </div>
        <div class="recommen_coll_button_show" v-if="recommendationToShow < IconRecommendation.length || IconRecommendation.length > recommendationToShow">
            <button class="recommen_coll_show_name" type="submit" @click="recommendationToShow += 3" >More</button>
        </div>                             
    </div>
</template>

<script>
export default {
    name: 'add-recommendation',
    data() {
        return {
            IconRecommendation: [
                { src: '/images/collection/2.jpg', name: 'Croconut', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/10.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/2.jpg', name: 'Croconut', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/2.jpg', name: 'Croconut', userName: 'Username', price: '35' },
                { src: '/images/collection/4.jpg', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/7.png', name: 'Zlin city', userName: 'Username', price: '35' },
                { src: '/images/collection/2.jpg', name: 'Croconut', userName: 'Username', price: '35' },
            ],
            recommendationToShow: 7,
            showMore: true,
        };
    }
}
</script>

<style scoped>
.recommen_coll {
    display: flex;
    flex-direction: column;
    margin-top: -65px;
    align-items: flex-start;
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
.recommen_add_text {
    font-family: Montserrat-Italic;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin-bottom: 33px;
}
.recommen_coll_block {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
}
.recommen_coll_group {
    width: 300px;
    height: 210px;
    margin-bottom: 50px;
}
.recommen_coll_link_mygroup {
    position: relative;
    display: flex;
}
.recommen_coll_images {
    width: 300px;
    height: 170px;
}
.add_recommend_icon {
    position: absolute;
    width: 18px;
    height: 18px;
    top: 14px;
    right: 14px;
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
.recommed_coll_text {
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
    width: 120px;
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