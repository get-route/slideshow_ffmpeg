const state= {
    nameFather:" ",
    fontFather:null,
    fontSizeNameFather:35,
    colorNameFather:'#000000',
    topFatherPos:120,
    leftFatherPos:40,

}
const actions= {
    FONT_PROPERTY_FATHER(context , payload){
        context.commit("SET_FONT_REDACTOR_FATHER",payload)
    } ,
    NAME_PROPERTY_FATHER(context , payload){
        context.commit("SET_NAMES_REDACTOR_FATHER",payload)
    },

    FONT_SIZE_FATHER(context, payload){
        context.commit("SET_SIZE_FONT_FATHER", payload)
    } ,
    FONT_COLOR_FATHER(context, payload){
        context.commit("SET_SIZE_COLOR_FATHER", payload)
    } ,
    TOP_FATHER(context, payload){
        context.commit("SET_TOP_FATHER", payload)
    } ,
    LEFT_FATHER(context, payload){
        context.commit("SET_LEFT_FATHER", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_FATHER(state) {
        return state.fontFather;
    } ,
    GET_NAMES_FATHER(state) {
        return state.nameFather;
    },

    GET_FONT_SIZE_FATHER(state){
        return state.fontSizeNameFather;
    } ,
    GET_FONT_COLOR_FATHER(state){
        return state.colorNameFather;
    } ,
    GET_POS_LEFT_FATHER(state){
        return state.leftFatherPos;
    } ,
    GET_POS_TOP_FATHER(state){
        return state.topFatherPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_FATHER:(state, payload)=>{
        state.fontFather = payload
    },
    SET_NAMES_REDACTOR_FATHER:(state, payload)=>{
        state.nameFather = payload
    },
    SET_SIZE_FONT_FATHER:(state, payload)=>{
        state.fontSizeNameFather = payload
    }  ,
    SET_SIZE_COLOR_FATHER:(state, payload)=>{
        state.colorNameFather = payload
    }  ,
    SET_TOP_FATHER:(state, payload)=>{
        state.topFatherPos = payload
    }  ,
    SET_LEFT_FATHER:(state, payload)=>{
        state.leftFatherPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
