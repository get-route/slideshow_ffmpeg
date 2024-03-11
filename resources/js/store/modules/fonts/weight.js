const state= {
    nameWeight:" ",
    fontWeight:null,
    fontSizeNameWeight:35,
    colorNameWeight:'#000000',
    topWeightPos:160,
    leftWeightPos:0,

}
const actions= {
    FONT_PROPERTY_WEIGHT(context , payload){
        context.commit("SET_FONT_REDACTOR_WEIGHT",payload)
    } ,
    NAME_PROPERTY_WEIGHT(context , payload){
        context.commit("SET_NAMES_REDACTOR_WEIGHT",payload)
    },

    FONT_SIZE_WEIGHT(context, payload){
        context.commit("SET_SIZE_FONT_WEIGHT", payload)
    } ,
    FONT_COLOR_WEIGHT(context, payload){
        context.commit("SET_SIZE_COLOR_WEIGHT", payload)
    } ,
    TOP_WEIGHT(context, payload){
        context.commit("SET_TOP_WEIGHT", payload)
    } ,
    LEFT_WEIGHT(context, payload){
        context.commit("SET_LEFT_WEIGHT", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_WEIGHT(state) {
        return state.fontWeight;
    } ,
    GET_NAMES_WEIGHT(state) {
        return state.nameWeight;
    },

    GET_FONT_SIZE_WEIGHT(state){
        return state.fontSizeNameWeight;
    } ,
    GET_FONT_COLOR_WEIGHT(state){
        return state.colorNameWeight;
    } ,
    GET_POS_LEFT_WEIGHT(state){
        return state.leftWeightPos;
    } ,
    GET_POS_TOP_WEIGHT(state){
        return state.topWeightPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_WEIGHT:(state, payload)=>{
        state.fontWeight = payload
    },
    SET_NAMES_REDACTOR_WEIGHT:(state, payload)=>{
        state.nameWeight = payload
    },
    SET_SIZE_FONT_WEIGHT:(state, payload)=>{
        state.fontSizeNameWeight = payload
    }  ,
    SET_SIZE_COLOR_WEIGHT:(state, payload)=>{
        state.colorNameWeight = payload
    }  ,
    SET_TOP_WEIGHT:(state, payload)=>{
        state.topWeightPos = payload
    }  ,
    SET_LEFT_WEIGHT:(state, payload)=>{
        state.leftWeightPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
