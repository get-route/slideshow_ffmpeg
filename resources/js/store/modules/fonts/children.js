const state= {
    nameChild:" ",
    fontChild:null,
    fontSizeNameChild:35,
    colorNameChild:'#000000',
    topChildPos:40,
    leftChildPos:40,

}
const actions= {
    FONT_PROPERTY_CHILD(context , payload){
        context.commit("SET_FONT_REDACTOR_CHILD",payload)
    } ,
    NAME_PROPERTY_CHILD(context , payload){
        context.commit("SET_NAMES_REDACTOR_CHILD",payload)
    },

    FONT_SIZE_CHILD(context, payload){
        context.commit("SET_SIZE_FONT_CHILD", payload)
    } ,
    FONT_COLOR_CHILD(context, payload){
        context.commit("SET_SIZE_COLOR_CHILD", payload)
    } ,
    TOP_CHILD(context, payload){
        context.commit("SET_TOP_CHILD", payload)
    } ,
    LEFT_CHILD(context, payload){
        context.commit("SET_LEFT_CHILD", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_CHILD(state) {
        return state.fontChild;
    } ,
    GET_NAMES_CHILD(state) {
        return state.nameChild;
    },

    GET_FONT_SIZE_CHILD(state){
        return state.fontSizeNameChild;
    } ,
    GET_FONT_COLOR_CHILD(state){
        return state.colorNameChild;
    } ,
    GET_POS_LEFT_CHILD(state){
        return state.leftChildPos;
    } ,
    GET_POS_TOP_CHILD(state){
        return state.topChildPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_CHILD:(state, payload)=>{
        state.fontChild = payload
    },
    SET_NAMES_REDACTOR_CHILD:(state, payload)=>{
        state.nameChild = payload
    },
    SET_SIZE_FONT_CHILD:(state, payload)=>{
        state.fontSizeNameChild = payload
    }  ,
    SET_SIZE_COLOR_CHILD:(state, payload)=>{
        state.colorNameChild = payload
    }  ,
    SET_TOP_CHILD:(state, payload)=>{
        state.topChildPos = payload
    }  ,
    SET_LEFT_CHILD:(state, payload)=>{
        state.leftChildPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
