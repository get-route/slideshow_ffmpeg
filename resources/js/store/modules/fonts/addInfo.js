const state= {
    nameAddInfo:" ",
    fontAddInfo:null,
    fontSizeNameAddInfo:35,
    colorNameAddInfo:'#000000',
    topAddInfoPos:160,
    leftAddInfoPos:80,

}
const actions= {
    FONT_PROPERTY_ADDINFO(context , payload){
        context.commit("SET_FONT_REDACTOR_ADDINFO",payload)
    } ,
    NAME_PROPERTY_ADDINFO(context , payload){
        context.commit("SET_NAMES_REDACTOR_ADDINFO",payload)
    },

    FONT_SIZE_ADDINFO(context, payload){
        context.commit("SET_SIZE_FONT_ADDINFO", payload)
    } ,
    FONT_COLOR_ADDINFO(context, payload){
        context.commit("SET_SIZE_COLOR_ADDINFO", payload)
    } ,
    TOP_ADDINFO(context, payload){
        context.commit("SET_TOP_ADDINFO", payload)
    } ,
    LEFT_ADDINFO(context, payload){
        context.commit("SET_LEFT_ADDINFO", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_ADDINFO(state) {
        return state.fontAddInfo;
    } ,
    GET_NAMES_ADDINFO(state) {
        return state.nameAddInfo;
    },

    GET_FONT_SIZE_ADDINFO(state){
        return state.fontSizeNameAddInfo;
    } ,
    GET_FONT_COLOR_ADDINFO(state){
        return state.colorNameAddInfo;
    } ,
    GET_POS_LEFT_ADDINFO(state){
        return state.leftAddInfoPos;
    } ,
    GET_POS_TOP_ADDINFO(state){
        return state.topAddInfoPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_ADDINFO:(state, payload)=>{
        state.fontAddInfo = payload
    },
    SET_NAMES_REDACTOR_ADDINFO:(state, payload)=>{
        state.nameAddInfo = payload
    },
    SET_SIZE_FONT_ADDINFO:(state, payload)=>{
        state.fontSizeNameAddInfo = payload
    }  ,
    SET_SIZE_COLOR_ADDINFO:(state, payload)=>{
        state.colorNameAddInfo = payload
    }  ,
    SET_TOP_ADDINFO:(state, payload)=>{
        state.topAddInfoPos = payload
    }  ,
    SET_LEFT_ADDINFO:(state, payload)=>{
        state.leftAddInfoPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
