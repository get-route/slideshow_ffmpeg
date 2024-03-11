const state= {
    nameWatchBirthday:" ",
    fontWatchBirthday:null,
    fontSizeNameWatchBirthday:35,
    colorNameWatchBirthday:'#000000',
    topWatchBirthdayPos:40,
    leftWatchBirthdayPos:0,

}
const actions= {
    FONT_PROPERTY_WATCHBIRTHDAY(context , payload){
        context.commit("SET_FONT_REDACTOR_WATCHBIRTHDAY",payload)
    } ,
    NAME_PROPERTY_WATCHBIRTHDAY(context , payload){
        context.commit("SET_NAMES_REDACTOR_WATCHBIRTHDAY",payload)
    },

    FONT_SIZE_WATCHBIRTHDAY(context, payload){
        context.commit("SET_SIZE_FONT_WATCHBIRTHDAY", payload)
    } ,
    FONT_COLOR_WATCHBIRTHDAY(context, payload){
        context.commit("SET_SIZE_COLOR_WATCHBIRTHDAY", payload)
    } ,
    TOP_WATCHBIRTHDAY(context, payload){
        context.commit("SET_TOP_WATCHBIRTHDAY", payload)
    } ,
    LEFT_WATCHBIRTHDAY(context, payload){
        context.commit("SET_LEFT_WATCHBIRTHDAY", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_WATCHBIRTHDAY(state) {
        return state.fontWatchBirthday;
    } ,
    GET_NAMES_WATCHBIRTHDAY(state) {
        return state.nameWatchBirthday;
    },

    GET_FONT_SIZE_WATCHBIRTHDAY(state){
        return state.fontSizeNameWatchBirthday;
    } ,
    GET_FONT_COLOR_WATCHBIRTHDAY(state){
        return state.colorNameWatchBirthday;
    } ,
    GET_POS_LEFT_WATCHBIRTHDAY(state){
        return state.leftWatchBirthdayPos;
    } ,
    GET_POS_TOP_WATCHBIRTHDAY(state){
        return state.topWatchBirthdayPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_WATCHBIRTHDAY:(state, payload)=>{
        state.fontWatchBirthday = payload
    },
    SET_NAMES_REDACTOR_WATCHBIRTHDAY:(state, payload)=>{
        state.nameWatchBirthday = payload
    },
    SET_SIZE_FONT_WATCHBIRTHDAY:(state, payload)=>{
        state.fontSizeNameWatchBirthday = payload
    }  ,
    SET_SIZE_COLOR_WATCHBIRTHDAY:(state, payload)=>{
        state.colorNameWatchBirthday = payload
    }  ,
    SET_TOP_WATCHBIRTHDAY:(state, payload)=>{
        state.topWatchBirthdayPos = payload
    }  ,
    SET_LEFT_WATCHBIRTHDAY:(state, payload)=>{
        state.leftWatchBirthdayPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
