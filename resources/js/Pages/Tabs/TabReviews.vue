<template>
    <div class="review_group">
        <div class="review_block" v-for="(doc, index) in toBeShown" :key="index.userId">
            <div class="review_info">
                <div class="review_info_avatar">
                    <img :src="doc.imageUser" alt="josh" class="review_info_avatar_foto">
                    <div class="review_info_name">
                        <h3 class="review_info_name_title">{{doc.nameUser}}</h3>
                        <h4 class="review_info_profi">{{doc.profiUser}}</h4>
                    </div>
                </div>
                <p class="review_info_data">{{doc.date}}</p>
            </div>
            <div class="review_title">
                <h2 class="review_title_name">{{doc.nameArticle}}</h2>
                <p class="review_title_text">{{doc.disctiptionProduct}}</p>
            </div>
            <div class="review_product">
                <p class="review_product_single">Single Image</p>
                <img :src="doc.fotoProduct" alt="image" class="review_product_foto">
                <button v-on:click="productUserId = doc.userId; isShow = !isShow" class="review_product_read">Read this review...</button>
            </div>
            <div class="review_description_block" v-show="isShow && productUserId == doc.userId">
                <div v-for="(item, index) in doc.listDescription" :key="index.id">
                    <div class="review_description" >
                        <p class="review_description_text">{{item.titleText}}</p>
                        <p class="review_description_text_title">{{item.titleItalic}}</p>
                        <p class="review_description_text_items">{{item.titleText2}}</p>
                    </div>
                    <slide-review></slide-review>
                    <div class="review_description_info">
                        <p class="review_description_info_text">{{item.titleText3}}</p>
                        <p class="review_description_info_quisque">{{item.titleItalic2}}</p>
                        <p class="review_description_info_text">{{item.titleText4}}</p>
                    </div>
                    <div class="review_public">
                        <div class="coll_okko">
                            <div class="coll_okko_block">
                                <img :src="'/images/okko.svg'" style="width: 19px; height: 14px;" alt="okko" class="coll_okko_icon" />
                                <img :src="'/images/okko-min.svg'" style="width: 6px; height: 6px; position: absolute;" alt="okko" class="coll_okko_icon" />
                            </div>
                            <p class="coll_okko_text">10k.</p>
                        </div>
                        <div class="review_like_group">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="review_show">
            <button type="submit" @click="nextPage" v-if="currentPage != totalPages" class="review_show_button">Show 3 more</button>
            <button type="submit" @click="prevPage" v-else-if="currentPage != 1" class="review_show_button">Show less</button>
            <p v-else></p>
        </div>
    </div>    
</template>

<script>
import SlideReview from '../Sliders/SlideReview.vue'

