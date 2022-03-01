<template>
    <footer class="footer_main">
        <div class="footer_logo">
            <img class="footer_logo_item" style="width: 7px; height: 40px;" :src="'/images/collection/sk.png'" alt="sk" />
            <img :src="'/images/collection/A.png'" class="footer_logo_icon" style="width: 28px; height: 29px;" alt="A" >
            <img class="footer_logo_item" style="width: 7px; height: 40px;" :src="'/images/collection/ks.png'" alt="sk" />
        </div>
        <div class="footer_group">
            <div class="footer_about">
                <a href="#" class="footer_about_text">About us</a>
                <a href="#" class="footer_about_blog">Blog</a>
                <a href="#" class="footer_about_blog">Careers</a>
                <a href="#" class="footer_about_blog">Press</a>
                <a href="#" class="footer_about_blog">Team</a>
                <a href="#" class="footer_about_blog">Contact us</a>
            </div>
            <div class="footer_partners">
                <a href="#" class="footer_about_text">Our partners</a>
                <a href="#" class="footer_about_blog">Partner</a>
                <a href="#" class="footer_about_blog">Projects</a>
            </div>
            <div class="footer_legal">
                <a href="#" class="footer_about_text">Legal</a>
                <a href="#" class="footer_about_blog">Terms & Conditions</a>
                <a href="#" class="footer_about_blog">Privacy</a>
                <a href="#" class="footer_about_blog">Programs</a>
            </div>
            <div class="footer_help">
                <a href="#" class="footer_about_text">Help</a>
                <a href="#" class="footer_about_blog">F.A.Q.</a>
                <a href="#" class="footer_about_blog">Articles</a>
                <a href="#" class="footer_about_blog">Help center</a>
                <a href="#" class="footer_about_blog">Tech support</a>
                <a href="#" class="footer_about_blog">Sitemap</a>
            </div>
            <div class="footer_news">
                <a href="#" class="footer_about_text">Subscribe to our news</a>
                <div class="footer_news_block">
                    <div class="footer_search">
                        <img class="footer_search_logo_icon" style="width: 7px; height: 30px;" :src="'/images/collection/sk.png'" alt="[" />
                        <p>Enter your e-mail</p>
                        <input type="text" class="footer_search_input"/>
                        <img class="footer_search_logo_icon" style="width: 7px; height: 30px;" :src="'/images/collection/ks.png'" alt="]" />
                    </div>
                    <div class="footer_sub">
                        <button type="submit" class="footer_sub_text">Sub</button>
                    </div>
                </div>
                <p class="footer_news_use">By subscribing you confirm that you have read and accept out <b>Terms of Use</b></p>
            </div>
        </div>        
    </footer>
</template>

<script>

export default {
    name: 'my-footer',
}
</script>

<style scoped>
.footer_main {
    width: 1450px;
    margin: 50px auto;
}
.footer_logo {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.footer_group {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
}
.footer_about, .footer_partners,
.footer_legal, .footer_help
{
    display: flex;
    flex-direction: column;
    width: 190px;
}
.footer_about_text {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 35px;
    color: #000;
    margin: 25px 0;
}
.footer_about_blog {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 30px;
    color: #000;
}
.footer_news {
    display: flex;
    flex-direction: column;
    width: 565px;
}
.footer_news_block {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.footer_search {
    display: flex;
    width: 440px;
    align-items: center;
}
.footer_search p {
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    display: flex;
    align-items: center;
    color: #000;
}
.footer_search_input {
    background: none;
    margin-bottom: 4px;
    line-height: 2.4em;
    border-bottom: 1px solid #000;
    transition: all .2s ease;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width: 252px;
    height: 0;
}
.footer_sub {
    width: 90px;
    height: 70px;
}
.footer_sub_text {
    width: 90px;
    height: 70px;
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
    justify-content: center;
    color: #000;
}
.footer_news_use {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000;
    width: 353px;
}
</style>