const state= {
    nameBirthday:" ",
    fontBirthday:null,
    fontSizeNameBirthday:35,
    colorNameBirthday:'#000000',
    topBirthdayPos:80,
    leftBirthdayPos:0,

}
const actions= {
    FONT_PROPERTY_BIRTHDAY(context , payload){
        context.commit("SET_FONT_REDACTOR_BIRTHDAY",payload)
    } ,
    NAME_PROPERTY_BIRTHDAY(context , payload){
        context.commit("SET_NAMES_REDACTOR_BIRTHDAY",payload)
    },

    FONT_SIZE_BIRTHDAY(context, payload){
        context.commit("SET_SIZE_FONT_BIRTHDAY", payload)
    } ,
    FONT_COLOR_BIRTHDAY(context, payload){
        context.commit("SET_SIZE_COLOR_BIRTHDAY", payload)
    } ,
    TOP_BIRTHDAY(context, payload){
        context.commit("SET_TOP_BIRTHDAY", payload)
    } ,
    LEFT_BIRTHDAY(context, payload){
        context.commit("SET_LEFT_BIRTHDAY", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_BIRTHDAY(state) {
        return state.fontBirthday;
    } ,
    GET_NAMES_BIRTHDAY(state) {
        return state.nameBirthday;
    },

    GET_FONT_SIZE_BIRTHDAY(state){
        return state.fontSizeNameBirthday;
    } ,
    GET_FONT_COLOR_BIRTHDAY(state){
        return state.colorNameBirthday;
    } ,
    GET_POS_LEFT_BIRTHDAY(state){
        return state.leftBirthdayPos;
    } ,
    GET_POS_TOP_BIRTHDAY(state){
        return state.topBirthdayPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_BIRTHDAY:(state, payload)=>{
        state.fontBirthday = payload
    },
    SET_NAMES_REDACTOR_BIRTHDAY:(state, payload)=>{
        state.nameBirthday = payload
    },
    SET_SIZE_FONT_BIRTHDAY:(state, payload)=>{
        state.fontSizeNameBirthday = payload
    }  ,
    SET_SIZE_COLOR_BIRTHDAY:(state, payload)=>{
        state.colorNameBirthday = payload
    }  ,
    SET_TOP_BIRTHDAY:(state, payload)=>{
        state.topBirthdayPos = payload
    }  ,
    SET_LEFT_BIRTHDAY:(state, payload)=>{
        state.leftBirthdayPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