export default {
    name: 'tab-reviews',
    components: {
        SlideReview
    },
    data() {
        return {
            isShow: false,
            productUserId: null,
            reviewDescription: [
                {
                    userId: 1,
                    imageUser: '/images/avatar-josh.jpg',
                    nameUser: 'Daniel Gildenlow',
                    profiUser: 'Professional Maker',
                    date: '08.09.21',
                    nameArticle: 'Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/article-header.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
                {
                    userId: 2,
                    imageUser: '/images/avatar-mark.jpg',
                    nameUser: 'Mark Sandman',
                    profiUser: 'Murder for the Money',
                    date: '08.09.21',
                    nameArticle: 'Review Name - Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/review-name.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
                {
                    userId: 3,
                    imageUser: '/images/avatar-daniel.jpg',
                    nameUser: 'Josh Homme',
                    profiUser: 'Industry Insider',
                    date: '08.09.21',
                    nameArticle: 'Review Name - Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/daniel-article.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
                {
                    userId: 4,
                    imageUser: '/images/avatar-josh.jpg',
                    nameUser: 'Daniel Gildenlow',
                    profiUser: 'Professional Maker',
                    date: '08.09.21',
                    nameArticle: 'Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/article-header.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
                {
                    userId: 5,
                    imageUser: '/images/avatar-mark.jpg',
                    nameUser: 'Mark Sandman',
                    profiUser: 'Murder for the Money',
                    date: '08.09.21',
                    nameArticle: 'Review Name - Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/review-name.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
                {
                    userId: 6,
                    imageUser: '/images/avatar-daniel.jpg',
                    nameUser: 'Josh Homme',
                    profiUser: 'Industry Insider',
                    date: '08.09.21',
                    nameArticle: 'Review Name - Article Header',
                    disctiptionProduct: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus delectus quasi eaque! Doloribus fugit quod beatae, commodi minima quia enim nisi voluptate odit mollitia voluptatibus assumenda saepe atque, laboriosam ut.',
                    fotoProduct: '/images/daniel-article.jpg',
                    listDescription: [
                        {
                            titleText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Eu feugiat pretium nibh ipsum. Sed tempus urna et pharetra. Felis eget velit aliquet sagittis id consectetur purus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam.',
                            titleItalic: 'Dui nunc mattis enim ut tellus. Nisl vel pretium lectus quam. In fermentum posuere urna nec tincidunt praesent semper feugiat. Tincidunt lobortis feugiat vivamus at augue. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',
                            titleText2: 'Ornare arcu odio ut sem nulla pharetra. Magna fringilla urna porttitor rhoncus dolor purus. Non sodales neque sodales ut etiam sit. Condimentum id venenatis a condimentum vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Sed lectus vestibulum mattis ullamcorper.',
                            titleText3: 'Ante metus dictum at tempor commodo ullamcorper a. Ac turpis egestas sed tempus. Semper eget duis at tellus. Nunc sed blandit libero volutpat sed. Interdum varius sit amet mattis vulputate. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Neque viverra justo nec ultrices. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Ac felis donec et odio pellentesque. Phasellus vestibulum lorem sed risus. Condimentum lacinia quis vel eros. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Nec nam aliquam sem et. Libero enim sed faucibus turpis. Sed lectus vestibulum mattis ullamcorper velit. Consectetur libero id faucibus nisl tincidunt eget nullam non. Molestie nunc non blandit massa enim. Mi tempus imperdiet nulla malesuada pellentesque. Feugiat sed lectus vestibulum mattis ullamcorper. Eleifend mi in nulla posuere sollicitudin aliquam.',
                            titleItalic2: '>> Quisque id diam vel quam elementum pulvinar etiam.',
                            titleText4: 'Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Et sollicitudin ac orci phasellus. Tincidunt ornare massa eget egestas purus. Viverra tellus in hac habitasse platea. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Mauris nunc congue nisi vitae suscipit tellus mauris. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ipsum consequat nisl vel pretium lectus quam. Quis risus sed vulputate odio ut. Lacus sed turpis tincidunt id aliquet. ',
                        },
                    ]
                },
            ],
            currentPage: 1,
        }
    },
    computed: {
        toBeShown() {
            return this.reviewDescription.slice(0, this.currentPage * 3);
        },
        totalPages() {
            return Math.ceil(this.reviewDescription.length / 3);
        }
    },
    methods: {
        nextPage() {
            if(this.currentPage < this.totalPages) {
                this.currentPage++
            }
        },
        prevPage() {
            this.currentPage = this.currentPage - 1 || 1;
        }
    }
};
</script>

<style scoped>
.review_block {
    max-width: 910px;
    height: 100%;
    margin-bottom: 5%;
}
.review_info {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: flex-start;
    margin: 70px 0 40px;
}
.review_info_avatar {
    display: flex;
    align-items: center;
}
.review_info_avatar_foto {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.review_info_name {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px;
}
.review_title {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.review_info_name_title {
    font-family: Montserrat-Semibold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
.review_info_profi {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
.review_info_data {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
}
.review_title_name {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 36px;
    line-height: 44px;
    color: #000;
    margin-bottom: 20px;
}
.review_title_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    margin-bottom: 30px;
}
.review_product {
    display: flex;
    flex-direction: column;
}
.review_product_single {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
}
.review_product_foto {
    width: 100%;
    margin: 30px 0;
}
.review_product_read {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000;
    text-align: center;
    width: 200px;
    margin: 0 auto;
}
.review_description {
    display: flex;
    flex-direction: column;
    margin: 10px auto;
}
.review_description_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 20px;
    color: #000;
    margin-bottom: 20px;
}
.review_description_text_title {
    font-family: Montserrat;
    font-style: italic;
    font-weight: 400;
    font-size: 24px;
    line-height: 27px;
    color: #000;
    margin-bottom: 20px;
}
.review_description_text_items {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 20px;
    color: #000;
    margin-bottom: 20px;
}
.review_description_info {
    display: flex;
    flex-direction: column;
    margin: 40px 0 25px;
}
.review_description_info_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 20px;
    color: #000;
}
.review_description_info_quisque {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 27px;
    color: #000;
    margin: 15px 0;
}
.review_public {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    height: 50px;
}
.coll_okko {
    display: flex;
    width: 50%;
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
.review_like_group {
    width: 50%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 50px;
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
.coll_mark_link {
    margin-left: 30px;
}
.coll_like {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 80px;
    height: 17px;
}
.review_show {
    width: 100%;
    text-align: center;
    margin-bottom: 35px;
}
.review_show_button {
    width: 171px;
    height: 68px;
    border: 2px solid #000;
    box-sizing: border-box;
    border-radius: 10px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #000;
}
</style>