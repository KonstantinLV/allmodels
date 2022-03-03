<template>
    <header>
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
            <div class="header_models">
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
            <div class="header_cart">
                <a href="/" class="header_cart_link">
                    <img class="header_cart_icon" style="width: 14px; height: 14px;" :src="'/images/cart.svg'" alt="cart" />
                    <div class="header_cart_count">0</div>
                </a>            
            </div>
            <div class="header_sing">
                <a href="#" class="sing_in" >Sign in | Join</a>
            </div>
        </div>
    </header>
</template>

<script>

export default {
    name: 'my-header',
}
</script>

<style scoped>
    header {
        position: absolute;
        height: 80px;
        width: 100%;
        background: #1A151B;
        top:0;
        left: 0;
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
    .header_models {
        width: 150px;
        height: 22px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-left: 100px;
    }
    .header_models p {
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
    .header_cart {
        width: 35px;
        height: 29px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -11px;
        margin-left: 270px;
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
    .header_sing {
        width: 118px;
        height: 22px;
    }
    .sing_in {
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
</style>