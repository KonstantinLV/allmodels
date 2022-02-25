<template>
    <div class="auth_card">
        <div class="auth_card_form">
            <slot />
        </div>
    </div>
</template>

<style scoped>
.auth_card {
    width: 100%;
    height: 100%;
    background: #fff;
    position: absolute;
    top:285px;
}
.auth_card_form{
    width: 1200px;
    height: 100%;
    margin: 0 auto;
}
</style>
