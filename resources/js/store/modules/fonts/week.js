const state= {
    nameWeek:" ",
    fontWeek:null,
    fontSizeNameWeek:35,
    colorNameWeek:'#000000',
    topWeekPos:120,
    leftWeekPos:0,

}
const actions= {
    FONT_PROPERTY_WEEK(context , payload){
        context.commit("SET_FONT_REDACTOR_WEEK",payload)
    } ,
    NAME_PROPERTY_WEEK(context , payload){
        context.commit("SET_NAMES_REDACTOR_WEEK",payload)
    },

    FONT_SIZE_WEEK(context, payload){
        context.commit("SET_SIZE_FONT_WEEK", payload)
    } ,
    FONT_COLOR_WEEK(context, payload){
        context.commit("SET_SIZE_COLOR_WEEK", payload)
    } ,
    TOP_WEEK(context, payload){
        context.commit("SET_TOP_WEEK", payload)
    } ,
    LEFT_WEEK(context, payload){
        context.commit("SET_LEFT_WEEK", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_WEEK(state) {
        return state.fontWeek;
    } ,
    GET_NAMES_WEEK(state) {
        return state.nameWeek;
    },

    GET_FONT_SIZE_WEEK(state){
        return state.fontSizeNameWeek;
    } ,
    GET_FONT_COLOR_WEEK(state){
        return state.colorNameWeek;
    } ,
    GET_POS_LEFT_WEEK(state){
        return state.leftWeekPos;
    } ,
    GET_POS_TOP_WEEK(state){
        return state.topWeekPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_WEEK:(state, payload)=>{
        state.fontWeek = payload
    },
    SET_NAMES_REDACTOR_WEEK:(state, payload)=>{
        state.nameWeek = payload
    },
    SET_SIZE_FONT_WEEK:(state, payload)=>{
        state.fontSizeNameWeek = payload
    }  ,
    SET_SIZE_COLOR_WEEK:(state, payload)=>{
        state.colorNameWeek = payload
    }  ,
    SET_TOP_WEEK:(state, payload)=>{
        state.topWeekPos = payload
    }  ,
    SET_LEFT_WEEK:(state, payload)=>{
        state.leftWeekPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
