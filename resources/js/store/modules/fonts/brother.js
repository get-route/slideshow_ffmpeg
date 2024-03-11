const state= {
    nameBrother:" ",
    fontBrother:null,
    fontSizeNameBrother:35,
    colorNameBrother:'#000000',
    topBrotherPos:160,
    leftBrotherPos:40,

}
const actions= {
    FONT_PROPERTY_BROTHER(context , payload){
        context.commit("SET_FONT_REDACTOR_BROTHER",payload)
    } ,
    NAME_PROPERTY_BROTHER(context , payload){
        context.commit("SET_NAMES_REDACTOR_BROTHER",payload)
    },

    FONT_SIZE_BROTHER(context, payload){
        context.commit("SET_SIZE_FONT_BROTHER", payload)
    } ,
    FONT_COLOR_BROTHER(context, payload){
        context.commit("SET_SIZE_COLOR_BROTHER", payload)
    } ,
    TOP_BROTHER(context, payload){
        context.commit("SET_TOP_BROTHER", payload)
    } ,
    LEFT_BROTHER(context, payload){
        context.commit("SET_LEFT_BROTHER", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_BROTHER(state) {
        return state.fontBrother;
    } ,
    GET_NAMES_BROTHER(state) {
        return state.nameBrother;
    },

    GET_FONT_SIZE_BROTHER(state){
        return state.fontSizeNameBrother;
    } ,
    GET_FONT_COLOR_BROTHER(state){
        return state.colorNameBrother;
    } ,
    GET_POS_LEFT_BROTHER(state){
        return state.leftBrotherPos;
    } ,
    GET_POS_TOP_BROTHER(state){
        return state.topBrotherPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_BROTHER:(state, payload)=>{
        state.fontBrother = payload
    },
    SET_NAMES_REDACTOR_BROTHER:(state, payload)=>{
        state.nameBrother = payload
    },
    SET_SIZE_FONT_BROTHER:(state, payload)=>{
        state.fontSizeNameBrother = payload
    }  ,
    SET_SIZE_COLOR_BROTHER:(state, payload)=>{
        state.colorNameBrother = payload
    }  ,
    SET_TOP_BROTHER:(state, payload)=>{
        state.topBrotherPos = payload
    }  ,
    SET_LEFT_BROTHER:(state, payload)=>{
        state.leftBrotherPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
