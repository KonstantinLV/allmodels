<template>
    <header class="header_coll">
        <div class="header_block">
            <div class="header_logo">
                <a href="/" class="logo_name">
                    <img class="header_logo_icon" style="width: 6.49px; height: 37px;" :src="'/images/[.svg'" alt="[" />
                    <img class="header_logo_icon" style="width: 27.25px; height: 26.98px;" :src="'/images/A.svg'" alt="A" />
                    <img class="header_logo_icon" style="width: 19.41px; height: 26.71px;" :src="'/images/3.svg'" alt="3" />
                    <img class="header_logo_icon" style="width: 23.72px; height: 25.88px;" :src="'/images/D.svg'" alt="D" />
                    <img class="header_logo_icon" style="width: 26.06px; height: 26.69px;" :src="'/images/M.svg'" alt="M" />
                    <img class="header_logo_icon" style="width: 6.49px; height: 37px;" :src="'/images/].svg'" alt="]" />
                </a>
            </div>
            <div class="header_coll_models">
                <p>All 3D models</p>
                <i class="fa fa-angle-up" style="color: white;" aria-hidden="true"></i>
            </div>
            <div class="header_search">
                <img class="header_logo_icon" style="width: 12px; height: 44px;" :src="'/images/[.svg'" alt="[" />
                <p>Search</p>
                <input type="text" class="header_search_text"/>
                <img class="header_search_icon" style="width: 14px; height: 14px;" :src="'/images/search.svg'" alt="cart" />
                <img class="header_logo_icon" style="width: 12px; height: 44px;" :src="'/images/].svg'" alt="]" />
            </div>
            <div class="header_group">
                <div class="header_coll_cart">
                    <a href="/" class="header_cart_link">
                        <img class="header_cart_icon" style="width: 14px; height: 14px;" :src="'/images/cart.svg'" alt="cart" />
                        <div class="header_cart_count">0</div>
                    </a>            
                </div>
                <div class="upload">
                    <label for="file_uploader" class="upload_button">
                        <img class="upload_button_icon" style="width: 18px; height: 16px;" :src="'/images/collection/upload.svg'" alt="file" />
                        <input type="file" id="file_uploader" multiple/>
                        <span class="upload_name">Upload</span>
                    </label>
                </div>
                <div class="info">
                    <a href="#" class="info_icons">
                        <img class="info_icon" style="width: 16px; height: 18px;" :src="'/images/collection/info.svg'" alt="info" />
                        <div class="info_icon_count">0</div>
                    </a>
                </div>
                <div class="login_avatar">
                    <a href="#" class="login_avatar_link" >
                        <img class="header_avatar" :src="'/images/collection/avatar.png'" alt="login" />
                    </a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>

export default {
    name: 'header-collection',
}
</script>

<style scoped>
    .header_coll {
        position: relative;
        height: 80px;
        width: 100%;
        background: #1A151B;
    }
    .header_block {
        max-width: 1500px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        margin: 0 auto;
    }
    .header_logo {
        width: 120px;
        height: 37px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo_name {
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 28px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
    .header_coll_models {
        width: 150px;
        height: 22px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .header_coll_models p {
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
    .header_search {
        width: 600px;
        height: 44px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .header_search_icon {
        width: 14px;
        height: 14px;
    }
    .header_search p {
        font-family: Montserrat-Italic;
        font-size: 16px;
        line-height: 20px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
        font-style: italic;
    }
    .header_search_text {
        background: none;
        margin-bottom: 4px;
        line-height: 2.4em;
        border-bottom: 1px solid #fff;
        transition: all .2s ease;
        border-top: 0;
        border-left: 0;
        border-right: 0;
        width: 470px;
        height: 0;
        box-shadow: none;
        color: #fff;
    }
    .header_group{
        width: 361px;
        height: 60px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 10%;
    }
    .header_coll_cart {
        width: 35px;
        height: 29px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -11px;
    }
    .header_cart_link {
        position: relative;
        width: 29px;
        height: 29px;
        display: flex;
        align-items: flex-end;
    }
    .header_cart_icon {
        width: 18px;
        height: 18px;
    }
    .header_cart_count {
        position: absolute;
        right: 0px;
        top: 1px;
        width: 18px;
        height: 18px;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 9px;
        line-height: 11px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
    .upload {
        margin: 0 35px;
        width: 145px;
        height: 54px;
    }
    .upload_button {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        border: 2px solid #fff;
        border-radius: 10px;
        box-sizing: border-box;
        cursor: pointer;
    }
    .upload input[type="file"] {
        display: none;
    }
    .upload_button_icon {
        margin-right: 10px;
    }
    .upload_name {
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
    .info {
        width: 35px;
        height: 29px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -11px;
    }
    .info_icons {
        position: relative;
        width: 28px;
        height: 26px;
        display: flex;
        align-items: flex-end;
    }
    .info_icon_count {
        position: absolute;
        right: 0px;
        top: -5px;
        width: 18px;
        height: 18px;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 9px;
        line-height: 11px;
        color: #FFFFFF;
    }
    .login_avatar {
        width: 60px;
        height: 60px;
        margin-left: 35px;
    }
    .login_avatar_link {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }
</style>