const state= {
    nameHeight:" ",
    fontHeight:null,
    fontSizeNameHeight:35,
    colorNameHeight:'#000000',
    topHeightPos:0,
    leftHeightPos:40,

}
const actions= {
    FONT_PROPERTY_HEIGHT(context , payload){
        context.commit("SET_FONT_REDACTOR_HEIGHT",payload)
    } ,
    NAME_PROPERTY_HEIGHT(context , payload){
        context.commit("SET_NAMES_REDACTOR_HEIGHT",payload)
    },

    FONT_SIZE_HEIGHT(context, payload){
        context.commit("SET_SIZE_FONT_HEIGHT", payload)
    } ,
    FONT_COLOR_HEIGHT(context, payload){
        context.commit("SET_SIZE_COLOR_HEIGHT", payload)
    } ,
    TOP_HEIGHT(context, payload){
        context.commit("SET_TOP_HEIGHT", payload)
    } ,
    LEFT_HEIGHT(context, payload){
        context.commit("SET_LEFT_HEIGHT", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_HEIGHT(state) {
        return state.fontHeight;
    } ,
    GET_NAMES_HEIGHT(state) {
        return state.nameHeight;
    },

    GET_FONT_SIZE_HEIGHT(state){
        return state.fontSizeNameHeight;
    } ,
    GET_FONT_COLOR_HEIGHT(state){
        return state.colorNameHeight;
    } ,
    GET_POS_LEFT_HEIGHT(state){
        return state.leftHeightPos;
    } ,
    GET_POS_TOP_HEIGHT(state){
        return state.topHeightPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_HEIGHT:(state, payload)=>{
        state.fontHeight = payload
    },
    SET_NAMES_REDACTOR_HEIGHT:(state, payload)=>{
        state.nameHeight = payload
    },
    SET_SIZE_FONT_HEIGHT:(state, payload)=>{
        state.fontSizeNameHeight = payload
    }  ,
    SET_SIZE_COLOR_HEIGHT:(state, payload)=>{
        state.colorNameHeight = payload
    }  ,
    SET_TOP_HEIGHT:(state, payload)=>{
        state.topHeightPos = payload
    }  ,
    SET_LEFT_HEIGHT:(state, payload)=>{
        state.leftHeightPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
