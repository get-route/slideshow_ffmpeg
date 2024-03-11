const state= {
    nameSister:" ",
    fontSister:null,
    fontSizeNameSister:35,
    colorNameSister:'#000000',
    topSisterPos:0,
    leftSisterPos:80,

}
const actions= {
    FONT_PROPERTY_SISTER(context , payload){
        context.commit("SET_FONT_REDACTOR_SISTER",payload)
    } ,
    NAME_PROPERTY_SISTER(context , payload){
        context.commit("SET_NAMES_REDACTOR_SISTER",payload)
    },

    FONT_SIZE_SISTER(context, payload){
        context.commit("SET_SIZE_FONT_SISTER", payload)
    } ,
    FONT_COLOR_SISTER(context, payload){
        context.commit("SET_SIZE_COLOR_SISTER", payload)
    } ,
    TOP_SISTER(context, payload){
        context.commit("SET_TOP_SISTER", payload)
    } ,
    LEFT_SISTER(context, payload){
        context.commit("SET_LEFT_SISTER", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_SISTER(state) {
        return state.fontSister;
    } ,
    GET_NAMES_SISTER(state) {
        return state.nameSister;
    },

    GET_FONT_SIZE_SISTER(state){
        return state.fontSizeNameSister;
    } ,
    GET_FONT_COLOR_SISTER(state){
        return state.colorNameSister;
    } ,
    GET_POS_LEFT_SISTER(state){
        return state.leftSisterPos;
    } ,
    GET_POS_TOP_SISTER(state){
        return state.topSisterPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_SISTER:(state, payload)=>{
        state.fontSister = payload
    },
    SET_NAMES_REDACTOR_SISTER:(state, payload)=>{
        state.nameSister = payload
    },
    SET_SIZE_FONT_SISTER:(state, payload)=>{
        state.fontSizeNameSister = payload
    }  ,
    SET_SIZE_COLOR_SISTER:(state, payload)=>{
        state.colorNameSister = payload
    }  ,
    SET_TOP_SISTER:(state, payload)=>{
        state.topSisterPos = payload
    }  ,
    SET_LEFT_SISTER:(state, payload)=>{
        state.leftSisterPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
