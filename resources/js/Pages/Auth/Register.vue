<template>
    <div class="register_join">
        <Head title="Register" />

        <my-header></my-header>
        <div class="join_photo">
            <img class="join_photo_image" :src="'/images/join.png'" alt="join" />
        </div>

        <jet-authentication-card>
            <jet-validation-errors class="mb-4" />

            <form class="form_reg" @submit.prevent="submit">
                <div class="register_form_block">
                    <h3 class="join_photo_text">Join</h3>
                    <div class="register_form">
                        <jet-input id="email" type="email" class="register_form_item" placeholder="* Email" v-model="form.email" required />
                    </div>
                    <div class="register_form">
                        <jet-input id="login" type="text" class="register_form_item" placeholder="* Login" v-model="form.login" required />
                    </div>
                    <div class="register_form">
                        <jet-input id="password" :type="type" class="register_form_item" placeholder="* Password" v-model="form.password" required autocomplete="new-password"  />
                        <button @click="showPassword" class="password_icon_block">
                            <img class="password_icon" :src="'/images/okko.svg'" alt="okko" />
                            <img class="password_icon_min" :src="'/images/okko-min.svg'" alt="okko-min" />
                        </button>                        
                    </div>
                    <div class="register_form">
                        <jet-input id="password_confirmation" :type="type" class="register_form_item" placeholder="* Password again" v-model="form.password_confirmation" required autocomplete="new-password" />
                        <button @click="showPassword" class="password_icon_block">
                            <img class="password_icon" :src="'/images/okko.svg'" alt="okko" />
                            <img class="password_icon_min" :src="'/images/okko-min.svg'" alt="okko-min" />
                        </button>
                    </div>
                    <div class="register_form">
                        <jet-input id="firstname" type="text" class="register_form_item" placeholder="First name" v-model="form.firstname" />
                    </div>
                    <div class="register_form">
                        <jet-input id="lastname" type="text" class="register_form_item" placeholder="Last name" v-model="form.lastname" />
                    </div>
                    <div class="register_form">
                        <jet-input id="provider" type="hidden" class="register_form_item" v-model="form.provider" />
                    </div>
                    <div class="register_form">
                        <jet-input id="provider_id" type="hidden" class="register_form_item" v-model="form.provider_id" />
                    </div>           
                </div>
                <div class="model_group">
                    <h3 class="model_group_title">Tell us about yourself(optional)</h3>
                    <div class="model_group_items">
                        <p>I am a:</p>
                        <div class="model_box">
                            <select class="model_box_select">
                                <option>Professional 3D modeller</option>
                                <option>Buyer</option>
                            </select>
                        </div> 
                        <i class="fa fa-angle-down" style="color: white;" aria-hidden="true"></i>
                    </div>
                    <div class="model_choose">
                        <p class="model_choose_text">I'm here to (choose one or more):</p>
                        <div class="model_choose_group">
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="sellmodels" value="Sell models" />
                                <label for="sellmodels">Sell models</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="buymodels" value="Buy models" />
                                <label for="buymodels">Buy models</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="download" value="Download freebies" />
                                <label for="download">Download freebies</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="hiremodellers" value="Hire modellers" />
                                <label for="hiremodellers">Hire modellers</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="findjobs" value="Find jobs as a modeller" />
                                <label for="findjobs">Find jobs as a modeller</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="socialize" value="Socialize and be a part of a community" />
                                <label for="socialize">Socialize and be a part of a community</label>
                            </div>
                            <div class="model_checkbox">
                                <input class="model_checkbox_input" type="checkbox" name="other" value="Other" />
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register_buttons_block">
                    <div class="model_checkbox_button">
                        <input class="model_checkbox_input" type="checkbox" name="getemail" value="I want to get e-mails with news, promos and stuff!" />
                        <label for="getemail">I want to get e-mails with news, promos and stuff!</label>
                    </div>
                    <jet-button class="register_button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Join
                    </jet-button>
                    <div class="register_block_text">
                        <p class="register_text_policy">Privacy Policy | Terms and Conditions</p>
                    </div>
                </div>
            </form>
        </jet-authentication-card>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import MyHeader from '@/Common/Header.vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
import Label from '../../Jetstream/Label.vue'
    export default defineComponent({
        components: {
            Head,
            MyHeader,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
            Label,
        },
        data() {
            return {
                form: this.$inertia.form({
                    firstname: '',
                    lastname: '',
                    login: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    provider: '',
                    provider_id: '',
                    terms: false,
                }),
                type: 'password'
            }
        },
        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            },
            showPassword() {
                if(this.type === 'password') {
                    this.type = 'text'
                } else {
                    this.type = 'password'
                }
            }
        }
    })
</script>

<style scoped>

.join_photo{
    width: 100%;
    max-height: 307px;
    position: absolute;
    top: 80px;
    left: 0;
}
.join_photo_image{
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
}
.join_photo_text{
    position: absolute;
    left: 84px;
    top: -96px;
    width: 78px;
    height: 44px;
    font-family: Montserrat-SemiBold;
    font-style: normal;
    font-size: 36px;
    line-height: 44px;
    color: #000000;
}
.form_reg{
    display: flex;
    flex-wrap: wrap;
    height: 800px;
    justify-content: center;
}
.register_form_block{
    width: 500px;
    height: 450px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: self-end;
    margin-right: 80px;
}
.register_join{
    position: relative;
    width: 100%;
    height: 100%;
    background: #FFFFFF;
}
.register_form {
    position: relative;
    width: 422px;
    height: 36px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
}
.password_icon_block{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    right: 0;
}
.password_icon_min{
    position: absolute;
}
.register_form_item{
    width: 422px;
    height: 40px;
    border-bottom: 1px solid #000;
    border-radius: 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    padding: 20px 5px;
    font-family: Montserrat-Italic;
    font-style: italic;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
}
.register_form_item::placeholder{
    color: #000000;
}
.model_group{
    width: 570px;
    height: 450px;
}
.model_group_title{
    width: 374px;
    height: 29px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
    margin-top: 30px;
}
.model_group_items{
    width: 330px;
    height: 20px;
    display: flex;
    align-items: center;
    margin: 50px 0;
}
.model_group_items p{
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
}
.model_box_select {
    border: none;
    outline: none;
}
.model_box_select:active {
    border: none;
    outline: none;
}
.model_box_select:focus {
    border: none;
    outline: none;
}
.model_box_select option{
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
}
.model_choose_text{
    width: 298px;
    height: 22px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    color: #000000;
    margin-bottom: 26px;
}
.model_choose_group{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}
.model_checkbox{
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}
.model_checkbox_input{
    width: 29px;
    height: 29px;
    border: 1px solid #000000;
    box-sizing: border-box;
}
.model_checkbox label{
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
    margin: 0 25px 0 15px;
}
.register_buttons_block{
    width: 83%;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.model_checkbox_button{
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    width: 422px;
}
.model_checkbox_button label{
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000000;
    margin: 0 25px 0 15px;
    height: 44px;
}
.register_button{
    width: 422px;
    height: 68px;
    background: #D8D8D8;
    border-radius: 10px;
    font-family: Montserrat-SemiBold;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    text-transform: unset;
}
.register_block_text{
    width: 500px;
    height: 17px;
    display: flex;
    justify-content: flex-end;
    align-items: flex-start;
    margin: 13px 0;
}
.register_text_policy{
    width: 84%;
    height: 17px;
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}
</style>